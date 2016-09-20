@extends('master') @section('content')

<span><b>Edit Teacher</b></span>
<div class="row list-group-item">
	<form class="form-horizontal" role="form" method="post" action="update">
	{{ csrf_field() }}
		<div class="form-group">
			<label class="control-label col-sm-3" for="first_name">First Name : </label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="first_name"
					name="first_name" placeholder="" value="{{$teacher->first_name}}">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="last_name">Last Name : </label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="last_name"
					name="last_name" placeholder="" value="{{$teacher->last_name}}">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="age">Age : </label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="age" name="age"
					placeholder="" value="{{$teacher->age}}">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2 col-sm-offset-2">
				<button type="submit" class="btn btn-primary" name="update-teacher">update</button>
			</div>

		</div>

	</form>
</div>
@stop