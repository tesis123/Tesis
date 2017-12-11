<?php   	 	                                                            
class Reportes extends CI_Controller{
	
	  function __construct() {
       parent::__construct();
	}

	public function Index (){
		$data['titulo']= 'Reportes';
		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Reportes/Home');
		$this -> load ->view ('Plantilla/FooterT');
	}


	public function Enfermedades (){
		$data['titulo']= 'Reportes';
		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Reportes/Enfermedades');
		$this -> load ->view ('Plantilla/FooterT');
	}

	public function Droguerias (){
		$data['titulo']= 'Reportes';
		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Reportes/Droguerias');
		$this -> load ->view ('Plantilla/FooterT');
	}


}

?>