<?php
class Home extends CI_Controller{
	public function index(){
		$data['titulo']= "Salud Publica";
		$this -> load ->view ('Plantilla/Header', $data);
		$this -> load ->view ('Home/Index');
		$this -> load ->view ('Plantilla/Footer');
	}


}
?>