<?php

class Medico extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('medicoModel');
    $this->load->model('agendaModel');
  }

  public function index(){
    $this->load->view('medico/dashboard');
  }

  public function verifLogin(){
    if($this->medicoModel->login()){
      redirect('medico/');
    }else{
      redirect('/');
    }
  }

  public function novo(){
    $data['espec'] = $this->medicoModel->especialidade();
    $this->load->view('medico/cadastro', $data);
  }

  public function addMedico(){
    $this->medicoModel->create();
    redirect('medico/');
  }

  public function perfil(){
    $data['dados'] = $this->medicoModel->perfil($this->session->userdata('id'));
    $data['espec'] = $this->medicoModel->especialidade();
    $data['disp'] = $this->medicoModel->disponibilidade($this->session->userdata('id'));
    $data['semana'] = $this->agendaModel->semana();
    $this->load->view('medico/profile', $data);
  }

  public function picUpload(){
    $this->medicoModel->picUpload();
    redirect('medico/perfil');
  }






}



 ?>
