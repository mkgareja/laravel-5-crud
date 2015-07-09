<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{URL::to('/')}}">Crud</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li><a href="{{URL::to('/view')}}">View</a></li>
			<li class="active"><a href="">Edit</a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
<div class="jumbotron">
	<div class="container">
		<h1>Crud</h1>
		<p>Simple crud opration for update install data into mysql database. </p>
		<p>
			<a class="btn btn-primary btn-lg">Let's start..!!</a>
		</p>
	</div>
</div>
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
<div class="panel panel-default">
	  <div class="panel-body">
			Panel content
	  </div>
	  <div class="panel-footer center">
			Panel footer
		</div>
</div>
</body>
</html>

<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
