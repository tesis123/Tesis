<?php

class Model_Perfil extends CI_Model{
	function insertar($data){
		$this -> db -> insert('perfil',$data);
		}

	function editar($data){
		$this -> db -> update('perfil',$data);
		}

	function eliminar($data){
		return $this -> db -> delete('perfil', array('id_perfil'=> $data));
		}
		
	function getAll(){
		$query = $this -> db -> get('perfil');
		return $query -> result();
	}

	function getAllRecords($id){
		$query = $this -> db -> get_where('perfil', array('id_perfil' => $id));
		if ($query -> num_rows () > 0){
				return $query -> row();
				}
	}
}

?>
