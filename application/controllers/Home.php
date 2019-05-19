<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
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
		$this->load->view('inc/scripts');
		$this->load->view('inc/footer');
    }

    public function cadastro() {
        $this->load->view('inc/header');
		$this->load->view('inc/links');
        $this->load->view('cadastro');
		$this->load->view('inc/scripts');
		$this->load->view('inc/footer');
    }
    
}