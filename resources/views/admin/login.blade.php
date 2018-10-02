<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<div class="container">
		<div class="card card-container">
			<form method="POST" action="{{route('login')}}">
				{{csrf_field()}}
				<div class="card-header">
					Accesso a la Aplicacion
				</div>
				<div class="card-body">
					<div class="form-group {{ $errors->has('email')? 'has-error':''}}">
						<label for="email">Correo Electronico</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Ingresa tu correo" value="{{old('email')}}">
						{!! $errors->first('email','<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña">
						{!! $errors->first('password','<span class="help-block">:message</span>') !!}
					</div>
				</div>

				<button type="submit" class="btn btn-primary btn-block">Acceder</button>
			</form>
			</center>
		</div>
		
	</div>

</body>
	
</html>