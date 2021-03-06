<?php

class Admin_model extends CI_Model {

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

	//	//list all user
	function userList()
	{
			$sql = "SELECT * FROM users" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//	//list all user'S human
	function humanList()
	{
			$sql = "SELECT * FROM user_humans" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;	
	}
	//	//list all user'S human
	function pageList()
	{
			$sql = "SELECT * FROM pages" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;	
	}
    //	//list all email template
	function emailTemplateList()
	{
			$sql = "SELECT * FROM email_templates" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;	
	}
	//	//list all user'S human
	function newsLetterList()
	{
			$sql = "SELECT * FROM newsletter" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;	
	}
	//	//list all faq list
	function faqList()
	{
			$sql = "SELECT * FROM faq" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;	
	}
}


