<link rel="stylesheet" href="/clinicaOnline/assets/css/navBar.css" media="screen" title="no title" charset="utf-8">
<script type="text/javascript" src="/clinicaOnline/assets/js/jquery.js"></script>
<script type="text/javascript" src="/clinicaOnline/assets/js/script.js"></script>
<header class="paciente">
  <div class="col-lg-2">
    <h2>Cliente <small><?php echo  $this->session->userdata('actPage'); ?></small></h2>
  </div>

  <a href="/clinicaOnline/cliente/perfil" class="col-lg-4 col-lg-offset-6 perfil">
    <div class="col-lg-6">
      <figure class="col-lg-3">
        <?php
          if(!file_exists('assets/uploads/'.$this->session->userdata('id').'.jpg')){
            echo '<img src="/clinicaOnline/assets/img/avatar.png" alt="avatar">';
          }else{
            echo '<img src="/clinicaOnline/assets/uploads/paciente/'.$this->session->userdata('id').'.jpg" alt="avatar">';
          }
         ?>
      </figure>
      <h4><?php echo $this->session->userdata('nome'); ?></h4>
    </div>
  </a>
</header>
<nav class="paciente">
  <ul>
    <li><a href="/clinicaOnline/cliente">Home</a></li>
    <li><a href="/clinicaOnline/cliente/perfil">Perfil</a></li>
    <li><a href="#">Agenda</a></li>
    <li><a href="#">Configurações</a></li>
  </ul>
</nav>
