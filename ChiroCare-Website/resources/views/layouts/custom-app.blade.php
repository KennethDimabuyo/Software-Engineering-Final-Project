<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	

	<!-- Styles -->
	@yield('styles')

</head>
<body>

@yield('content')


<!-- Import Scripts -->
@yield('scripts')

</body>
</html>