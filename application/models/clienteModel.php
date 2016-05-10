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
      );
      $this->session->set_userdata($data);
      return true;
    }else{
      return false;
    }
  }
}




 ?>
