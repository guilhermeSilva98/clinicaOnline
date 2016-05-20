<?php

/**
*
*/
class medicoModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function especialidade(){
    $sel = $this->db->get('especialidade');
    return $sel->result();
  }

  public function login(){
    $email = $this->input->post('email');
    $senha = $this->input->post('senha');
    $senha = sha1($senha);

    $this->db->where('email', $email);
    $this->db->where('senha', $senha);

    $sel = $this->db->get('medico');

    print_r($sel->result());

    if($dados = $sel->result()){
      $data = Array(
        'nome' => $dados[0]->nome,
        'id' => $dados[0]->id_medico,
        'tipo' => 'Médico'
      );
      $this->session->set_userdata($data);
      return true;
    }else{
      return false;
    }
  }

  public function create(){
    $prefix = $this->input->post('prefix');
    $nome = $this->input->post('nome');
    $sobrenome = $this->input->post('sobrenome');
    $email = $this->input->post('email');
    $senha = $this->input->post('senha');
    $especialidade = $this->input->post('especialidade');
    $senha = sha1($senha);

    $dados = Array(
      'id_medico' => null,
      'nome' => $prefix.' '.$nome.' '.$sobrenome,
      'email' => $email,
      'senha' => $senha,
      'especialidade' => $especialidade
    );

    $this->db->insert('medico', $dados);

    $data = Array(
      'nome' => $prefix.' '.$nome,
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
    $this->db->where('id_medico', $id);
    $sel = $this->db->get('medico');
    return $sel->result();
  }

  public function picUpload(){
    $config['upload_path'] = './assets/uploads/medico/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $this->session->userdata('id').'.jpg';
    $config['overwrite'] = true;
    $this->load->library('upload', $config);
    if(!$this->upload->do_upload('foto')){
      echo $this->upload->display_errors();
    }
  }

  public function disponibilidade($id){
    $this->db->where('id_medico', $id);
    $sel = $this->db->get('disponibilidade');
    return $sel->result();
  }

  public function adicionarHorario(){
    $id = $this->session->userdata('id');
    $dia = $this->input->post('diaSemana');
    $horarioIni = $this->input->post('horarioIni');
    $horarioFim = $this->input->post('horarioFim');

    $data = Array(
      'id_entrada' => null,
      'id_medico' => $id,
      'dia_semana' => $dia,
      'horario_ini' => $horarioIni,
      'horario_fim' => $horarioFim
    );

    $this->db->insert('disponibilidade', $data);
  }

  public function tipos(){
    $this->db->select('medico.especialidade, especialidade.nome, especialidade.id');
    $this->db->from('medico');
    $this->db->group_by('especialidade');
    $this->db->join('especialidade', 'especialidade.id = medico.especialidade', 'inner');
    $sel = $this->db->get();
    return $sel->result();
  }

  public function displayDoctors($espec){
    $this->db->select('medico.id_medico, medico.nome, medico.email, especialidade.nome as especialidade');
    $this->db->join('especialidade', 'especialidade.id = medico.especialidade', 'inner');
    $this->db->where('especialidade', $espec);
    $sel = $this->db->get('medico');
    echo json_encode($sel->result());
  }

  public function displayDoctor($id){
    $this->db->select('medico.id_medico, medico.nome, medico.email, especialidade.nome as especialidade, especialidade.id');
    $this->db->join('especialidade', 'especialidade.id = medico.especialidade', 'inner');
    $this->db->where('id_medico', $id);
    $sel = $this->db->get('medico');
    return $sel->result();
  }

  public function displaySchedule($id){
    $this->db->select('disponibilidade.*, semana.nome');
    $this->db->join('semana', 'semana.id = disponibilidade.dia_semana', 'inner');
    $this->db->where('id_medico', $id);
    $sel = $this->db->get('disponibilidade');
    return $sel->result();
  }









}




?>
