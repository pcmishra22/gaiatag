<?php
class Banks extends MX_Controller
{
	//table used by this class	
	public $table='banks';
	
	function __construct()
   {
        // this is your constructor
        parent::__construct();
		session_start();
		$this->load->model('banks/banks_model');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/

	//list all the users
	function banklist()
	{

		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
		else
		{
			$data['banks']=$this->banks_model->getAllBanks();
			$this->template->write('title', 'Welcome to banks List !');
			$this->template->write_view('content', 'banklist',$data);
			$this->template->render();
		}

	}
	
	//delete a bank
	public function deletebank()
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
			$this->banks_model->deletedata($id,$this->table);
			//set flash message			
			$this->session->set_flashdata('flash_message', 'deleted');
			//redirect to merchant list			
			redirect('banks/banklist');
		}	
	} 
	//view bank details
	function view()
	{
			//set id
			$id = $this->uri->segment(3);
			$data['details']=$this->banks_model->getBankById($id);
			$this->template->write('title', 'Welcome to view bank !');
			$this->template->write_view('content', 'bankdetails',$data);
			$this->template->render();
	}
	//Create a merchant for the application
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
						'businessname' => $this->input->post("businessname", TRUE),
						'businessaddress' => $this->input->post("businessaddress", TRUE),
						'businesscity' => $this->input->post("businesscity", TRUE),
						'businessstate' => $this->input->post("businessstate", TRUE),
						'businesszip' => $this->input->post("businesszip", TRUE),
						'businessphone' => $this->input->post("businessphone", TRUE),
						'first_name' => $this->input->post("firstname", TRUE),
						'last_name' => $this->input->post("lastname", TRUE),
						'address' => $this->input->post("address", TRUE),
						'city' => $this->input->post("city", TRUE),
						'state' => $this->input->post("state", TRUE),
						'zip' => $this->input->post("zip", TRUE),
						'phone' => $this->input->post("phone", TRUE),
						'dateupdated'=> date("Y-m-d H:i:s")
					);


					//update data in table
					$this->banks_model->updateData($pid,$this->table,$data);
					//set flash message
					$this->session->set_flashdata('flash_message', 'updated');
					redirect('banks/banklist');
				}
				else
				{
					$data['id']=$id;
					$data['details']=$this->banks_model->getBankById($id);
					$this->template->write('title', 'Welcome to edit bank !');
					$this->template->write_view('content', 'bankadd',$data);
					$this->template->render();
				}
			}
			else
			{

				if($this->input->post('submit'))
				{
					//data array
					$data = array(
						'businessname' => $this->input->post("businessname", TRUE),
						'businessaddress' => $this->input->post("businessaddress", TRUE),
						'businesscity' => $this->input->post("businesscity", TRUE),
						'businessstate' => $this->input->post("businessstate", TRUE),
						'businesszip' => $this->input->post("businesszip", TRUE),
						'businessphone' => $this->input->post("businessphone", TRUE),
						'first_name' => $this->input->post("firstname", TRUE),
						'last_name' => $this->input->post("lastname", TRUE),
						'address' => $this->input->post("address", TRUE),
						'city' => $this->input->post("city", TRUE),
						'state' => $this->input->post("state", TRUE),
						'zip' => $this->input->post("zip", TRUE),
						'phone' => $this->input->post("phone", TRUE),
						'datecreated'=> date("Y-m-d H:i:s"),
						'dateupdated'=> date("Y-m-d H:i:s")
					);

					//save data in table
					
					$this->banks_model->saveData($this->table,$data);

					//set flash message

					$this->session->set_flashdata('flash_message', 'saved');

					//redirect to list page

					redirect('banks/banklist');
				}
				else
				{
					$this->template->write('title', 'Welcome to add bank !');
					$this->template->write_view('content', 'bankadd');
					$this->template->render();
				}
			}

		}
	
	}
}
?>

