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
  <?php require_once'application/views/inc/nav.php' ?>
    <div class="conteudo ">
    <h3 class="col-lg-12">Escolher especialidade</h3>
    <div class="col-lg-4">
    	<form class="form paciente">
    		<div class="form-group">
	    		<select class=" form-control df_input">
	    			<option>Selecione uma especialidade</option>
	    		</select>
    		</div>
    		<div class="form-group">
	    		<input type="submit" class="df_submit" value="Procurar">
    		</div>
    		
    	</form>
    </div>
    <div class="col-lg-12">
    	<div class="col-lg-2">
    		<a href="#" class="block">
	    		<figure>
	    			<img src="/clinicaOnline/assets/uploads/medico/3.jpg">
	    		</figure>
	    		<h4>Doutor hue</h4>
    		</a>
    	</div>
    	<div class="col-lg-2">
    		<a href="#" class="block">
    		<figure>
    			<img src="/clinicaOnline/assets/uploads/medico/1.jpg">
    		</figure>
    		</a>
    	</div>
    </div>
			<div class="col-lg-6">
				<a href="#" class="block">
					<div class="icon_hl col-mg-3 df_blue_bg"><figure><img src="/clinicaOnline/assets/img/icons/plus.png" alt="+"></figure></div>
					<h4>Agendar Consulta</h4>
				</a>
				<div href="#" class="block">
					<div class="icon_hl col-mg-3 df_blue_bg"><figure><img src="/clinicaOnline/assets/img/icons/clock.png" alt="+"></figure></div>
					<h4>Sua Agenda</h4>
					<div class="list-group block_content">
						<ul>
							<li class="list-group-item"><a href="#"><b>20/05</b> <span>15:30</span> Dr Marcos - <i>Cardiologia</i></a></li>
							<li class="list-group-item"><a href="#"><b>31/06</b> <span>15:30</span> Dra Pietra - <i>Psicologia</i></a></li>
						</ul>
					</div>
				</div>
		    </div>

		    <div class="col-lg-3">
				<a href="#" class="block block_sqr">
					<div class="icon_hl col-mg-3 alert_bg"><figure><img src="/clinicaOnline/assets/img/icons/alert.png" alt="+"></figure></div>
					<h4>Consulta às 14:00</h4>
				</a>
		    </div>
		    <div class="col-lg-3">
				<a href="#" class="block">
					<div class="icon_hl col-mg-3 df_blue_bg"><figure><img src="/clinicaOnline/assets/img/icons/bell_full.png" alt="+"></figure></div>
					<h4><b>1</b> Nova Notificação</h4>
				</a>
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
