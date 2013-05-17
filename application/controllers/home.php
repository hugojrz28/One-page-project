<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] ='SAIND | Soluciones en Automatización Industrial';
		$this->load->view('home_view', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */