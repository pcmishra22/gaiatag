<?php
class Mids extends MX_Controller
{
	//table used by this class	
	public $table='merchants';
	
	function __construct()
   {
        // this is your constructor
        parent::__construct();
		session_start();
		$this->load->model('mids/mids_model');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/

	//list all the users
	function midlist()
	{

		if ( !$this->session->userdata('is_logged_in_admin'))
		{
			redirect('admin/index');
		}
		else
		{
			$data['merchants']=$this->mids_model->getAllMerchants();
			$this->template->write('title', 'Welcome to merchant List !');
			$this->template->write_view('content', 'merchantlist',$data);
			$this->template->render();
		}

	}
	//check merchant name exists
	public function checkmerchantname()
	{
		$name=$this->input->post('merchantname');
		$checkname=$this->mids_model->checkName($name);
		if($checkname>0)
		{
			echo 'exists';
		}
		else
		{
			echo 'notexists';
		}
	}
	//delete a merchant
	public function deletemerchant()
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
			$this->mids_model->deletedata($id,$this->table);
			//set flash message			
			$this->session->set_flashdata('flash_message', 'deleted');
			//redirect to merchant list			
			redirect('mids/midlist');
		}	
	} 
	//view mids details
	function view()
	{
			//set id
			$id = $this->uri->segment(3);
			$data['details']=$this->mids_model->getmerchantById($id);
			$this->template->write('title', 'Welcome to view merchant !');
			$this->template->write_view('content', 'merchantdetails',$data);
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
							'name' => $this->input->post("merchant", TRUE),
							'alias' => $this->input->post("alias", TRUE),
							'mid' => $this->input->post("mid", TRUE),
							'approved_monthly_volume' => $this->input->post("amv", TRUE),
							'average_ticket' => $this->input->post("avgticket", TRUE),
							'highest_ticket' => $this->input->post("highestticket", TRUE),
							'descriptor' => $this->input->post("descriptor", TRUE),
							'reserve_amount' => $this->input->post("reserveamt", TRUE),
							'reserve_plan' => $this->input->post("resplan", TRUE),
							'merchant_sales' => $this->input->post("mersales", TRUE),
							'currency' => $this->input->post("currency", TRUE),
							'industry_type' => $this->input->post("industry_type", TRUE),
							'sic_code' => $this->input->post("siccode", TRUE),
							'url' => $this->input->post("url", TRUE),
							'childentity' => $this->input->post("childentity", TRUE),
							'datecreated'=> date("Y-m-d H:i:s")
					);


					//update data in table
					$this->mids_model->updateData($pid,$this->table,$data);
					//set flash message
					$this->session->set_flashdata('flash_message', 'updated');
					redirect('mids/midlist');
				}
				else
				{
					$data['id']=$id;
					$data['details']=$this->mids_model->getmerchantById($id);
					$this->template->write('title', 'Welcome to edit merchant !');
					$this->template->write_view('content', 'merchantadd',$data);
					$this->template->render();
				}
			}
			else
			{
				
				if($this->input->post('submit'))
				{
					//data array
					$data = array(
							'name' => $this->input->post("merchant", TRUE),
							'alias' => $this->input->post("alias", TRUE),
							'mid' => $this->input->post("mid", TRUE),
							'approved_monthly_volume' => $this->input->post("amv", TRUE),
							'average_ticket' => $this->input->post("avgticket", TRUE),
							'highest_ticket' => $this->input->post("highestticket", TRUE),
							'descriptor' => $this->input->post("descriptor", TRUE),
							'reserve_amount' => $this->input->post("reserveamt", TRUE),
							'reserve_plan' => $this->input->post("resplan", TRUE),
							'merchant_sales' => $this->input->post("mersales", TRUE),
							'currency' => $this->input->post("currency", TRUE),
							'industry_type' => $this->input->post("industry_type", TRUE),
							'sic_code' => $this->input->post("siccode", TRUE),
							'url' => $this->input->post("url", TRUE),
							'childentity' => $this->input->post("childentity", TRUE),
							'datecreated'=> date("Y-m-d H:i:s")
					);

					//save data in table
					
					$this->mids_model->saveData($this->table,$data);

					//set flash message

					$this->session->set_flashdata('flash_message', 'saved');

					//redirect to list page

					redirect('mids/midlist');
				}
				else
				{
					$this->template->write('title', 'Welcome to add merchant !');
					$this->template->write_view('content', 'merchantadd');
					$this->template->render();
				}
			}

		}
	
	}
}
?>

