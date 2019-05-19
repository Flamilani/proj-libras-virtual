<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
}

    public function index() {
			  $data_header['title'] = 'Painel do Aluno - Libras Virtual';
				$data_main['title'] = 'Painel do Aluno';
				
				$this->load->view('painel/inc/header', $data_header);
				$this->load->view('painel/inc/links');
				$this->load->view('painel/inc/menu');
				$this->load->view('painel/home', $data_main);
				$this->load->view('painel/inc/footer');
				$this->load->view('painel/inc/scripts');
    }
    
}