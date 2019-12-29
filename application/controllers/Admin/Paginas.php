<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $data['title'] = 'Home';
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/links');
		$this->load->view('admin/inc/menu');
        $this->load->view('admin/paginas', $data);

		$this->load->view('admin/inc/scripts');
    }

    public function home() {
        
        $data['title'] = 'Home';
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/links');
		$this->load->view('admin/inc/menu');
        $this->load->view('admin/paginas/home', $data);

		$this->load->view('admin/inc/scripts');
    }

    public function somos() {
        
        $data['title'] = 'Quem Somos';
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/links');
		$this->load->view('admin/inc/menu');
        $this->load->view('admin/paginas/somos', $data);
		
		$this->load->view('admin/inc/scripts');
    }
    
    
}
