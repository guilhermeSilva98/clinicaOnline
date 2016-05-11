<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agenda Online</title>
	<link rel="stylesheet" type="text/css" href="/clinicaOnline/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/clinicaOnline/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="title">
			<h1>Agenda online</h1>
		</div>
		<div class="col-lg-8 col-lg-offset-3 login">
			<div class="col-lg-4 paciente">
				<h4>Sou Paciente</h4>
				<form class="" action="cliente/verifLogin" method="post">
					<div class="form-group">
						<input type="text" name="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="senha" placeholder="Senha" class="form-control">
					</div>
					<div class="form-group">
						<input class="btn btn-default btn-block" type="submit" value="Entrar">
					</div>
					 <a href="cliente/novo">Cadastre-se</a>
				</form>
			</div>
			<div class="col-lg-4 col-lg-offset-1 medico">
				<h4>Sou Médico</h4>
				<form class="" action="medico/verifLogin" method="post">
					<div class="form-group">
						<input type="text" name="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="senha" placeholder="Senha" class="form-control">
					</div>
					<div class="form-group">
						<input class="btn btn-default btn-block" type="submit" value="Entrar">
					</div>
					<a href="medico/novo">Cadastre-se</a>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
