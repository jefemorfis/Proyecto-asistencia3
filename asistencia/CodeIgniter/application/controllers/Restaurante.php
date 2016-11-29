<?php
Class Restaurante extends CI_Controller {
  function authenticate(){
    $typefood = $this->input->post('menu');
    $qualityfood = $this->input->post('ambiente');
    $this->load->model("Restaurante_mdl","Restaurante_mdl",true);
    $restaurant = $this->Restaurante_mdl->check_if_exists($typefood, $qualityfood);

    if($restaurant){
      $data = array("res_list"=>$this->Restaurante_mdl->check($typefood, $qualityfood));
      $this->load->view('head');
      $this->load->view('user_view', $data);
      $this->load->view('footer');
    }else{
      echo "No se encontro ningun registro.";
    }
  }
  function registrar_ctrlrest(){
    $this->load->model("Restaurante_mdl","Restaurante_mdl",true);
    $nombre = $this->input->post("nombre");
    $ubicacion = $this->input->post("ubicacion");
    $ambiente = $this->input->post("ambiente");
    $tipocomida = $this->input->post("tipocomida");
    $menu = $this->input->post("menu");
    $telefono = $this->input->post("telefono");
    $horario = $this->input->post("horario");

    if($nombre=="" || $ubicacion=="" || $ambiente=="" || $tipocomida=="" || $menu=="" || $telefono=="" ||  $horario==""){
      echo "Campos Vacios...";
    }else{
      $this->Restaurante_mdl->registrar_mdlrest($nombre, $ubicacion, $ambiente, $tipocomida, $menu, $telefono, $horario);
      $this->load->view('head');
      $this->load->view('menu_view');
      $this->load->view('footer');
    }
  }
}
?>
