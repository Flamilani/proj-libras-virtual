<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data['title'] = 'Login do Aluno';
		$this->load->view('painel/inc/header');
		$this->load->view('painel/inc/links');
		$this->load->view('painel/inc/menu');
        $this->load->view('painel/login', $data);
		$this->load->view('painel/inc/scripts');
		$this->load->view('painel/inc/footer');
    }
    
}