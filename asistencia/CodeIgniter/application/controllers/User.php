<?php
Class User extends CI_Controller {
  function authenticate(){
    //para ver si estan entrando los datos.
    //print_r($this->input->post());
    //die();
    /*Asignacion de variable
    *$usarname se le asigna $this->input->post("username"); que es lo que esta en el input del login
    */
    $username = $this->input->post("username");
    $password = $this->input->post("password");
    $this->load->model("User_mdl","User_mdl",true);
    //A $user se el resultado del query del funcion check_if_exists(); el cual verifica si existe el usario o no.
    $user = $this->User_mdl->check_if_exists($username, $password);
    $role = $user->role;
    $last_login = $user->last_login;
    if($user){
      if($role=='"admin"'){
        $this->User_mdl->update_last_login($user->id);
        $this->load->view('head');
        $this->load->view('profe_view');
        $this->load->view('footer');
        return;
      }
      date_default_timezone_set('America/Tijuana');
      $today= date("H:i:s");
      $day = date("Y-m-d");
      $start = date("11:30:00");
      $final = date("22:00:00");
      //validamos que el tiempo local sea mayor al de inicio y menor al final.
      if($today >= $start && $today <= $final){
        if($last_login != $day){
          $key = "";
          $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
          $length = 10;
          $max = strlen($caracteres) - 1;
          for ($i=0;$i<$length;$i++) {
            $key .= substr($caracteres, rand(0, $max), 1);
          }
            $this->User_mdl->update_last_login($user->id);
            $data = array("code"=>$key, "date"=>$today, 'final'=>$final, 'id'=>$user->id);
            $this->load->view('head');
            $this->load->view('alumno_view',$data);
            $this->load->view('footer');
        }else{
          $this->load->helper('url');
          redirect('/');
        }
      }else{
        $this->load->helper('url');
        redirect('/');
      }
    }else{
      $this->load->helper('url');
      redirect('/');
    }
  }
  function register(){
    //El $this->load->view(); sirve para cargar una vista en el navegador.
    $this->load->model("User_mdl","User_mdl",true);
    // Es como si fuera el if($username = ""){}
    // if(this->post()){}
    $username = $this->input->post("username");
    $firstname = $this->input->post("firstname");
    $lastname = $this->input->post("lastname");
    $password = $this->input->post("password");
    $confirmPassword = $this->input->post("confirmpassword");
    $email = $this->input->post("email");

    if($username=="" || $firstname=="" || $lastname=="" || $password=="" || $confirmPassword=="" || $email==""){
      echo "Favor de introducir algo :C";
    }else{
      if($confirmPassword == $password){
          $this->User_mdl->register_user($username, $firstname, $lastname, $password, $email);
          $this->load->view('head');
          $this->load->view('profe_view');
          $this->load->view('footer');
      }else{
        echo "La contraseña no coincida :C";
      }
    }
  }
  function busqueda(){
    $this->load->model("User_mdl","User_mdl",true);
    $data["res_list"] = $this->User_mdl->get_all();
    $this->load->view('head');
    $this->load->view('busqueda_view',$data);
    $this->load->view('footer');
  }
  function busqueda_where(){
    $name = $this->input->post("nombre");
    $last_name = $this->input->post("apellido");
    $this->load->model("User_mdl","User_mdl",true);
    $data["res_list"] = $this->User_mdl->get_where($name, $last_name);
    $this->load->view('head');
    $this->load->view('busqueda_view',$data);
    $this->load->view('footer');
  }
  function session_total(){
    $sesion_total = $this->input->post('sesiones');
    $this->load->model("Alumnos_mdl","Alumnos_mdl",true);
    $max = $this->Alumnos_mdl->check_max();
    if($sesion_total >= $max->session_now){
      $this->Alumnos_mdl->session_update($sesion_total);
      $this->load->view('head');
      $this->load->view('profe_view');
      $this->load->view('footer');
    }else{
      echo "El numero de sesiones es menor a la de los alumnos";
      $this->load->view('head');
      $this->load->view('profe_view');
      $this->load->view('footer');
    }
  }
  function session(){
    $id = $this->input->post("id");
    $now = $this->input->post("date");
    $final = $this->input->post("final");
    $code = $this->input->post("code");
    $codein = $this->input->post("codein");
    $this->load->model("Alumnos_mdl","Alumnos_mdl",true);
    if($code == $codein){
      $this->Alumnos_mdl->set_session($id);
      $this->load->helper('url');
      redirect('/');
    }else{
      $this->load->model("User_mdl","User_mdl",true);
      $user = $this->User_mdl->check($id);
      date_default_timezone_set('America/Tijuana');
      $today= date("H:i:s");
      $day = date("Y-m-d");
      $start = date("11:30:00");
      $final = date("22:00:00");
      //validamos que el tiempo local sea mayor al de inicio y menor al final.
      if($today >= $start && $today <= $final){
          $key = "";
          $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
          $length = 10;
          $max = strlen($caracteres) - 1;
          for ($i=0;$i<$length;$i++) {
            $key .= substr($caracteres, rand(0, $max), 1);
          }
            $data = array("code"=>$key, "date"=>$today, 'final'=>$final, 'id'=>$user->id);
            $this->load->view('head');
            $this->load->view('alumno_view',$data);
            $this->load->view('footer');
          }
        }
      }
  function exit_btn(){
    $this->load->helper('url');
    redirect('/');
  }
}
?>
