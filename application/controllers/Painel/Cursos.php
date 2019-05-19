<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	function __construct() {
		parent::__construct();
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
        $data['title'] = 'Meus Cursos';
        
        $this->load->view('painel/inc/header');
        $this->load->view('painel/inc/links');
        $this->load->view('painel/inc/menu');
        $this->load->view('painel/cursos/lista_cursos', $data);
        $this->load->view('painel/inc/footer');
        $this->load->view('painel/inc/scripts');
}

    public function ver_curso() {
        $data['title'] = 'Meus Cursos';
        
        $this->load->view('painel/inc/header');
        $this->load->view('painel/inc/links');
        $this->load->view('painel/inc/menu');
        $this->load->view('painel/cursos/ver_curso', $data);
        $this->load->view('painel/inc/footer');
        $this->load->view('painel/inc/scripts');
}
    
}