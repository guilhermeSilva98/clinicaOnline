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
			<div class="col-lg-8 medico">
				<form class="" action="addMedico" method="post">
          <div class="form-group">
						<input type="text" name="prefix" placeholder="Prefixo" class="form-control">
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
					<div class="form-group" id="espec">
            <select class="form-control" id="type" name="especialidade">
              <option value="null">Especialidade</option>
							<option value="new">Outra especialidade</option>
							<?php
								foreach ($espec as $key => $value) {
									echo '<option value="'.$value->id.'">'.$value->nome.'</option>';
								}
							 ?>
            </select>
          </div>
          <div class="form-group">
            <input class="btn btn-default btn-block" type="submit" value="Cadastrar">
          </div>

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
