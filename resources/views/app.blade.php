<!DOCTYPE html>
<html>
<head>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('/')}}">MAIN</a></li>
		@if (Auth::user()->email == "a.panibratenko@gmail.com")
			<li><a href="{{ URL::to('users')}}">View All Users</a></li>
			<li><a href="{{ URL::to('users/create')}}">Create a User</a></li>
			<li><a href="{{ URL::to('books/create')}}">Add new Book</a></li>
		@endif
			<li><a href="{{ URL::to('books')}}">View All Books</a></li>
			
		</ul>
	</nav>
	<h1>@yield('pagetitle')</h1>
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message')}}</div>
	@endif
	@yield('content')
	</div>
</body>
</html>