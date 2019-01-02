<?php
class Agent_model extends CI_Model{
	public function save_data($table, $data){
		$query = $this->db->insert($table,$data);
			if ($query) {
				return true;
			}
	}

	public function select_country(){
		$query = $this->db->get('country');
		 return $query->result();
	}

	public function select_location($where){
		$query = $this->db->
					select('*')
					->where($where)
					->get('location');
					return $query->result();
	}
}