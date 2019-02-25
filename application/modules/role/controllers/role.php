<?php
class Role extends MX_Controller
{
	//table used by this class	
	public $table='role';
	
	function __construct()
   {
        // this is your constructor
        parent::__construct();
		session_start();
		$this->load->model('role/role_model');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/

	//list all the users

	function rolelist()
	{

		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
		else
		{
			$data['roles']=$this->role_model->getAllRoles();
			$this->template->write('title', 'Welcome to role List !');
			$this->template->write_view('content', 'rolelist',$data);
			$this->template->render();
		}

	}
	//check role name exists
	public function checkrolename()
	{
		$name=$this->input->post('rolename');
		$checkname=$this->role_model->checkName($name);
		if($checkname>0)
		{
			echo 'exists';
		}
		else
		{
			echo 'notexists';
		}
	}
	//delete a role
	public function deleterole()
	{
		if ( !$this->session->userdata('is_logged_in_admin'))
		{ 
			redirect('admin/index');
		}
		else
		{			
			//set id
			$id = $this->uri->segment(3);
			//call method to delete
			$this->role_model->deletedata($id,$this->table);
			//set flash message			
			$this->session->set_flashdata('flash_message', 'deleted');
			//redirect to role list			
			redirect('role/rolelist');
		}	
	} 
	//Create a role for the application
	function add()
	{
		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
		else
		{
			//check for add or edit
			 $id = $this->uri->segment(3);
			 $pid=$this->input->post('id');
			 
			
			if($id>0 || $pid>0)
			{
				if($this->input->post('submit'))
				{
					//data array
					$data = array(
							'name' => $this->input->post("role", TRUE),
							'datecreated'=> date("Y-m-d H:i:s")
					);


					//update data in table
					$this->role_model->updateData($pid,$this->table,$data);
					//set flash message
					$this->session->set_flashdata('flash_message', 'updated');
					redirect('role/rolelist');
				}
				else
				{
					$data['id']=$id;
					$data['details']=$this->role_model->getRoleById($id);
					$this->template->write('title', 'Welcome to edit role !');
					$this->template->write_view('content', 'roleadd',$data);
					$this->template->render();
				}
			}
			else
			{
				
				if($this->input->post('submit'))
				{
					//data array
					$data = array(
							'name' => $this->input->post("role", TRUE),
							'datecreated'=> date("Y-m-d H:i:s")
							);

					//save data in table
					
					$this->role_model->saveData($this->table,$data);

					//set flash message

					$this->session->set_flashdata('flash_message', 'saved');

					//redirect to list page

					redirect('role/rolelist');
				}
				else
				{
					$this->template->write('title', 'Welcome to add role !');
					$this->template->write_view('content', 'roleadd');
					$this->template->render();
				}
			}

		}
	
	}
}
?>

