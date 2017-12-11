<?php

class Model_Reportes extends CI_Model{
	
		
	function getAll(){
		$query = $this -> db -> get();
		return $query -> result();
	}

	function Enfermedades(){
		  $query = $this->db->query('SELECT sintomas, COUNT(sintomas) AS cantidad FROM paciente GROUP BY sintomas ORDER BY cantidad DESC LIMIT 1');
		  return $query -> result();
	}


}

?>
