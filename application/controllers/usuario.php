<?php

/**
 *
 */
class Usuario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function novoUsuario(){
    $this->load->view('usuario/cadastro.php');
  }
}


 ?>
