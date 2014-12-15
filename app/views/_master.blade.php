<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Parties on Pennies')</title>
	<meta charset='utf-8'>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='/css/foobooks.css' type='text/css'>

	@yield('head')


</head>
<body>

	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif

	<nav>
		<ul>
		@if(Auth::check())
			<li><a href='/logout'>Log out {{ Auth::user()->email; }}</a></li>
			<li><a href='/'>Home</a></li>
			<li><a href='/party'>View your events</a></li>
			<li><a href='/party_create'>+ Add Event</a></li>
		@else
			<li><a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></li>
		@endif
		</ul>
	</nav>


	<a href='/'><img class='logo' src='/images/banner.jpg' alt='Parties on Pennies Logo'></a>

	<a href='https://github.com/susanBuck/foobooks'>View on Github</a>

	@yield('content')

	@yield('/body')

</body>
</html>





