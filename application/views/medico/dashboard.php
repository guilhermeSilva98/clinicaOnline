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
	<script type="text/javascript" src="/clinicaOnline/assets/js/jquery.css">
	<script type="text/javascript" src="/clinicaOnline/assets/js/script.css">

	</script>
</head>
<body>
  <?php require_once'application/views/inc/medicoNav.php' ?>
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



			</div>










    </div>

</body>
</html>
