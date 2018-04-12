<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('index_model');

	}

	public function index(){
		//verifica sessao do usuario
		verifica_login();
		
		$this->load->view('painel/index');
	}

	// ***** JOGADORES ******* //

	public function partidas(){
		//verifica sessao do usuario
		verifica_login();
		
		$dados['partidas'] = $this->index_model->partidas();
		$this->load->view('painel/partidas', $dados);
	}

	public function cadastrar_partida(){
		//verifica sessao do usuario
		verifica_login();


		$dados['times'] = $this->index_model->times();
		$this->load->view('painel/cadastrar_partida', $dados);
	}

	public function editar_partida($id){
		//verifica sessao do usuario
		verifica_login();

		$dados['partida'] = $this->index_model->editar_partida($id);

		$this->load->view('painel/editar_partida', $dados);
	}

	public function salvar_partida(){
		$dados_form = $this->input->post();

		if (!isset($dados_form['idpartidas'])) {
			$dados['partida'] = $this->index_model->salvar_partida($dados_form['time_um'], $dados_form['time_dois'], $dados_form['time_um_gols'], $dados_form['time_dois_gols']);
		}

		$dados['partida'] = $this->index_model->salvar_partida($dados_form['idpartidas'], $dados_form['time_um_gols'], $dados_form['time_dois_gols']);

		redirect('painel/partidas');
	}



	// ***** TIMES ******* //

	public function times(){
		//verifica sessao do usuario
		verifica_login();
		
		$dados['times'] = $this->index_model->times();
		$this->load->view('painel/times', $dados);
	}

	public function cadastrar_time(){
		//verifica sessao do usuario
		verifica_login();

		$this->load->view('painel/cadastrar_time');
	}

	public function editar_time($id){
		//verifica sessao do usuario
		verifica_login();

		$dados['time'] = $this->index_model->editar_time($id);

		$this->load->view('painel/editar_time', $dados);
	}

	public function salvar_time(){
		$dados_form = $this->input->post();

		$dados['time'] = $this->index_model->salvar_time($dados_form['nome'], $dados_form['escudo']);

		redirect('painel/times');
	}

	public function excluir_time($id){

		$dados['time'] = $this->index_model->excluir_time($id);

		redirect('painel/times');
	}

	// ***** JOGADORES ******* //

	public function jogadores(){
		//verifica sessao do usuario
		verifica_login();
		
		$dados['jogadores'] = $this->index_model->jogadores();
		$this->load->view('painel/jogadores', $dados);
	}

	public function cadastrar_jogador(){
		//verifica sessao do usuario
		verifica_login();

		$this->load->view('painel/cadastrar_jogador');
	}

	public function editar_jogador($id){
		//verifica sessao do usuario
		verifica_login();

		$dados['jogador'] = $this->index_model->editar_jogador($id);

		$this->load->view('painel/editar_jogador', $dados);
	}


	// ***** AUTENTICACAO ******* //

	public function login(){

		$this->load->view('painel/login');

	}

	public function entrar(){

		//verifica sessao do usuario
		$dados_form = $this->input->post();

		$login = "";
        $senha = "";

        if (isset($dados_form['login'], $dados_form['senha'])) {
            if (trim($dados_form['login']) == '' || trim($dados_form['senha']) == '') {
            	set_msg('<p>Preencha o E-mail e a Senha corretamente.</p>');
                return $this->index();
            }

            $login = $dados_form['login'];
            $senha = $dados_form['senha'];

        } else {

        }
         
			$logado = $this->index_model->login($login, $senha);

			if (isset($logado)) {
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('user_login', $login);
				
				//fazer redirect painel
				$this->load->view('painel/index');
			} else {
				set_msg('<p>Usuário ou Senha incorreta!</p>');
				echo 'erro';
			}
	}
}
