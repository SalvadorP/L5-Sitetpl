<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
</head>

<body>
	<div id="app">

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="{{ route('/') }}">Title</a>
			{{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>  --}}

			<div class="collapse navbar-collapse" id="navbarColor01">
				<!-- Left Side of the Nav Bar -->
				<ul class="nav navbar-nav navbar-left mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('/') }}"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('/') }}">
						<i class="fa fa-paw" aria-hidden="true">&nbsp;</i>Link 1
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('/') }}">
						<i class="fa fa-rocket" aria-hidden="true">&nbsp;</i>Link 2
						</a>
					</li>					
				</ul>
				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Authentication Links -->
					@guest
					<li>
						<a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true">&nbsp;</i>Login</a>
					</li>
					<li>
						<a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true">&nbsp;</i>Register</a>
					</li>
					@else
					<li class="nav-item">
						<a class="nav-link" href="{{ route('admin') }}">
						<i class="fa fa-gears" aria-hidden="true">&nbsp;</i>Admin
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }}
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									<i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					@endguest
				</ul>
				{{--
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
				</form> --}}
			</div>
		</nav>

		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>