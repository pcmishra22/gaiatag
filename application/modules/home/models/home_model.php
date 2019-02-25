<?php

class home_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	
	//validate user
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
		$this->db->from('admin');
		$this->db->where('username', $name);
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
	//get all users
	function getAllusers()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->join('role', 'role.id = admin.role'); 
		$query = $this->db->get();
		//echo $this->db->last_query(); 
		return $query->result_array();
	}
	//get user by id
	
	function getUserById($id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	//get user by email
	
	function getUserByEmail($email)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array();
	}
		//get user by username
	
	function getUserByUsername($username)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->result_array();
	}
}

