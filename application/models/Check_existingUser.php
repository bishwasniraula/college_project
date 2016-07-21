<?php 
class Check_existingUser extends CI_MODEL{
	function retrieveExistingUser(){
		$this->db->from('users');
		$result = $this->db->get();
		$result = $result->result_array();
		return $result;
	}

} 
?>