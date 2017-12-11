<?php   	 	                
class Paciente extends CI_Controller{
	
	  function __construct() {
       parent::__construct();
		$this -> load -> model('Model_Paciente');
	}

	public function Index (){
		$data['titulo']= 'Pagina Principal';
		$data['query'] = $this -> Model_Paciente -> getAll();
		$this->load->model('Model_Caso');
		$data['query1'] = $this -> Model_Caso -> getAll();
		$this->load->model('Model_Usuario');
		$data['query2'] = $this -> Model_Usuario -> getAll();
		$this -> load ->view ('Plantilla/HeaderT', $data);
		$this -> load ->view ('Paciente/Index');
		$this -> load ->view ('Plantilla/FooterT');
	}

	public function Agregar(){
		$data['titulo']= 'Agregar';
		$this->load->model('Model_Caso');
		$data['query1'] = $this -> Model_Caso -> getAll();
		$this->load->model('Model_Usuario');
		$data['query2'] = $this -> Model_Usuario -> getAll();
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Paciente/Agregar');
		$this -> load ->view ('Plantilla/Footer');
	}



	public function AgregarPaciente(){
		
        $this -> form_validation -> set_rules('nestado','estado','required');
		$this -> form_validation -> set_rules('nnombre','nom_paciente','required');
		$this -> form_validation -> set_rules('napellido','apell_paciente','required');
		$this -> form_validation -> set_rules('nedad','edad','required');
		$this -> form_validation -> set_rules('ngenero','genero','required');
		$this -> form_validation -> set_rules('ndireccion','direccion0','required');
		$this -> form_validation -> set_rules('ndireccion','direccion','required');
		$this -> form_validation -> set_rules('ndireccion1','direccion','required');
		$this -> form_validation -> set_rules('ndireccion2','direccion','required');
		$this -> form_validation -> set_rules('ntelefono','telefono','required');
		$this -> form_validation -> set_rules('nemail','email','required');
		$this -> form_validation -> set_rules('nsintomas','sintomas','required');
		$this -> form_validation -> set_rules('ndrogueria','drogueria','required');
		$this -> form_validation -> set_rules('nlista_llamada','lista_llamada','required');
		$this -> form_validation -> set_rules('nid_caso','id_caso','required');
		$this -> form_validation -> set_rules('nid_usuario','id_usuario','required');

		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Agregar Paciente';

			$this -> load -> view ('Plantilla/HeaderT', $data);
			$this -> load -> view ('Paciente/Agregar');
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'estado' => $this -> input -> post('nestado'),
				'nom_paciente' => $this -> input -> post('nnombre'),
				'apell_paciente' => $this -> input -> post('napellido'),
				'edad' => $this -> input -> post('nedad'),
				'genero' => $this -> input -> post('ngenero'),
				'direccion' => $this -> input -> post('ndireccion0').' '.$this -> input -> post('ndireccion').'#'.$this -> input -> post('ndireccion1').'-'.$this -> input -> post('ndireccion2'),
				'telefono' => $this -> input -> post('ntelefono'),
				'email' => $this -> input -> post('nemail'),
				'sintomas' => $this -> input -> post('nsintomas'),
				'drogueria' => $this -> input -> post('ndrogueria'),
				'lista_llamada' => $this -> input -> post('nlista_llamada'),			
				'id_caso' => $this -> input -> post('nid_caso'),
				'id_usuario' => $this -> input -> post('nid_usuario')			
			);
			
			$this -> Model_Paciente -> insertar($data);
			redirect('../agenda/Paciente/Index');
		}

}

	public function Editar(){
		$data['titulo']= 'Editar';
		$data['query'] = $this -> Model_Paciente -> getAll();
		$this->load->model('Model_Caso');
		$data['query1'] = $this -> Model_Caso -> getAll();
		$this->load->model('Model_Usuario');
		$data['query2'] = $this -> Model_Usuario -> getAll();
		$this -> load ->view ('Plantilla/HeaderE', $data);
		$this -> load ->view ('Paciente/Editar');
		$this -> load ->view ('Plantilla/Footer');
	}


	public function EditarPaciente($id){
		$this->load->model('Model_Caso');
		$data['query1'] = $this -> Model_Caso -> getAll();
		$this->load->model('Model_Usuario');
		$data['query2'] = $this -> Model_Usuario -> getAll();

		$id1['id'] = $id;
		$this->load->model('Model_Paciente');
		$record = $this -> Model_Paciente -> getAllRecords($id);
		
        $this -> form_validation -> set_rules('nestado','estado','required');
		$this -> form_validation -> set_rules('nnombre','nom_paciente','required');
		$this -> form_validation -> set_rules('napellido','apell_paciente','required');
		$this -> form_validation -> set_rules('nedad','edad','required');
		$this -> form_validation -> set_rules('ngenero','genero','required');
		$this -> form_validation -> set_rules('ndireccion','direccion','required');
		$this -> form_validation -> set_rules('ntelefono','telefono','required');
		$this -> form_validation -> set_rules('nemail','email','required');
		$this -> form_validation -> set_rules('nsintomas','sintomas','required');
		$this -> form_validation -> set_rules('ndrogueria','drogueria','required');
		$this -> form_validation -> set_rules('nlista_llamada','lista_llamada','required');
		$this -> form_validation -> set_rules('nid_caso','id_caso','required');
		$this -> form_validation -> set_rules('nid_usuario','id_usuario','required');

		if($this->form_validation->run() == FALSE){
			//ERROR

			$data['titulo']= 'Editar Paciente';

			$this -> load -> view ('Plantilla/HeaderE', $data);
			$this -> load -> view ('Paciente/Editar', ['record'=> $record]);
			$this -> load -> view ('Plantilla/Footer');
		}else {
			//OK
			$data = array(
				'estado' => $this -> input -> post('nestado'),
				'nom_paciente' => $this -> input -> post('nnombre'),
				'apell_paciente' => $this -> input -> post('napellido'),
				'edad' => $this -> input -> post('nedad'),
				'genero' => $this -> input -> post('ngenero'),
				'direccion' => $this -> input -> post('ndireccion'),
				'telefono' => $this -> input -> post('ntelefono'),
				'email' => $this -> input -> post('nemail'),
				'sintomas' => $this -> input -> post('nsintomas'),
				'drogueria' => $this -> input -> post('ndrogueria'),
				'lista_llamada' => $this -> input -> post('nlista_llamada'),			
				'id_caso' => $this -> input -> post('nid_caso'),
				'id_usuario' => $this -> input -> post('nid_usuario')			
			);
			$this-> db -> where('id_paciente', $id);
			$this -> Model_Paciente -> editar($data);
			redirect('../agenda/Paciente/Index');
		}	
	}
	
	public function Eliminar(){
		$data['titulo']= 'Eliminar';
		$this -> load ->view ('Plantilla/HeaderT',$data);
		$this -> load ->view ('Paciente/Eliminar');
		$this -> load ->view ('Plantilla/Footer');
	}


	public function EliminarPaciente($id){
		$this->load->model('Model_Paciente');
		if($this->Model_Paciente->eliminar($id)){
			echo 'eliminado';
		}
		else{
			echo 'no eliminado';	
		}
		return redirect('../agenda/Paciente/Index');

	}
}
?>