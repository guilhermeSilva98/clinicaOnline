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
              if(!file_exists('assets/uploads/medico/'.$this->session->userdata('id').'.jpg')){
                echo '<img src="/clinicaOnline/assets/img/avatar.png" alt="avatar">';
              }else{
                echo '<img src="/clinicaOnline/assets/uploads/medico/'.$this->session->userdata('id').'.jpg" alt="avatar">';
              }
             ?>
          </figure>
				</div>
        <div class="col-lg-12">
          <h4>Escolha o horário desejado</h4>
        </div>
			</div>
    </div>

</body>
</html>
