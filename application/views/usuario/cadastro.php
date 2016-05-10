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
			<div class="col-lg-8 paciente">
				<form class="" action="cliente/verifLogin" method="post">
          <div class="form-group">
            <label for="type" class="col-lg-2 control-label">Sou: </label>
            <select class="form-control" id="type">
              <option value="1">Paciente</option>
              <option value="2">Médico</option>
            </select>
          </div>
          <div class="form-group">
						<input type="text" name="nome" placeholder="Nome" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="sobrenome" placeholder="Sobrenome" class="form-control">
					</div>
          <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="senha" placeholder="Senha" class="form-control">
          </div>
          <div class="form-group">
            <input class="btn btn-default btn-block" type="submit" value="Entrar">
          </div>
          <div class="form-group" id="espec">
            <label for="type" class="col-lg-2 control-label">Especialidade: </label>
            <select class="form-control" id="type">
              <option value="1">Paciente</option>
              <option value="2">Médico</option>
            </select>
          </div>
				</form>
			</div>
		</div>
		<div class="col-lg-12">
			<p class="signUp">
				Ainda não é cadastrado? <a href="usuario/novoUsuario">Cadastre-se</a>
			</p>
		</div>
	</div>
</div>
</body>
</html>
