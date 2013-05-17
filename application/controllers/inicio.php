<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('inicio_model');
	}

	public function index()
	{
		$data['title'] = "SAIND | Soluciones en Automatizacion Industrial";
		$data['query'] = $this->inicio_model->getAgenda();
		$this->load->view('inicio_view', $data);
	}
	public function chat()
	{
		$this->load->view('chat_view');
	}
	public function loadAgenda()
	{
		$data['searchDate'] = $this->input->post('fecha');
		$data['query'] = $this->inicio_model->getAgenda();
		$this->load->view('agenda_form_view', $data);
	}
	public function loadFrm()
	{
		$data['searchDate'] = $this->input->post('fecha');
		$this->load->view('cita_form_view', $data);
	}
}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */