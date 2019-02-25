<?php

class role_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	
	function validate($user_name, $password)
	{
		$this->db->where('username', $user_name);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');
		
		if($query->num_rows == 1)
		{
			return true;
		}		
	}
	//check name 
	function checkName($name)
	{
		$this->db->select('*');
		$this->db->from('role');
		$this->db->where('name', $name);
		$query = $this->db->get();
		return count($query->result_array());	
	}
	//delete user
	function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user'); 	
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
   //get all roles 
   
   function getAllRoles()
	{
		$this->db->select('*');
		$this->db->from('role');
		$query = $this->db->get();
		return $query->result_array();
	}
	//get role by id
	
	function getRoleById($id)
	{
		$this->db->select('*');
		$this->db->from('role');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
}

