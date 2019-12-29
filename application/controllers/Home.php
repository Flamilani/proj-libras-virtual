<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("curso_model");
	}


	public function index()
	{

		$data_scripts = array(
			"scripts" => array(
				"script.js",
				"jqBootstrapValidation.js",
				"contact_me.js",
				"agency.min.js",
				"owl.carousel.min.js",
				"cbpAnimatedHeader.js",
				"theme-scripts.js"
			)
		);

		$data_cursos['cursos'] = $this->curso_model->get_cursos();

		$data_cursos['title'] = 'Cursos';
		$data_cursos['description'] = 'Escolhe um dos cursos embaixo.';
		$data_contato['title'] = 'Entre em contato conosco';
		$data_contato['description'] = 'Pode tirar dúvida ou sugestão com gente';

		$this->load->view('inc/header');
		$this->load->view('inc/links');
		$this->load->view('inc/menu');
		$this->load->view('home');
		$this->load->view('somos');
		$this->load->view('cursos', $data_cursos);
		$this->load->view('contato', $data_contato);
		$this->load->view('inc/scripts', $data_scripts);
		$this->load->view('inc/footer');
	}

	public function cadastro()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/links');
		$this->load->view('inc/menu');
		$this->load->view('cadastro');
		$this->load->view('inc/scripts');
		$this->load->view('inc/footer');
	}

	public function login()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/links');
		$this->load->view('inc/menu');
		$this->load->view('login');
		$this->load->view('inc/scripts');
		$this->load->view('inc/footer');
	}

	public function curso($id)
	{
		$data['modulos'] = $this->curso_model->get_modulos($id);
		$data['aulas'] = $this->curso_model->get_aulas($id);

		
		$data['lista_aulas'] = 'painel/cursos/lista_aulas';
		$data['aulas_curso'] = 'painel/cursos/aulas_curso';
		
		$this->load->view('inc/header');
		$this->load->view('inc/links');
		$this->load->view('inc/menu');
		$this->load->view('curso', $data);
		$this->load->view('inc/scripts');
		$this->load->view('inc/footer');
	}

/* 	public function error404()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/links');
		$this->load->view('errors/error404');
		$this->load->view('inc/scripts');
		$this->load->view('inc/footer');
	} */
}
