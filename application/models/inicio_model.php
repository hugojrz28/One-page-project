<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model {
	function getAgenda()
	{

		$query = $this->db->get('horarios');

		if ($query->num_rows > 0) {
			return $query->result();
		}
		return false;

	}



}

/* End of file inicio_model.php */
/* Location: ./application/models/inicio_model.php */