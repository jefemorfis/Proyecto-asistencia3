<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class proyecto_mdl extends CI_MODEL {
function get_all () {
$query = $this->db->get('proyecto');
return $query->result();
}

}
