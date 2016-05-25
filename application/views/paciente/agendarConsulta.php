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
	<?php require_once'application/views/inc/Nav.php' ?>
	<div class="conteudo ">
		<h3 class="col-lg-12">Escolher horário</h3>
		<?php

			echo 'Hoje:'.date('Y-m-d');
			$start_week = strtotime('-'.date('w').' day', strtotime(date('Y-m-d')));
			echo 'Comeco Semana:'.date('Y-m-d', $start_week);
			$next_week = strtotime('+7 day', $start_week);
			echo 'Comeco Próx Semana:'.date('Y-m-d',$next_week).'</br>';

		?>
		<div class="panel-group block col-lg-6">
			<?php


				$diaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
				$semana = [];
				$indexSemana = isset($_GET['idsm']) ? $_GET['idsm'] : 0;

				foreach ($disponibilidade as $key => $value) {
					array_push($semana, $value->dia_semana);
				}

				$start_week = 0;

				if( $indexSemana == 0 ){
					$start_week = strtotime('-'.date('w').' day', strtotime(date('Y-m-d')));
				}



				for($i = $indexSemana * 7 ; $i < ($indexSemana+1) * 7 ; $i++){
					$displayDate = strtotime('+'.$i.' day', $start_week);
					echo '<div class="panel">';
					echo '<div class="panel-heading">';
					echo '<h4 class="panel-title">';
					
					echo '<a data-toggle="collapse" href="#panel'.$i.'"><b>'.date('d/m', $displayDate).' - </b><span>'.$diaSemana[date('w', $displayDate)].'</span></a>';

					echo '</h4>';
					echo '</div>';
					echo '</div>';
				}














































			// $offset = 0;
			// for($i = 0 + $offset ; $i < 10 + $offset ; $i++){

			// 	$displayDate = strtotime('+'.$i.' day', strtotime(date('Y-m-d')));
			// 	if(in_array(date('N', $displayDate), $semana)){
			// 		echo '<div class="panel">';
			// 		echo '<div class="panel-heading">';
			// 		echo '<h4 class="panel-title">';

			// 		//display date returned from database
			// 		echo '<a data-toggle="collapse" href="#panel'.$i.'"><b>'.date('d/m', $displayDate).' - </b><span>'.$diaSemana[date('N', $displayDate)-1].'</span></a>';

			// 		echo '</h4>';
			// 		echo '</div>';
			// 		echo '<div id="panel'.$i.'" class="panel-collapse collapse">';

			// 		//display available appointment time
			// 		foreach ($disponibilidade as $key => $value) {
			// 			// echo date('d/m', $displayDate);
			// 			if($value->dia_semana == date('N', $displayDate)){
			// 				$inicio = $value->horario_ini; 
			// 				$fim = $value->horario_fim;
			// 				$period = new DatePeriod(
			// 				    new DateTime($inicio),
			// 				    new DateInterval('PT60M'),
			// 				    new DateTime($fim)
			// 				);

			// 				foreach ($period as $date) {
			// 					$isTaken = false;
			// 			    	// echo '<div class="panel-body"><a href="#">'.$date->format("H:i\n").' - '.$date->format("H:i\n").'</a></div>';
			// 			    	$t = strtotime(date($date->format('H:i')));
			// 			    	foreach ($agenda as $a => $val) {
			// 			    		if($date->format('H:i:s') == $val->horario_ini){
			// 							$isTaken = true;
			// 							break;
			// 						}
			// 			    	}
			// 			    	if(!$isTaken){
			// 			    		if(strtotime(date('Y-m-d')) == strtotime(date('Y-m-d', $displayDate))){
			// 				    		if(strtotime(date('H:i')) < strtotime($date->format('H:i'))){
			// 				    			echo '<div class="panel-body selecionarAgenda"><a href="#" data-toggle="modal" data-target="#myModal" data-data="'.date('Y-m-d', $displayDate).'" data-horario="'.$date->format('H:i:s').'">'.$date->format('H:i').' - '.date('H:i', strtotime('+60 minutes', $t)).'</a></div>';
			// 				    		}
			// 				    	}else{
			// 				    		echo '<div class="panel-body selecionarAgenda"><a href="#" data-toggle="modal" data-target="#myModal" data-data="'.date('Y-m-d', $displayDate).'" data-horario="'.$date->format('H:i:s').'">'.$date->format('H:i').' - '.date('H:i', strtotime('+60 minutes', $t)).'</a></div>';
			// 				    	}
			// 			    	}
			// 			    	$isTaken = false;
			// 				}
			// 			}
			// 		}
			// 		echo '</div>';
			// 		echo '</div>';
			// 	}
			// }


			?>
				</div>

			</div>
		<div class="col-lg-4">
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
		</div>	
	</div>



		<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Confirmar agendamento</h4>
	      </div>
	      <div class="modal-body">
	      	<p>Deseja agendar uma consulta às <b id="selecHorario">00:00</b> no dia <b id="selecData">00/00</b> com <b><?php echo $medico[0]->nome ?></b>?</p>
	      </div>
	      <div class="modal-footer">
	      	<input type="hidden" name="" id="id_usuario" value="<?php echo $this->session->userdata('id') ?>">
	      	<input type="hidden" name="" id="id_medico" value="<?php echo $medico[0]->id_medico ?>">
	      	<input type="hidden" name="" id="horario" value="<?php echo $medico[0]->id_medico ?>">
	      	<input type="hidden" name="" id="data" value="<?php echo $medico[0]->id_medico ?>">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary" id="confirm">Confirmar</button>
	      </div>
	    </div>
	  </div>
	</div>


</body>
</html>

