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
  <?php require_once'application/views/inc/nav.php' ?>
    <div class="conteudo ">
    <h3 class="col-lg-12">Escolher especialidade</h3>
    <div class="col-lg-4">
    	<form class="form paciente" action="/clinicaOnline/cliente/escolherEspecialista/" id="especForm">
    		<div class="form-group">
	    		<select class=" form-control df_input" id="especSelect">
	    			<option>Selecione uma especialidade</option>
	    			<?php foreach ($especialidade as $key => $value) {
	    				echo '<option value="'.$value->id.'">'.$value->nome.'</option>';
	    			} ?>
	    		</select>
    		</div>
    		<div class="form-group">
	    		<input type="submit" class="df_submit" value="Procurar">
    		</div>
    		
    	</form>
    </div>
    <div class="col-lg-12">
    <?php 
    
    if(@$lista != ''){
    	foreach ($lista as $key => $value) {
    		echo '<div class="col-lg-2">
		    		<a href="../agendarConsulta/'.$value->id_medico.'" class="block">
			    		<figure>
			    			<img src="/clinicaOnline/assets/uploads/medico/'.$value->id_medico.'.jpg">
			    		</figure>
			    		<h4>'.$value->nome.'</h4>
		    		</a>
		    	</div>';
    	}
    }
    	



    ?>
    </div>
    </div>

</body>
</html>
