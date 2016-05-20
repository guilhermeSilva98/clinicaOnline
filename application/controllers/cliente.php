<?php

class Cliente extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('clienteModel');
    $this->load->model('medicoModel');
    $this->load->model('agendaModel');
  }

  public function index(){
    $data['tipoConsulta'] = $this->medicoModel->tipos();
    $this->load->view('paciente/dashboard', $data);
  }

  public function verifLogin(){
    if($this->clienteModel->login()){
      redirect('cliente/');
    }else{
      redirect('/');
    }
  }

  public function novo(){
    $this->load->view('paciente/cadastro');
  }

  public function addClient(){
    $this->clienteModel->create();
    redirect('cliente/');
  }

  public function perfil(){
    $data['dados'] = $this->clienteModel->perfil($this->session->userdata('id'));
    $this->load->view('paciente/profile', $data);
  }

  public function agendarConsulta($id){
    $data['medico'] = $this->medicoModel->displayDoctor($id);
    $data['disponibilidade'] = $this->medicoModel->displaySchedule($id);
    $this->load->view('paciente/agendarConsulta', $data);
  }

  public function escolherEspecialista(){
    $this->load->view('paciente/listaDoutor');
  }


}



 ?>
