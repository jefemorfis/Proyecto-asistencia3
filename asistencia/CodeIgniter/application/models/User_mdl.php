<?php
  class User_mdl extends CI_Model{
    //funcion para ver si existe el usuario y contraseña dentro de la base de datos.
    public function check_if_exists($user, $password){
      $query = "SELECT * FROM alumnos WHERE user_name ='".$user."' AND password ='".$password."'";
      $result = $this->db->query($query);
      $result = $result->result()[0];
      return $result;
    }
    public function check($id){
      $query = "SELECT * FROM alumnos WHERE id ='".$id."'";
      //echo $query;
      //die();
      $result = $this->db->query($query);
      if(!$result){
        return false;
      }else{
        $result = $result->result()[0];
        return $result;
      }
    }
    //Esta funcion optiene todos los registros de la base de datos.
    public function get_all(){
      $query = $this->db->get('alumnos');
      return $query->result();
    }
    public function get_where($name, $last_name){
      $query = $this->db->get_where('alumnos', array('first_name' => $name, 'last_name'=>$last_name));
      return $query->result();
    }
    //funcion para actualizar el last_login
    public function update_last_login($user_id){
      date_default_timezone_set('America/Tijuana');
      $today = date("Y-m-d");
      $this->db->set('last_login',$today);
      $this->db->where('id',$user_id);
      $this->db->update('alumnos');
      //$this->db->replace('users',array('last_login'=>$today))->where('id',$user_id);
    }
    //funcion para registrar
    public function register_user($username, $firstname, $lastname, $password, $email){
        $arrayData = array('user_name'=>$username,'first_name'=>$firstname, 'last_name'=>$lastname, 'password'=>$password,'email'=>$email);
        $this->db->insert('alumnos',$arrayData);
    }

  }
?>
