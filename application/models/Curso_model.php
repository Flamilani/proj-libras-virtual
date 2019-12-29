<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Curso_model extends CI_Model {

	public function __construct() {		
	    parent::__construct();
	}

       public function get_cursos() {		
	$query = $this->db->order_by('curso_ordem', 'ASC');
	$query = $this->db->where('curso_status', 1);
	$query = $this->db->get('cursos');
	if ($query->num_rows() > 0) :
	return $query->result();
		else :
		return null;
		endif;
	}


	public function get_modulos($id) {

		$this->db->select('*');
		$this->db->from('modulos');
		$this->db->where('curso_id', $id);
		return $this->db->get()->result();
	}

	public function get_aulas($id) {

		$this->db->select('*');
		$this->db->from('cursos');
		$this->db->join('aulas', 'aulas.curso_id = cursos.curso_id');
		$this->db->join('videos', 'aulas.aula_id = videos.aula_id');
		$this->db->where('cursos.curso_id', $id);
		$menus = $this->db->get()->result_array();

		$childs = array();

		foreach ($menus as $key => $menu) {
			
			if ($menu['curso_id'] == '') {

				$childs = explode(";", $menu['video_id']);
				foreach ($childs as $child) {

					$menus[$key]['childs'][] = $child;
				}
			}
		}
		return $menus[0];
	}

	public function get_aula($id_aula) {
		
/* 		$this->db->select('*');
		//$his->db->from('cursos');
		$this->db->join('aulas', 'aulas.curso_id = cursos.curso_id');
		$this->db->join('videos', 'aulas.aula_id = videos.aula_id');
		$this->db->where('cursos.curso_id', $id_aula);
		$array = $this->db->get('cursos')->result_array();
		$row = $this->db->get('cursos')->num_rows(); */
		
		$this->db->select('aula_tipo');		
		$this->db->where('aula_id', $id_aula);
		$array = $this->db->get('aulas')->result_array(); 

		/*  $sql = "SELECT tipo FROM aulas WHERE aula_id = '$id_aula'";
		$sql = $this->db->query($sql); */



		if($array > 0) {
			$row = $array;
			
			if($row['aula_tipo'] == 'video') {
				
				$this->db->select('*');				
				$this->db->where('aula_id', $id_aula);
				$array = $this->db->get('videos')->result_array();
				$array['aula_tipo'] = 'video';

			/* 	$sql = "SELECT * FROM videos WHERE aula_id = '$id_aula'";
				$sql = $this->db->query($sql);
				$array = $sql->fetch();
				$array['tipo'] = 'video'; */
			}
			elseif($row['aula_tipo'] == 'poll') {
				
				$this->db->select('*');
				$this->db->from('exercicios');
				$this->db->where('aula_id', $id_aula);
				$array = $this->db->get()->result_array();
				$array['aula_tipo'] = 'poll';

			/* 	$sql = "SELECT * FROM exercicios WHERE aula_id = '$id_aula'";
				$sql = $this->db->query($sql);
				$array = $sql->fetch();
				$array['tipo'] = 'poll'; */
			}
		}	

		return $array[0];
		
		
	/* 	$childs = array();

		foreach ($menus as $key => $menu) {
			var_dump($menus);
			if ($menu['curso_id'] == '') {

				$childs = explode(";", $menu['video_id']);
				foreach ($childs as $child) {

					$menus[$key]['childs'][] = $child;
				}
			}
		}
		return $menus[0]; */
	}

	public function get_video($id, $sub) {
		
		$this->db->select('*');
		$this->db->from('videos');
		$this->db->join('aulas', 'aulas.aula_id = videos.aula_id');
		$this->db->join('cursos', 'aulas.curso_id = cursos.curso_id');
		$this->db->where('cursos.curso_id', $id);
		$this->db->where('videos.video_id', $sub);
		$menus = $this->db->get()->result_array();
		/* 
		$menus = $this->db->get_where('videos', 
			array('curso_id' => $id, 
			      'video_id' => $sub)
			      )->result_array(); */

		$childs = array();

		foreach ($menus as $key => $menu) {
			//var_dump($menus);
			if ($menu['curso_id'] == '') {

				$childs = explode(";", $menu['video_id']);
				foreach ($childs as $child) {

					$menus[$key]['childs'][] = $child;
				}
			}
		}
		return $menus[0];
	}
}
