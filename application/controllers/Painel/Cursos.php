<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cursos extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->model("curso_model");
		$this->load->model("aula_model");
	}

	public function index() {
		$data['title'] = 'Meus Cursos';

		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
		$this->load->view('painel/cursos', $data);
		$this->load->view('painel/inc/footer');
		$this->load->view('painel/inc/scripts');
	}


	public function lista_cursos() {
		$data['cursos'] = $this->curso_model->get_cursos();
		$data['title'] = 'Meus Cursos';

		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
		$this->load->view('painel/cursos/lista_cursos', $data);
		$this->load->view('painel/inc/footer');
		$this->load->view('painel/inc/scripts');
	}

	public function ver_curso($id) {
		// $this->output->enable_profiler(TRUE);
		$data['modulos'] = $this->curso_model->get_modulos($id);
		$data['aulas'] = $this->curso_model->get_aulas($id);

		$data['title'] = 'Meus Cursos';
		$data['curso_video'] = 'painel/cursos/curso_video';
		$data['curso_poll'] = 'painel/cursos/curso_poll';
		$data['lista_aulas'] = 'painel/cursos/lista_aulas';

		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
		$this->load->view('painel/cursos/ver_curso', $data);
		$this->load->view('painel/inc/footer');
		$this->load->view('painel/inc/scripts');
	}

	public function curso_video($id) {
		$data['aulas'] = $this->curso_model->get_aulas($id);

		$data['title'] = 'Meus Cursos';
		$data['curso_video'] = 'painel/cursos/curso_video';
		$data['curso_poll'] = 'painel/cursos/curso_poll';
		$data['lista_aulas'] = 'painel/cursos/lista_aulas';

		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
		$this->load->view('painel/cursos/ver_curso', $data);
		$this->load->view('painel/inc/footer');
		$this->load->view('painel/inc/scripts');
	}

	public function aula($id, $sub) {
		// $this->output->enable_profiler(TRUE);
		$data['modulos'] = $this->curso_model->get_modulos($id);
		$data['aulas'] = $this->curso_model->get_aulas($id);
		//$data['aula_info'] = $this->curso_model->get_aula($id);
		$data['video'] = $this->curso_model->get_video($id, $sub);
		$data['title'] = 'Meus Cursos';
		$data['curso_video'] = 'painel/cursos/curso_video';
		$data['curso_poll'] = 'painel/cursos/curso_poll';
		$data['progresso'] = 'painel/cursos/progresso';
		$data['lista_aulas'] = 'painel/cursos/lista_aulas';

		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
		$this->load->view('painel/cursos/aula', $data);
		$this->load->view('painel/inc/footer');
		$this->load->view('painel/inc/scripts');
	}


/* 	public function error404() {

		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
		$this->load->view('errors/error404');
		$this->load->view('painel/inc/footer');
		$this->load->view('painel/inc/scripts');
	}
} */
}
