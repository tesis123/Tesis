<?php

class Model_Login extends CI_Model{
	
	public function usuario_por_nombre_contrasena($usuario, $clave){
	$this -> load -> model('Model_Usuario');
      $consulta=$this -> db -> get_where('usuario', array('usuario' => $usuario), array('clave' => $clave));
		if ($consulta -> num_rows () > 0){
				$consulta -> row();
				}			
      $resultado = $consulta->row();
      return $resultado;
   }
}
 ?>
