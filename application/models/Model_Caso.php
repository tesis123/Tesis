<?php

class Model_Caso extends CI_Model{
	function insertar($data){
		$this -> db -> insert('caso',$data);
		}
		
	function editar($data){
		$this -> db -> update('caso',$data);
		}

	function eliminar($data){
		return $this -> db -> delete('caso', array('id_caso'=> $data));
		}

	
	function getAll(){
		$query = $this -> db -> get('caso');
		return $query -> result();
	}

	function getAllRecords($id){
		$query = $this -> db -> get_where('caso', array('id_caso' => $id));
		if ($query -> num_rows () > 0){
				return $query -> row();
				}
	}
}

?>
