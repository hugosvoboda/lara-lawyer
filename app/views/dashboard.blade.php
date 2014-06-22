<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lara Lawyer</title>
  {{ HTML::style('css/bootstrap.css'); }}
</head>
<body>
<div class="container">
	<h1>Bienvenido {{ Auth::user()->name; }}</h1>
	<a href="/logout">Cerrar Sesi&oacute;n</a>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
{{ HTML::script('js/bootstrap.js'); }}
</body>
</html>
