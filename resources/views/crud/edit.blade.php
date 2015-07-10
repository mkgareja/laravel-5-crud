@extends('template')
@section('title','This is edit page')
@section('mainconteiner')
<div class="container">
{!! Form::open(array('url' => 'update-Student')) !!}
	<legend>Form</legend>

	<div class="form-group">
		<label for="fname">First Name</label>
		<input type="text" name="fname" class="form-control" id="fname" value="{{ $student->fname}}">
		<input type="hidden" name="id" class="form-control" id="id" value="{{ $student->id}}">
	</div>

	<div class="form-group">
		<label for="lname">Lirst Name</label>
		<input type="text" name="lname" class="form-control" id="lname" value="{{ $student->lname }}">
	</div>

	<div class="form-group">
		<label for="email">Email Id</label>
		<input type="text" name="email" class="form-control" id="email" value="{{ $student->email}}">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="text" name="password" class="form-control" id="password" value="{{ $student->password }}">
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<textarea name="address" id="address" class="form-control" rows="3">{{ $student->address }}</textarea>
		{{-- <input type="text" name="address" class="form-control" id="address"> --}}
	</div>
	
<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
</div>
@endsection