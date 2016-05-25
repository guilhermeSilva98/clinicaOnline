<?php

/**
 *
 */
class clienteModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function login(){
    $email = $this->input->post('email');
    $senha = $this->input->post('senha');
    $senha = sha1($senha);

    $this->db->where('email', $email);
    $this->db->where('senha', $senha);

    $sel = $this->db->get('cliente');

    print_r($sel->result());

    if($dados = $sel->result()){
      $data = Array(
        'nome' => $dados[0]->nome,
        'id' => $dados[0]->id_cliente,
        'tipo' => 'Cliente'
      );
      $this->session->set_userdata($data);
      return true;
    }else{
      return false;
    }
  }

  public function create(){
    $nome = $this->input->post('nome');
    $sobrenome = $this->input->post('sobrenome');
    $email = $this->input->post('email');
    $senha = $this->input->post('senha');
    $senha = sha1($senha);

    $dados = Array(
      'id_cliente' => null,
      'nome' => $nome.' '.$sobrenome,
      'email' => $email,
      'senha' => $senha
    );

    $this->db->insert('cliente', $dados);

    $data = Array(
      'nome' => $nome,
      'id' => $this->db->insert_id(),
    );

    $this->session->set_userdata($data);
  }


  public function verifMail($email){
    $this->db->where('email', $email);
    $sel = $this->db->get('cliente');

    if($sel->result()){
      return true;
    }else{
      return false;
    }
  }

  public function perfil($id){
    $this->db->where('id_cliente', $id);
    $sel = $this->db->get('cliente');
    return $sel->result();
  }

  public function picUpload(){
    $config['upload_path'] = './assets/uploads/paciente/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $this->session->userdata('id').'.jpg';
    $config['overwrite'] = true;
    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('foto')){
      echo $this->upload->display_errors();
    }
  }

  public function salvarConsulta(){

    $id_medico = $this->input->post('id_medico');
    $id_cliente = $this->input->post('id_cliente');
    $data = $this->input->post('data');
    $horario = $this->input->post('horario');

    $dados = array(
      'id_cliente' => $id_cliente,
      'id_medico' => $id_medico,
      'data' => $data,
      'horario_ini' => $horario,
    );

    $this->db->insert('consulta', $dados);
    if($this->db->insert_id() > 0){
      echo 'Agendamento realizado';
    }



  }










}




 ?>
