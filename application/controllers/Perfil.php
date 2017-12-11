<?php   	 	                                                            
class Perfil extends CI_Controller{
	
	  function __construct() {
       parent::__construct();
		$this -> load -> model('Model_Perfil');
	}

	public function Index (){
		$data['titulo']= 'Perfil';
		$data['query'] = $this -> Model_Perfil -> getAll();

		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Perfil/Index');
		$this -> load ->view ('Plantilla/FooterT');
	}

	public function Agregar(){
		$data['titulo']= 'Agregar';
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Perfil/Agregar');
		$this -> load ->view ('Plantilla/Footer');
	}

	public function AgregarPerfil(){
		$this -> form_validation -> set_rules('nnombre','nombre','required');
		$this -> form_validation -> set_rules('nestado','estado','required');

		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Agregar Perfil';

			$this -> load -> view ('Plantilla/HeaderT', $data);
			$this -> load -> view ('Perfil/Agregar');
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'nombre' => $this -> input -> post('nnombre'),
				'estado' => $this -> input -> post('nestado'),
			);
			
			$this -> Model_Perfil -> insertar($data);
			redirect('../agenda/Perfil/Index');
		}


	}

	public function Editar(){
		$data['titulo']= 'Editar';
		$this -> load ->view ('Plantilla/HeaderE',$data);
		$this -> load ->view ('Perfil/Editar');
		$this -> load ->view ('Plantilla/Footer');
	}

	public function EditarPerfil($id){
		
		$id1['id'] = $id;
		$this->load->model('Model_Perfil');
		$record = $this -> Model_Perfil -> getAllRecords($id);
		$this -> form_validation -> set_rules('nnombre','nombre','required');
		$this -> form_validation -> set_rules('nestado','estado','required');

		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Editar Perfil';

			$this -> load -> view ('Plantilla/HeaderE', $data);
			$this -> load -> view ('Perfil/Editar', ['record'=> $record]);
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'nombre' => $this -> input -> post('nnombre'),
				'estado' => $this -> input -> post('nestado'),
			);
			$this-> db -> where('id_perfil', $id);
			$this -> Model_Perfil -> editar($data);
			redirect('../agenda/Perfil/Index');
		}	
	}

		public function Eliminar(){
		$data['titulo']= 'Eliminar';
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Perfil/Index');
		$this -> load ->view ('Plantilla/Footer');
	}


	public function EliminarPerfil($id){
		$this->load->model('Model_Perfil');
		if($this->Model_Perfil->eliminar($id)){
			echo 'eliminado';
		}
		else{
			echo 'no eliminado';	
		}
		return redirect('../agenda/Perfil/Index');

	}
}

?>