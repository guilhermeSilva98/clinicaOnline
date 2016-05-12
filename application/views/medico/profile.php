<?php
$data = Array(
	'actPage' => 'perfil'
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
  <?php require_once'application/views/inc/medicoNav.php' ?>
    <div class="conteudo">
			<div class="col-lg-12" id="perfil">
        <h3 class="col-lg-12">Meu perfil</h3>
				<div class="col-lg-4">
					<div class="list-group">
            <div class="list-group-item">
             <b>Nome:</b> <?php echo $dados[0]->nome ?>  <a href="#">editar</a>
            </div>
            <div class="list-group-item">
             <b>Email:</b> <?php echo $dados[0]->email ?>  <a href="#">editar</a>
            </div>
            <div class="list-group-item">
             <b>Especialidade:</b> <?php foreach ($espec as $key => $value) {
                 if($dados[0]->especialidade == $value->id){
                   echo $value->nome;
                 }
               } ?>  <a href="#">editar</a>
            </div>

					</div>
		    </div>

        <div class="col-lg-4">
					<figure class="col-lg-6">
            <?php
              if(!file_exists('assets/uploads/'.$this->session->userdata('id').'.jpg')){
                echo '<img src="/clinicaOnline/assets/img/avatar.png" alt="avatar">';
              }else{
                echo '<img src="/clinicaOnline/assets/uploads/'.$this->session->userdata('id').'.jpg" alt="avatar">';
              }
             ?>
          </figure>
          <form class="form col-lg-6" action="picUpload" method="post" id="picUpload" enctype="multipart/form-data">
            <div class="form-group">
              <input type="file" name="foto">
              <p class="help-block">
                Envie sua foto aqui
              </p>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="btn btn-default">
            </div>
          </form>
		    </div>
        <h4 class="col-lg-12">Disponibilidade</h4>
        <div class="col-lg-6">
					<div class="list-group" id="disponibilidade">
            <h5>Adicionar horário</h5>
            <form class="form form-inline list-group-item" action="adicionarHorario" method="post">
              <div class="form-group">
                <select class="form-control" name="diaSemana">
                  <option value="">Selecione um dia</option>
									<?php foreach ($semana as $key => $value) {
										echo '<option value="'.$value->id.'">'.$value->nome.'</option>';
									} ?>
                </select>
              </div>
              <div class="form-group">
                <label for="horarioIni">Início:</label>
                <input type="time" name="horarioIni" class="form-control" value="00:00" id="horarioIni">
              </div>
              <div class="form-group">
                <label for="horarioIni">Término:</label>
                <input type="time" name="horarioFim" class="form-control" value="00:00" id="horarioFim">
                <input type="submit" class="btn btn-default" value="Adicionar">
              </div>
            </form>
						<?php
							foreach ($disp as $key => $value) {
								echo '<div class="list-group-item"><b>'.substr($semana[$value->dia_semana]->nome,0,3).'</b> <span>'.substr($value->inicio, 0,5).' - '.substr($value->fim, 0,5).'</span><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
							}
						 ?>

					</div>
		    </div>



			</div>










    </div>

</body>
</html>
