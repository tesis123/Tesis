<?php   	 	                                                                                                                  					      

class Usuario extends CI_Controller{
	
	  function __construct() {
       parent::__construct();
		$this -> load -> model('Model_Usuario');
	}

	public function Index (){
		$data['titulo']= 'Pagina Principal';
		$data['query'] = $this -> Model_Usuario -> getAll();
		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Usuario/Index');
		$this -> load ->view ('Plantilla/FooterT');
	}

	public function Agregar(){
		$data['titulo']= 'Agregar';
		$this->load->model('Model_Perfil');
		$data['query1'] = $this -> Model_Perfil -> getAll();
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Usuario/Agregar');
		$this -> load ->view ('Plantilla/Footer');
	}



	public function AgregarUsuario(){
        $this -> form_validation -> set_rules('nusuario','usuario','required');
        $this -> form_validation -> set_rules('nclave','clave','required');
        $this -> form_validation -> set_rules('nid_perfil','id_perfil','required');
        $this -> form_validation -> set_rules('nestado','estado','required');
        $this -> form_validation -> set_rules('ncedula','cedula','required');
		$this -> form_validation -> set_rules('nnombre','nombre','required');
		$this -> form_validation -> set_rules('napellido','Direccion','required');
		$this -> form_validation -> set_rules('nemail','email','required');

		
		$this->load->model('Model_Perfil');
		$data['query1'] = $this -> Model_Perfil -> getAll();
		

		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Agregar Usuario';

			$this -> load -> view ('Plantilla/HeaderT', $data);
			$this -> load -> view ('Usuario/Agregar');
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'usuario' => $this -> input -> post('nusuario'),
				'clave' => md5 ($this -> input -> post('nclave')) ,
				'id_perfil' => $this -> input -> post('nid_perfil'),
				'estado' => $this -> input -> post('nestado'),
				'cedula' => $this -> input -> post('ncedula'),
				'nombre' => $this -> input -> post('nnombre'),
				'apellido' => $this -> input -> post('napellido'),
				'email' => $this -> input -> post('nemail')
			);
			
			$this -> Model_Usuario -> insertar($data);
			redirect('../agenda/Usuario/Index');
		}

}

public function Editar(){
		$data['titulo']= 'Editar';
		$this->load->model('Model_Perfil');
		$data['query1'] = $this -> Model_Perfil -> getAll();
		$this -> load ->view ('Plantilla/HeaderE',$data);
		$this -> load ->view ('Usuario/Editar');
		$this -> load ->view ('Plantilla/Footer');
	}


	public function EditarUsuario($id){

		$id1['id'] = $id;
		$this->load->model('Model_Usuario');
		$record = $this -> Model_Usuario -> getAllRecords($id);
		
        $this -> form_validation -> set_rules('nusuario','usuario','required');
        $this -> form_validation -> set_rules('nclave','clave','required');
        $this -> form_validation -> set_rules('nid_perfil','id_perfil','required');
        $this -> form_validation -> set_rules('nestado','estado','required');
        $this -> form_validation -> set_rules('ncedula','cedula','required');
		$this -> form_validation -> set_rules('nnombre','nombre','required');
		$this -> form_validation -> set_rules('napellido','Direccion','required');
		$this -> form_validation -> set_rules('nemail','email','required');

		$this->load->model('Model_Perfil');
		$data['query1'] = $this -> Model_Perfil -> getAll();
		
		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Editar Usuario';

			$this -> load -> view ('Plantilla/HeaderE', $data);
			$this -> load -> view ('Usuario/Editar', ['record'=> $record]);
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'usuario' => $this -> input -> post('nusuario'),
				'clave' => md5($this -> input -> post('nclave')),
				'id_perfil' => $this -> input -> post('nid_perfil'),
				'estado' => $this -> input -> post('nestado'),
				'cedula' => $this -> input -> post('ncedula'),
				'nombre' => $this -> input -> post('nnombre'),
				'apellido' => $this -> input -> post('napellido'),
				'email' => $this -> input -> post('nemail')
			);

			$this-> db -> where('id_usuario', $id);
			$this -> Model_Usuario -> editar($data);
			redirect('../agenda/Usuario/Index');
		}	
	}
	public function Eliminar(){
		$data['titulo']= 'Eliminar';
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Usuario/Eliminar');
		$this -> load ->view ('Plantilla/Footer');
	}


	public function EliminarUsuario($id){
		$this->load->model('Model_Usuario');
		if($this->Model_Usuario->eliminar($id)){
			echo 'eliminado';
		}
		else{
			echo 'no eliminado';	
		}
		return redirect('../agenda/Usuario/Index');

	}


}
?>