<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aula extends CI_Controller {

                public function __construct() {
		parent::__construct();
		$this->load->model("aula_model");
                }

                public function index($id, $sub) {
		//$this->output->enable_profiler(TRUE);
		$data['modulos'] = $this->curso_model->get_modulos($id);
		$data['aula_info'] = $this->aula_model->get_aulas($id);

		$data['video'] = $this->curso_model->get_video($id, $sub);		
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

                
}
