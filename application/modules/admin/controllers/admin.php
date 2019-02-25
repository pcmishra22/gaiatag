<?php
class Admin extends MX_Controller
{

	 function __construct()
    {
        // this is your constructor
        parent::__construct();
		session_start();
		
		$this->load->model('admin/admin_model');
		$this->load->model('users/users_model');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/
	function index()
	{
		if($this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/dashboard');
		}else{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login');
		}
	}

	 /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
       return md5($password);
    }	
	 /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{	
		$user_name = $this->input->post('username');
		$password = $this->__encrip_password($this->input->post('password'));
		$is_valid = $this->admin_model->validate($user_name, $password);

		if($is_valid)
			{
			$data = array(
				'username' => $user_name,
				'is_logged_in_admin' => true
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}	
	/**
    * admin dashboard function after login
    * @return void
    */		
	function dashboard()
	{
		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
		else
		{
			$this->template->write('title', 'Welcome to the Admin Dashboard !');
			$this->template->write_view('content', 'dashboard');
			$this->template->render();
		}

	}
	
	//Logout function
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/index');
	}

	//checklogin admin
	public function checkloginadmin()
	{	
		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
	}
	//userlist

	public function userlist()
	{
		$this->checkloginadmin();
		$data['userlist']=$this->admin_model->userList();
		$this->template->write('title', 'Welcome to the gaiatag Admin userlist !');
		$this->template->write_view('content', 'userlist',$data);
		$this->template->render();
	}

}
?>

