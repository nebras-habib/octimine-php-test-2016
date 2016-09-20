<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use App\teacher;
use DB ;
use Session;

class TeacherController extends Controller
{
    public function viewTeacher() {
    	
    	$teachers = DB::table('teachers')->get();
    	return view('addTeacher',compact('teachers'));
    }
    
    public function addTeacher(Request $request) {
    	$teacher = new teacher();
    	$teacher->first_name=$request->first_name ;
    	$teacher->last_name=$request->last_name ;
    	$teacher->age =$request->age;
    	
    	if($teacher->save()){    	
    	Session::flash('add_message','successfully saved.');
    	}
    	
    	return back();
    }
    
    public function deleteTeacher(teacher $teacher) {
    	if($teacher->delete()){
    		Session::flash('delete_message','successfully deleted.');
    	}    	
    	return back();    	
    }
    
    public function editTeacher(teacher $teacher) {
    	return view('editTeacher',compact('teacher'));
    }
    
    public function updateTeacher(Request $request, teacher $teacher) {
    	if($teacher->update($request->all())){
    		Session::flash('update_message','successfully updated.');
    	}
    	
    	return redirect('/');
    }
}
