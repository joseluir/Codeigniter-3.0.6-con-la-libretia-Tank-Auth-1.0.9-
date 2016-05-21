<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		
		if (!$this->tank_auth->is_logged_in()) {
		  /*************************************************************************
		*  Si el usuario no ah iniciado sesion se llama al metodo login que esta * 
		* dentro del controlador auth.php           @_@                          *
		**************************************************************************/
			redirect('/auth/login/');
		} else {
		/***************************************************************************
		*  De ya haber iniciado sesion mediante los metodos get() que estan dentro *
		* la libreria Tank_aut.php se obtiene algunos datos del usuario y luego    *
		* se despliegala la vista principal de la app web      @_@                 *
		****************************************************************************/
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['name']	= $this->tank_auth->get_name();
			$this->load->view('welcome', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */