<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aula_model extends CI_Model {

	public function __construct() {
		
	         parent::__construct();
	}

	public function get_aula($id_aula) {

		$this->db->select('tipo');
		$this->db->from('aulas');
		$this->db->where('aula_id', $id_aula);
		$array = $this->db->get()->result_array();

		$array = array();

		/* $sql = "SELECT tipo FROM aulas WHERE aula_id = '$id_aula'";
		$sql = $this->db->query($sql);
 */
		if($array->num_rows() > 0) {
			$row = $array;

			var_dump($array);
			
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
				var_dump($row['aula_tipo']);
				die();
				$this->db->select('*');				
				$this->db->where('aula_id', $id_aula);
				$array = $this->db->get('exercicios')->result_array();
				$array['aula_tipo'] = 'poll';

			/* 	$sql = "SELECT * FROM exercicios WHERE aula_id = '$id_aula'";
				$sql = $this->db->query($sql);
				$array = $sql->fetch();
				$array['tipo'] = 'poll'; */
			}
		}	

		return $array;

		
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

}
