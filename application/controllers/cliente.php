<?php

class Cliente extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('clienteModel');
  }

  public function index(){
    $this->load->view('paciente/dashboard');
  }

  public function verifLogin(){
    if($this->clienteModel->login()){
      redirect('cliente/');
    }else{
      redirect('/');
    }
  }
}



 ?>
