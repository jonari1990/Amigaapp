<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Listado de usuario</title>
		<meta charset="utf-8">
		<meta name="viewport" content="whidth=device-whith, initial-scale=1, maximum-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
	</head>

	<body>
		<h1>{{$title}}</h1>

		<hr>

		<ul>
			@forelse($id as $id)
				<li>{{$id}}</li>
			@empty
				<p>No Hay Usuarios Registrados</p>
			@endforelse
		</ul>

		{{time()}}


	</body>

	</html>