<?php
$data = Array(
	'actPage' => 'dashboard'
);

$this->session->set_userdata($data);




 ?>
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
								Pedro <span>15h30</span>
							</b>
						</a>
						<a href="#" class="list-group-item">
							<div class="consultaData">
								<b>15</b>
								<span>MAI</span>
							</div>
							<b>
								Marcos <span>16h30</span>
							</b>
						</a>
					</div>
		    </div>
				<h4 class="col-lg-12">Agendar nova consulta</h4>
				<div class="col-lg-6">
					<div class="list-group" id="consulta">
						<form class="form form-horizontal" action="adicionarHorario" method="post" id="consultaForm">
							<div class="form-group">
								<select class="form-control" name="diaSemana" id="diaSemana">
									<option value="">Selecione o tipo da consulta</option>
									<?php foreach ($tipoConsulta as $key => $value) {
										echo '<option value="'.$value->id.'">'.$value->nome.'</option>';
									} ?>
								</select>
								<table class="table table-hover table-striped" id="medicoLista">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Email</th>
											<th>Ação</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="3">
												Nenhum médico listado
											</td>
										</tr>
									</tbody>
								</table>
							</div>

						</form>

					</div>
				</div>
			</div>
    </div>

</body>
</html>
