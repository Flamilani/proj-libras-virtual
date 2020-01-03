<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model("cursos_model");
    }

    public function index() {
        $data_header['title'] = 'Cursos - Painel Administrativo - Libras Virtual';
		$data['title'] = 'Cursos';		
		$data['cursos'] = $this->cursos_model->admin_cursos();  

        $this->load->view('admin/inc/header', $data_header);
        $this->load->view('admin/inc/links');
        $this->load->view('admin/inc/menu');
        $this->load->view('admin/cursos/cursos', $data);
        $this->load->view('admin/inc/footer');
        $this->load->view('admin/inc/scripts');
    }

	/* MÓDULOS  */
    public function modulo($curso_id) {
    //  $this->output->enable_profiler(TRUE);
		    $data['modulos'] = $this->cursos_model->admin_modulos_curso($curso_id);  		
        	$data['title'] = 'Módulos';
	        $this->load->view('admin/inc/header');
		    $this->load->view('admin/inc/links');
		    $this->load->view('admin/inc/menu');
			$this->load->view('admin/cursos/modulos', $data);		
			$this->load->view('admin/inc/footer');        
		    $this->load->view('admin/inc/scripts');
  }

  public function add_modulo() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('titulo', 'Título', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
        $this->index();
    } else {
        $titulo = $this->input->post('titulo');
        $curso_id = $this->input->post('curso_id'); 

        if ($this->cursos_model->adicionar_modulo($titulo, $curso_id)) {
            $this->session->set_flashdata("success");
            redirect(base_url('admin/cursos/modulo/' . $curso_id));
        } else {
            echo "Erro ao adicionar";
        }
    }
}

	/* AULAS  */
    public function aula($curso_id, $modulo_id) {
		// $this->output->enable_profiler(TRUE);
			   $data['aulas'] = $this->cursos_model->admin_aulas_curso($curso_id, $modulo_id);  		   
		   	   $data['title'] = 'Aulas';
			   $this->load->view('admin/inc/header');
			   $this->load->view('admin/inc/links');
			   $this->load->view('admin/inc/menu');
			   $this->load->view('admin/cursos/aulas', $data);	
			   $this->load->view('admin/inc/footer');	        
			   $this->load->view('admin/inc/scripts');
	 }



    
}
