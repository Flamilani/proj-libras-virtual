<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cursos_model extends CI_Model {

	var $table = 'cursos';    
	var $id = 'curso_id';  

	public function __construct() {		
	parent::__construct();
	}

	public function admin_cursos() {
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0):
		    return $query->result();
		else:
		    return null;
		endif;
	            }

	/* MÓDULOS */
	public function admin_modulos_curso($curso_id) {
		$this->db->where('curso_id', $curso_id);
		$this->db->select('*');
		$this->db->from('modulos');	              
		return $this->db->get()->result();
	            }

	public function adicionar_modulo($titulo, $curso_id) {      
		$data['modulo_nome'] = $titulo;     
		$data['curso_id'] = $curso_id;    
		return $this->db->insert('modulos', $data);
	          }

	public function count_modulos($id) {  
		$query = $this->db->where('curso_id', $id);     
		$query = $this->db->get('modulos');
		$rows = $query->num_rows();
	if ($rows > 0):
		    return $rows;
		else:
		    return 0;
		endif;
	            }
	            
	/* AULAS */
	public function admin_aulas_curso($curso_id, $modulo_id) {
		$this->db->where('curso_id', $curso_id);
		$this->db->where('modulo_id', $modulo_id);
		$this->db->select('*');
		$this->db->from('aulas');	              
		return $this->db->get()->result();
	            }

	public function adicionar_aula($titulo, $curso_id) {      
		$data['modulo_nome'] = $titulo;     
		$data['curso_id'] = $curso_id;    
		return $this->db->insert('modulos', $data);
	          }
}
