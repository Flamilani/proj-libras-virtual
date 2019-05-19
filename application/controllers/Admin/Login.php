<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data['title'] = 'Login';
		$this->load->view('admin/inc/header');
		$this->load->view('admin/inc/links');
        $this->load->view('admin/login', $data);
		$this->load->view('admin/inc/scripts');
    }
    
}