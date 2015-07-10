<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
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
			<li class="active"><a href="{{URL::to('/')}}">Home</a></li>
			<li><a href="{{URL::to('/view')}}">View</a></li>
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
<div class="panel panel-default">
	  <div class="panel-body">
			Panel content
	  </div>
	  <div class="panel-footer center">
			Panel footer
		</div>
</div>
</div>
<!-- Latest compiled and minified CSS & JS -->

	</body>
</html>
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script type="text/javascript">
 		function showHide() {
   		var div = document.getElementById("myalert");
   		if (div.style.display == 'none') {
     		div.style.display = '';
   		}
   		else {
     	div.style.display = 'none';
   		}
 }
</script>
