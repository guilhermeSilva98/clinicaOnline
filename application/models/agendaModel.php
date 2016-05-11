<?php

/**
 *
 */
class agendaModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function semana(){
    $sel = $this->db->get('semana');
    return $sel->result();
  }












}




 ?>
