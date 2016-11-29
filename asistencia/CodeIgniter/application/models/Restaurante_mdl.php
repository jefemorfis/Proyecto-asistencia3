<?php
Class Restaurante_mdl extends CI_Model {
  function check($type, $quality){
    $query = $this->db->get_where('rec_restaurante', array('Tipodecomida' => $type, 'Ambiente' => $quality));
    return $query->result();
  }

  public function check_if_exists($type, $quality){
    $query = "SELECT * FROM rec_restaurante WHERE Tipodecomida ='".$type."' AND Ambiente ='".$quality."'";
    $result = $this->db->query($query);
    if(!$result){
      return false;
    }else{
      $result = $result->result();
      return $result;
    }
  }
  function registrar_mdlrest($nombre, $ubicacion, $ambiente, $tipocomida, $menu, $telefono, $horario){
      $arrayData = array('Nombre'=>$nombre,'Ubicacion'=>$ubicacion, 'Ambiente'=>$ambiente, 'Tipodecomida'=>$tipocomida,'Menu'=>$menu, 'telefono'=>$telefono, 'horario'=>$horario);
      $this->db->insert('rec_restaurante',$arrayData);
  }
}
?>
