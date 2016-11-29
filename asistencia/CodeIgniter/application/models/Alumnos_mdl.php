<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class alumnos_mdl extends CI_MODEL {
  function get_all () {
    $query = $this->db->get('alumnos');
    return $query->result();
  }
  function set_session($id){
    $query = "SELECT session_now FROM alumnos WHERE id ='".$id."'";
    $result = $this->db->query($query);
    $result = $result->result()[0];
    $session_db = $result->session_now;
    $session = $session_db + 1;
    $this->db->set('session_now',$session);
    $this->db->where('id', $id);
    $this->db->update('alumnos');
  }
  function session_update($session){
    $this->db->set('session_total',$session);
    $this->db->update('alumnos');
  }
  function check_max(){
    $query = "SELECT max(session_now) as session_now FROM alumnos;";
    $result = $this->db->query($query);
    $result = $result->result()[0];
    return $result;
  }

}
