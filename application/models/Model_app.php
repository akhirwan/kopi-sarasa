<?php
class Model_app extends CI_Model{
    function cek_login($table,$where){
		return $this->db->get_where($table, $where);
	}

	function get_item(){
		$this->db->select('*, categories.name as cat_name');
		$this->db->from('items');
		$this->db->join('categories', 'categories.id = items.category', 'left outer');
		
		return $this->db->get();
	}

	function get_item_by_id($id){
		$this->db->select('*');
		$this->db->from('items');
		$this->db->join('categories', 'categories.id = items.category');
		$this->db->where('items.id', $id);
		
		return $this->db->get();
	}
	
	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	function order_data($where, $orderBy, $order, $table){
		$this->db->order_by($orderBy, $order);
		return $this->db->get_where($table, $where);
	}
	
	function get_data($table){
		return $this->db->get($table);
	}
	
	function insert_data($data, $table){
		$this->db->insert($table, $data);
	}
	
	function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	function delete_data($where, $table){
		$this->db->delete($table, $where);
	}
}
?>