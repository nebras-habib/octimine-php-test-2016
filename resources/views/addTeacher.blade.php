@extends('master') @section('content')
@if(Session::has('delete_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('delete_message') !!}</em></div>   
@endif
@if(Session::has('update_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('update_message') !!}</em></div>   
@endif
<span><b>Teachers List</b></span>

@foreach ($teachers as $teacher)

	<div class="row list-group-item page-title-list">
	    <div class="col-xs-2">
	    {{ $teacher->first_name }}
	    </div>
	    <div class="col-xs-2">
	    {{ $teacher->last_name }}
	    </div>
	    <div class="col-xs-2">
	    {{ $teacher->age }}
	    </div>
	     <div class="col-xs-2">
	        <div><a href="teachers/{{ $teacher->id }}/edit" class="btn btn-default pull-right">Edit</a> </div>
	    </div>
	    <div class="col-xs-2">
	        <div><a href="teachers/{{ $teacher->id }}/delete" class="btn btn-danger pull-right">Delete</a> </div>
	    </div>
	</div>

@endforeach

@if(Session::has('add_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('add_message') !!}</em></div>   
@endif
<span><b>Add Teacher</b></span>
<div class="row list-group-item">
	<form class="form-horizontal" role="form" method="post" action="addteacher">
	{{ csrf_field() }}
		<div class="form-group">
			<label class="control-label col-sm-3" for="first_name">First Name : </label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="first_name"
					name="first_name" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="last_name">Last Name : </label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="last_name"
					name="last_name" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="age">Age : </label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="age" name="age"
					placeholder="">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2 col-sm-offset-2">
				<button type="submit" class="btn btn-primary" name="add-teacher">add</button>
			</div>

		</div>

	</form>
</div>
@stop
