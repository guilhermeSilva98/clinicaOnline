<?php 

$tipo = '';
if($this->session->userdata('tipo') == 'Médico'){
  $tipo = 'medico';
}else{
  $tipo = 'cliente';
}


 ?>
<link rel="stylesheet" href="/clinicaOnline/assets/css/navBar.css" media="screen" title="no title" charset="utf-8">
<script type="text/javascript" src="/clinicaOnline/assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/clinicaOnline/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/clinicaOnline/assets/js/script.js"></script>
<header class="medico">
  <div class="col-lg-4">
    <h2><?php echo $this->session->userdata('tipo') ?> <small><?php echo  $this->session->userdata('actPage'); ?></small></h2>
  </div>

  <a href="/clinicaOnline/medico/perfil" class="col-lg-4 col-lg-offset-4 perfil">
    <div class="col-lg-6">
      <figure class="col-lg-3">
        <?php
          if(!file_exists('assets/uploads/'.$tipo.'/'.$this->session->userdata('id').'.jpg')){
            echo '<img src="/clinicaOnline/assets/img/avatar.png" alt="avatar">';
          }else{
            echo '<img src="/clinicaOnline/assets/uploads/'.$tipo.'/'.$this->session->userdata('id').'.jpg" alt="avatar">';
          }
         ?>
      </figure>
      <h4><?php echo $this->session->userdata('nome'); ?></h4>
    </div>
  </a>
</header>
<nav class="medico">
  <ul>
    <li><a href="/clinicaOnline/<?php echo $tipo ?>">Home</a></li>
    <li><a href="/clinicaOnline/<?php echo $tipo ?>/perfil">Perfil</a></li>
    <li><a href="#">Agenda</a></li>
    <li><a href="#">Configurações</a></li>
  </ul>
</nav>
