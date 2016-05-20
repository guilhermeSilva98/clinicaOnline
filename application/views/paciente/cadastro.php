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
		<div class="col-lg-8 col-lg-offset-3 paciente login">
			<div class="col-lg-8 paciente">
				<form class="" action="addClient" method="post">
          <div class="form-group">
						<input type="text" name="nome" placeholder="Nome" class="form-control df_input">
					</div>
					<div class="form-group">
						<input type="text" name="sobrenome" placeholder="Sobrenome" class="form-control df_input">
					</div>
          <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control df_input">
          </div>
          <div class="form-group">
            <input type="password" name="senha" placeholder="Senha" class="form-control df_input">
          </div>
          <div class="form-group">
            <input class="btn btn-default btn-block df_submit" type="submit" value="Cadastrar">
          </div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
