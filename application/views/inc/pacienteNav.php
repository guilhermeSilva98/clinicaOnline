<link rel="stylesheet" href="/clinicaOnline/assets/css/navBar.css" media="screen" title="no title" charset="utf-8">
<header class="navbar navbar-static-top paciente">
  <div class="col-lg-2">
    <h2>Paciente</h2>
  </div>

  <a href="#" class="col-lg-4 col-lg-offset-6 perfil">
    <div class="col-lg-6">
      <figure>
        <img src="test.png" alt="" />
      </figure>
      <h4><?php echo $this->session->userdata('nome'); ?></h4>
    </div>
  </a>
</header>
<nav class="paciente">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Agenda</a></li>
    <li><a href="#">Nova consulta</a></li>
    <li><a href="#">Configurações</a></li>
  </ul>
</nav>
