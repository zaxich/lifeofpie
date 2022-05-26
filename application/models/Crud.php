<?php
if (!defined('BASEPATH'))
	
    exit('No direct script access allowed');

class Crud extends CI_Model {
	var $total_rows;
	
	
    public function __construct() {
    }


    public function get_all_data($table, $select = "", $where = "", $orderby = "", $jenisorder = "desc") {

		$this->db->reset_query();
		$this->db->start_cache();
		if(!empty($select)) {
			$this->db->select($select);
		}
		if(!empty($where)) {
			foreach($where as $key => $value) {
				if(is_array($value)){
					$this->db->where_in($key, $value);
				}else{
					$this->db->where($key, $value);	
				}
			}
		}
		if(!empty($orderby)) {
			$this->db->order_by($orderby, $jenisorder);
		}
		
		$this->db->stop_cache();
		$result = $this->db->get($table)->result();	
		$this->total_rows = $this->db->count_all_results($table);			
		$this->db->flush_cache();		
		return $result;
	}
	
	public function get_data($table, $where = "", $select = "") {		
		if(!empty($select)) {
			$this->db->select($select);
		}
		if(!empty($where)) {
			foreach($where as $key => $value) {
				if(is_array($value)){
					$this->db->where_in($key, $value);
				}else{					
					$this->db->where($key, $value);	
				}	
			}
		}
		$row = $this->db->get($table)->row();
		return $row;
	}
	
	public function update_data($table, $input, $where) {
		$this->db->set($input);
		if(!empty($where)) {
			foreach($where as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		$update = $this->db->update($table);
		return $update;
	}

	public function insert_data($table, $input) {
		$this->db->set($input);
		$insert = $this->db->insert($table);
		return $insert;
	}
	
	
	public function delete_data($table, $where) {
		if(!empty($where)) {
			foreach($where as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		$delete = $this->db->delete($table);
		return $delete;
	}
}
?>