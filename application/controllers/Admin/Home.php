<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data_header['title'] = 'Painel Administrativo - Libras Virtual';
        $data['title'] = 'Home';
		$this->load->view('admin/inc/header', $data_header);
		$this->load->view('admin/inc/links');
		$this->load->view('admin/inc/menu');
        $this->load->view('admin/home', $data);
		$this->load->view('admin/inc/footer');
		$this->load->view('admin/inc/scripts');
    }
    
}