<?php

class banks_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	//check name 
	function checkName($name)
	{
		$this->db->select('*');
		$this->db->from('banks');
		$this->db->where('name', $name);
		$query = $this->db->get();
		return count($query->result_array());	
	}

	//delete data
	function deleteData($id,$tablename)
	{
		$this->db->where('id', $id);
		$this->db->delete($tablename); 	
	}	
	
	//update data
	function updateData($id,$tablename,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($tablename, $data);
		$id = $this->db->insert_id(); 
		return @$id;
	}
	
	//save data
	function saveData($tablename,$data)
	{
		$this->db->insert($tablename, $data);
		$id = $this->db->insert_id(); 
		return @$id;
	}
   //get all getAllBanks 
   
   function getAllBanks()
	{
		$this->db->select('*');
		$this->db->from('banks');
		$query = $this->db->get();
		return $query->result_array();
	}
	//get role by id
	
	function getBankById($id)
	{
		$this->db->select('*');
		$this->db->from('banks');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
}

