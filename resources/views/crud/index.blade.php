@extends('template')
@section ('title','this is index page')
@section('mainconteiner')
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>
        {{ session('status') }}
    </div>
@endif
@if ($errors->has())
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
{!! Form::open(array('url' => 'save-Student')) !!}
	<legend>Form</legend>

	<div class="form-group">
		<label for="fname">First Name</label>
		<input type="text" name="fname" class="form-control" id="fname">
		<input type="hidden" name="_token" id="input" value="<?php echo csrf_token(); ?>" >
	</div>

	<div class="form-group">
		<label for="lname">Lirst Name</label>
		<input type="text" name="lname" class="form-control" id="lname">
	</div>

	<div class="form-group">
		<label for="email">Email Id</label>
		<input type="text" name="email" class="form-control" id="email">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control" id="password">
	</div>
	<div class="form-group">
		<label for="password">Confirm Password</label>
		<input type="password" name="cpassword" class="form-control" id="cpassword">
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<textarea name="address" id="address" class="form-control" rows="3"></textarea>
		{{-- <input type="text" name="address" class="form-control" id="address"> --}}
	</div>
	
<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
</div>
@endsection