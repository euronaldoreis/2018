<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('index_model');

	}

	public function index()
	{
		$dados['times'] = $this->index_model->times();
		$dados['partidas'] = $this->index_model->partidas();
		$dados['classificacao'] = $this->index_model->classificacao();
		$dados['artilharia'] = $this->index_model->artilharia();

		$this->load->view('index', $dados);
	}
}
