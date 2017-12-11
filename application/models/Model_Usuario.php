<?php

class Model_Usuario extends CI_Model{
	function insertar($data){
		$this -> db -> insert('usuario',$data);
		}

	function editar($data){
		$this -> db -> update('usuario',$data);
		}

	function eliminar($data){
		return $this -> db -> delete('usuario', array('id_usuario'=> $data));
		}

    function getAllRecords($id){
	    $query = $this -> db -> get_where('usuario', array('id_usuario' => $id));
		if ($query -> num_rows () > 0){
				return $query -> row();
				}
	}


	function getAll(){
		$query = $this -> db -> get('usuario');
		return $query -> result();
	}

}

?>
