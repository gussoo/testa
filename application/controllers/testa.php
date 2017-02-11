<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
	    $this->load->helper('url');
		$this->load->model('page_model'); 
		if($this->input->post('vamos') != "")
		{
			$ascensor = $this->input->post('asc');
			$planta_va = $this->input->post('pv');
			$plata_desde = $this->input->post('vamos');
			$hora = date('H:i');
			echo "Ascensor: ".$ascensor." --- Planta desde: ".$plata_desde." --- Planta va: ".$planta_va." --- Hora: ".$hora;
			//Salvado de datos
			$this->page_model->set_report($ascensor, $plata_desde, $planta_va, $hora);
		}
		$this->load->helper('url');
		$this->load->view('main/header');
		$this->load->view('main/testa');
		$this->load->view('main/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */