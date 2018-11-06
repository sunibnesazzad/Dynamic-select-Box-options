<!DOCTYPE html>
<html>
<head>
	<title>Acme</title>
	<link rel="stylesheet"  href="/css/app.css">
</head>
<body>
@include('include.navbar')

<div class="contailer">
    @yield('content')
</div>

@include('include.footer')
</body>
</html>