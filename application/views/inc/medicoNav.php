<link rel="stylesheet" href="/clinicaOnline/assets/css/navBar.css" media="screen" title="no title" charset="utf-8">
<header class="medico">
  <div class="col-lg-2">
    <h2>Médico <small><?php echo  $this->session->userdata('actPage'); ?></small></h2>
  </div>

  <a href="perfil" class="col-lg-4 col-lg-offset-6 perfil">
    <div class="col-lg-6">
      <figure class="col-lg-3">
        <?php
          if(!file_exists('assets/uploads/'.$this->session->userdata('id').'.jpg')){
            echo '<img src="/clinicaOnline/assets/img/avatar.png" alt="avatar">';
          }else{
            echo '<img src="/clinicaOnline/assets/uploads/'.$this->session->userdata('id').'.jpg" alt="avatar">';
          }
         ?>
      </figure>
      <h4><?php echo $this->session->userdata('nome'); ?></h4>
    </div>
  </a>
</header>
<nav class="medico">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="medico/perfil">Perfil</a></li>
    <li><a href="#">Agenda</a></li>
    <li><a href="#">Configurações</a></li>
  </ul>
</nav>
