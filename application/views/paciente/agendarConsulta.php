<?php
$data = Array(
	'actPage' => 'agendar consulta'
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
				<h3 class="col-lg-12">Agendar nova consulta</h3>
				<div class="col-lg-6">
					<h4 class="col-lg-12"><?php echo $medico[0]->nome; ?></h4>
          <figure class="col-lg-4">
            <?php
              if(!file_exists('assets/uploads/medico/'.$medico[0]->id_medico.'.jpg')){
                echo '<img src="/clinicaOnline/assets/img/avatar.png" alt="avatar">';
              }else{
                echo '<img src="/clinicaOnline/assets/uploads/medico/'.$medico[0]->id_medico.'.jpg" alt="avatar">';
              }
             ?>
          </figure>
				</div>
        <div class="col-lg-12">
          <h4>Escolha o horário desejado</h4>
          <?php

					 ?>
					<div class="list-group col-lg-6">
						<div class="panel-group">

						<?php
						$offset = 0;
						$date = new DateTime();
						$months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
						$diaSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];
						$semana = [];
						foreach ($disponibilidade as $key => $value) {
							array_push($semana, $value->dia_semana);
						}

						for($i = 0 + $offset ; $i < 10 + $offset ; $i++){
							$displayDate = strtotime('+'.$i.' day', strtotime(date('Y-m-d')));
							if(in_array(date('N', $displayDate), $semana)){
								$month = $months[date('n', $displayDate)-1];


								echo '<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" href="#panel'.$i.'"><b>'.date('d/m', $displayDate).' - </b><span>'.$diaSemana[date('N', $displayDate)-1].'</span></a>
													</h4>
												</div>
												<div id="panel'.$i.'" class="panel-collapse collapse">
													<div class="panel-body">Selecione o horário</div>';
								foreach ($disponibilidade as $key => $value) {
									if($value->dia_semana == date('N', $displayDate)){
										$inicio = $value->horario_ini;
										$fim = $value->horario_fim;
										$period = new DatePeriod(
										    new DateTime($inicio),
										    new DateInterval('PT30M'),
										    new DateTime($fim)
										);

										foreach ($period as $date) {
										    echo '<div class="panel-body"><a href="#">'.$date->format("H:i\n").' - '.$date->format("H:i\n").'</a></div>';
										}
									}
								}

								echo '</div>
											</div>';
							}

						}




						// foreach ($disponibilidade as $key => $value){
						// 	echo '
						// 					<div class="panel panel-default">
						// 				    <div class="panel-heading">
						// 				      <h4 class="panel-title">
						// 				        <a data-toggle="collapse" href="#'.$value->nome.'">'.$value->nome.'</a>
						// 				      </h4>
						// 				    </div>
						// 				    <div id="'.$value->nome.'" class="panel-collapse collapse">
						// 				      <div class="panel-body">Panel Body</div>
						// 				      <div class="panel-footer">Panel Footer</div>
						// 				    </div>
						// 					</div>
						// 				';
						// 			}




						?>


						</div>

					</div>
        </div>
			</div>
    </div>

</body>
</html>
