<?php
class Ibos extends MX_Controller
{
	//table used by this class	
	public $table='ibos';
	
	function __construct()
   {
        // this is your constructor
        parent::__construct();
		session_start();
		$this->load->model('ibos/ibos_model');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/

	//list all the ibos 
	function ibolist()
	{

		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
		else
		{
			$data['ibos']=$this->ibos_model->getAllIbos();
			$this->template->write('title', 'Welcome to IBO List !');
			$this->template->write_view('content', 'ibolist',$data);
			$this->template->render();
		}

	}
	//delete a ibo
	public function deleteibo()
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
			$this->ibos_model->deletedata($id,$this->table);
			//set flash message			
			$this->session->set_flashdata('flash_message', 'deleted');
			//redirect to ibo list			
			redirect('ibos/ibolist');
		}	
	} 
	//view ibos details
	function view()
	{
			//set id
			$id = $this->uri->segment(3);
			$data['details']=$this->ibos_model->getIboById($id);
			$this->template->write('title', 'Welcome to view Ibo !');
			$this->template->write_view('content', 'ibodetails',$data);
			$this->template->render();
	}
	//Create a ibo for the application
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
							'first_name' => $this->input->post("firstname", TRUE),
							'last_name' => $this->input->post("lastname", TRUE),
							'phone_home' => $this->input->post("phonehome", TRUE),
							'phone_cell' => $this->input->post("phonecell", TRUE),
							'address' => $this->input->post("address", TRUE),
							'city' => $this->input->post("city", TRUE),
							'state' => $this->input->post("state", TRUE),
							'zip' => $this->input->post("zip", TRUE),
							'ssn' => $this->input->post("ssn", TRUE),
							'ownership_percent' => $this->input->post("ownershippercent", TRUE),
							'bank_institution' => $this->input->post("bankinstitution", TRUE),

							'dateupdated'=> date("Y-m-d H:i:s")
					);


					//update data in table
					$this->ibos_model->updateData($pid,$this->table,$data);
					//set flash message
					$this->session->set_flashdata('flash_message', 'updated');
					redirect('ibos/ibolist');
				}
				else
				{
					$data['id']=$id;
					$data['details']=$this->ibos_model->getIboById($id);
					$this->template->write('title', 'Welcome to edit ibo !');
					$this->template->write_view('content', 'iboadd',$data);
					$this->template->render();
				}
			}
			else
			{
				
				if($this->input->post('submit'))
				{
					//data array
					$data = array(
							'first_name' => $this->input->post("firstname", TRUE),
							'last_name' => $this->input->post("lastname", TRUE),
							'phone_home' => $this->input->post("phonehome", TRUE),
							'phone_cell' => $this->input->post("phonecell", TRUE),
							'address' => $this->input->post("address", TRUE),
							'city' => $this->input->post("city", TRUE),
							'state' => $this->input->post("state", TRUE),
							'zip' => $this->input->post("zip", TRUE),
							'ssn' => $this->input->post("ssn", TRUE),
							'ownership_percent' => $this->input->post("ownershippercent", TRUE),
							'bank_institution' => $this->input->post("bankinstitution", TRUE),

							'datecreated'=> date("Y-m-d H:i:s"),
							'dateupdated'=> date("Y-m-d H:i:s")
					);

					//save data in table
					
					$this->ibos_model->saveData($this->table,$data);

					//set flash message

					$this->session->set_flashdata('flash_message', 'saved');

					//redirect to list page

					redirect('ibos/ibolist');
				}
				else
				{
					$this->template->write('title', 'Welcome to add ibo !');
					$this->template->write_view('content', 'iboadd');
					$this->template->render();
				}
			}

		}
	
	}
}
?>

