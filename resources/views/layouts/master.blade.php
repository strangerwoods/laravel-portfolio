<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Area</title>
</head>
<body>
	@include('partials.header')

	<div class="container">
		@yield('content')
	</div>

	@include('partials.footer')
</body>
</html>