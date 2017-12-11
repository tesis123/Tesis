<?php   	 	                                                                                                                  					      

class Caso extends CI_Controller{
	
	  function __construct() {
       parent::__construct();
		$this -> load -> model('Model_Caso');
	}

	public function Index (){
		$data['titulo']= 'Pagina Principal';
		$data['query'] = $this -> Model_Caso -> getAll();

		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Caso/Index');
		$this -> load ->view ('Plantilla/FooterT');
	}

	public function Agregar(){
		$data['titulo']= 'Agregar';
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Caso/Agregar');
		$this -> load ->view ('Plantilla/Footer');
	}



	public function AgregarCaso(){
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this -> form_validation -> set_rules('nnom_estado','nom_estado','required');


		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Agregar Caso';

			$this -> load -> view ('Plantilla/HeaderT', $data);
			$this -> load -> view ('Caso/Agregar');
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'nom_estado' => $this -> input -> post('nnom_estado')
			);
			
			$this -> Model_Caso -> insertar($data);
			redirect(base_url(), 'caso');
		}

}

public function Editar(){
		$data['titulo']= 'Editar';
		$this -> load ->view ('Plantilla/HeaderE',$data);
		$this -> load ->view ('Caso/Editar');
		$this -> load ->view ('Plantilla/Footer');
	}

	public function EditarCaso($id){
		
		$id1['id'] = $id;
		$this->load->model('Model_Caso');
		$record = $this -> Model_Caso -> getAllRecords($id);
		$this -> form_validation -> set_rules('nnom_estado','nom_estado','required');
		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Editar Perfil';

			$this -> load -> view ('Plantilla/HeaderE', $data);
			$this -> load -> view ('Caso/Editar', ['record'=> $record]);
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'nom_estado' => $this -> input -> post('nnom_estado')
			);
			$this-> db -> where('id_caso', $id);
			$this -> Model_Caso -> editar($data);
			redirect(base_url(), 'caso');
		}	
	}

	public function Eliminar(){
		$data['titulo']= 'Eliminar';
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Caso/Eliminar');
		$this -> load ->view ('Plantilla/Footer');
	}


	public function EliminarCaso($id){
		$this->load->model('Model_Caso');
		if($this->Model_Caso->eliminar($id)){
			echo 'eliminado';
		}
		else{
			echo 'no eliminado';	
		}
		return redirect(base_url(), 'caso');

	}

}
?>