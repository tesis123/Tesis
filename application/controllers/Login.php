<?php
class Login extends CI_Controller{

   function __construct() {
       parent::__construct();
      $this -> load -> model('Model_Login');
   }

	public function index(){
		$data['titulo']= "Login";
      $data['usuario'] = $this->session->userdata('usuario');
		$this -> load ->view ('Plantilla/Header', $data);
		$this -> load ->view ('Home/Index');
		$this -> load ->view ('Plantilla/Footer');
	}

	public function iniciar_sesion() {
      $data = array();
      $data['error'] = $this->session->flashdata('error');
      $this->load->view('Login/Iniciar_Sesion', $data);  
   }

   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $usuario = $this-> input ->post('usuario');
         $clave = $this-> input ->post('clave');
         $this->load->model('Model_Login');
         $usuario = $this -> Model_Login->usuario_por_nombre_contrasena($usuario, $clave);
         if ($usuario) {
            $usuario_data = array(
               'id_usuario' => $usuario->id_usuario,
               'usuario' => $usuario->usuario,
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('Login');
         } else {
         	$this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
            redirect('Login/Iniciar_Sesion');
         }
      } else {
         $this->iniciar_sesion();
      }
   }
   public function logueado() {
      if($this->session->userdata('logueado')){
         $data = array();
         $data['usuario'] = $this->session->userdata('usuario');
         $this->load->view('Login/Logueado', $data);
      }else{
         redirect('Login/Iniciar_Sesion');
      }
   }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('Login/Iniciar_Sesion');
   }
}
?>