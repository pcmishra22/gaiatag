 <?php

class Users_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */

	//get files whose image is not created yet
	function imageNotConvertedFiles()
	{
			$sql = "SELECT id,uniquename FROM user_files where is_image_created='0'" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//all invited user by user id
	function invitedUserById($id)
	{
			$sql = "SELECT * FROM user_details where user_id='$id'" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//check user details by id
	function userDetailsById($id)
	{
			$sql = "SELECT * FROM users where id='$id'" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//get pet details by user id
	function getPetDetailsByUserId($userid)
	{
			$sql = "SELECT * FROM user_humans where userid='$userid'" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;	
	}
	//email checks in account table
	function register_email_exists_account($email)
	{
			$sql = "SELECT * FROM accounts where owneremailid='$email'" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//check email exists
	function register_email_exists($email)
	{
			$sql = "SELECT * FROM users where email='$email'" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//fetch settings data
	
	function fetchSettingsData()
	{
			$sql = "SELECT * FROM exam_settings" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}
	//update data
	function updateData($field,$value,$tablename,$data)
	{
		$this->db->where($field, $value);
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

	//function user exist
	function userExists($email,$pass)
	{
		 $sql = "SELECT * FROM users where email='$email' and password=md5('$pass')" ; 
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return @$result;
	
	}

	//check user
	function checkUser($user,$pass)
	{
		    echo $sql = "SELECT * FROM users where email='$user' and password=md5('$pass')"; 
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return @$result;
	}

	//check user details
	function checkcodedata($code)
	{
			$sql = "SELECT * FROM users where passwordreset='$code'"; 
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return @$result;
	}


	//delete card
	function deleteCard($id)
	{
		$this->db->delete('user_cardinfo', array('id' => $id));
	}	
	//delete file
	function deleteFile($id)
	{
		$this->db->delete('user_files', array('id' => $id));
	}
	//setting details
	function getSettings()
	{
			$sql = "SELECT * FROM settings" ; 
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return @$result;
	}	
}

?>
