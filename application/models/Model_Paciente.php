<?php

class Model_Paciente extends CI_Model{
	function insertar($data){
		$this -> db -> insert('paciente',$data);
		}

function editar($data){
		$this -> db -> update('paciente',$data);
		}

	function eliminar($data){
		return $this -> db -> delete('paciente', array('id_paciente'=> $data));
		}

	function getAll(){
		$query = $this -> db -> get('paciente');
		return $query -> result();
	}

	function getAllRecords($id){
		$query = $this -> db -> get_where('paciente', array('id_paciente' => $id));
		if ($query -> num_rows () > 0){
				return $query -> row();
				}
	}
}

?>