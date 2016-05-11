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
  <?php require_once'application/views/inc/pacienteNav.php' ?>
    <div class="conteudo ">
      <h2 class="col-lg-12">Dashboard</h2>
			<div class="col-lg-12">
				<div class="col-lg-4" id="proxCosultas">
					<h4>Próximas consultas</h4>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<div class="consultaData">
								<b>15</b>
								<span>MAI</span>
							</div>
							<b>
								Neurologista <span>Dr. Roberto</span>
							</b>
						</a>

						<a href="#" class="list-group-item">
							<div class="consultaData">
								<b>30</b>
								<span>MAI</span>
							</div>
							<b>
								Neurologista <span>Dr. Roberto</span>
							</b>
						</a>
					</div>
		    </div>



			</div>

			<div class="col-lg-12">
				<div class="col-lg-4" id="novaConsulta">
					<h4>Agendar uma consulta</h4>
					<form class="form-horizontal" action="index.html" method="post">
						<div class="form-group">
							<label for="especialidade">Especialidade da consulta:</label>
							<select class="form-control" name="" id="especialidade">
								<option value="">Selecione um tipo</option>
								<option value="1">Neurologista</option>
								<option value="2">Ortopedista</option>
								<option value="3">Cardiologista</option>
								<option value="4">Urologista</option>
							</select>
						</div>
					</form>
		    </div>
			</div>








    </div>

</body>
</html>
