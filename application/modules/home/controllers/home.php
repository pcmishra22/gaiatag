<?php
class home extends MX_Controller
{
	 // table used by this class	
	 public $table='home';
	 // constructor is defined here
	 function __construct()
    {
        // this is your constructor
        parent::__construct();
		session_start();
		$this->template->set_template('front');
    }

	/*
	check if user is logged in to the admin panel
	default function of the controller when the loads
	*/

	//list all the users

	function index()
	{
		$this->load->view('index');
	}
	
}
?>

