<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller{
	
	  //constructor call	
	  function __construct()
	  {
        parent::__construct();
		session_start();

		$this->load->helper(array('form', 'url','cookie'));
		$this->load->model('users/users_model');
		$this->load->library("pagination");		
		//$this->load->library("PHPMailer");		

	  }

	  //signup page calling
	  public function signup()
	  {

		if($this->session->userdata('userid')>0)
		{
			//redirect to dashboard page
				
		}		
		if(isset($_REQUEST['submit']))
		{
			
			//save data in users table	
				
			$data_to_store = array(
				'first_name' => $this->input->post('firstname'),
				'last_name' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
				'datecreated' => date("Y-m-d H:i:s")
                ); 
			
			//check email exists	 
				$checkEmail = $this->users_model->register_email_exists($this->input->post('email'));

			//save data to table	
				if(!empty($checkEmail[0]))
				{
					$this->session->set_flashdata('flash_message', 'emailexists');
					redirect('users/login');
				}
				else
				{
						
					$this->session->set_flashdata('flash_message', 'signupsuccess');
					//save data in user table
					$uid=$this->users_model->saveData('users', $data_to_store);
					redirect('users/login');
				}
		  }
		  else
		  {
		  	$this->load->view('signup');
		  }
	  }

	  //change password
	  public function changepassword()
	  {
	  	//login check
	  	$this->loginCheck();

	  		//fetch user data
		  	$userdetails=$this->users_model->userDetailsById($this->session->userdata('userid'));
	  		
	  		//set the request
	  		if(isset($_REQUEST['oldpassword']) && $_REQUEST['oldpassword']!='')
	  		{
	  			// check if old password is Okay

				$result=$this->users_model->checkUser($this->session->userdata('email'),$this->input->post('oldpassword'));

				if(!empty($result[0]['email']))
				{
					
					// if Okay then change password
					$data=array('password' => md5($this->input->post('newpassword')));
					//update password	
					$id=$this->users_model->updateData('email',$this->session->userdata('email'),'users',$data);

					//redirected to login page
					$this->session->set_flashdata('flash_message', 'changedpassword');
					redirect('users/changepassword');	
				}
				else
				{
					//redirected to login page
					$this->session->set_flashdata('flash_message', 'passwordmismatch');
					redirect('users/changepassword');

				}

	  		}
	  		else
	  		{

		  		//pass data
		  		$data=array(
		  		'userdetails' => $userdetails[0],
		  		);
	  			
		  		//set template..........................
	  			$this->template->set_template('front');
				$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
				$this->template->write_view('content', 'changepassword',$data);
				$this->template->render();

	  		}

	  }


	  //login page calling
	  public function login()
	  {
	  	if($this->session->userdata('userid')>0)
		{
			//redirect to dashboard page
			redirect('users/dashboard');
				
		}	
			
			$this->load->view('login');
	  }
	  //reset password
	  public function resetpassword($code)
	  {
		  
			if(isset($_REQUEST['email']) && $_REQUEST['email']!='')
			{
				//update password
				$data=array(
					'password' => md5($this->input->post('password')),
					'passwordreset' =>''
					);
					
				$this->users_model->updateData('emailid',$this->input->post('email'),'users',$data);
				//redirected to login page
				$this->session->set_flashdata('flash_message', 'changedpassword');
				redirect('users/login');
			}
			else
			{
					$data['checkdetails'] = $this->users_model->checkcodedata($code);
			
					if(!empty($data['checkdetails'][0]))
					{
						$this->session->set_flashdata('flash_message', 'mismatch');
						$this->load->view('resetpassword',$data);
					}
					else
					{
						$this->session->set_flashdata('flash_message', 'unauthrisedaccess');
						$this->load->view('resetpassword');
					}				
			}

	  }

	  //forget password calling
	  public function forgetpassword()
	  {

		  if(isset($_REQUEST['email']) && !empty($this->input->post('email')))
		  {
			  //check email exists	 
				$checkEmail = $this->users_model->register_email_exists($this->input->post('email'));
			  //save data to table	
				if(!empty($checkEmail[0]))
				{
					//email code 
					$resetid=time();		
			   		//update user table
					$data=array('passwordreset' => $resetid);
					$this->users_model->updateData('email',$this->input->post('email'),'users',$data);
					//update user table
					$body='';
			   		$activation_url=base_url().'users/resetpassword/'.$resetid;
			   
			   $url_logo=base_url().'/images/frontend/logo.png';
			   $body.='<html><body><table width="700" border="0" cellpadding="7" cellspacing="7" bgcolor="#E6F0EF" align="center" style="font-family:arial;font-size:14px; font-weight:normal;">
		  <tr><td align="left" bgcolor="#BAA786"><a href=""><img title="" alt="" src="'.$url_logo.'"></a></td>
		  </tr>
		  <tr>
			<td align="left">Hi '.$checkEmail[0]['firstname'].',</td>
		  </tr>
		 
		  <tr>
			<td align="left">Please click below link to reset your password</td>
		  </tr>
		  <tr>
			<td align="left"><a href="'.$activation_url.'">Click here</a></td>
		  </tr>
		  <tr>
			<td align="left">Thanks,<br/> The gaiatag</td>
		  </tr>
		</table>
		</body>
		</html>';
				
				 $admin=$this->config->item('adminEmail');
                 $from="teams@gaiatag.com";
                

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= "From: ".$from."\r\nReply-To: ".$admin; 
				
				  
				$email = $this->input->post('email');
				$subject = 'Reset Password';
				//echo $body;exit;
				
				if(mail($email,$subject,$body,$headers)){
						echo "email send";             
				}
				else
				{
					echo "email  not send ";
				}
					//email code
					$this->session->set_flashdata('flash_message', 'emailsent');
					redirect('users/forgetpassword');
				}
				else
				{
					$this->session->set_flashdata('flash_message', 'emailnotexists');
					redirect('users/forgetpassword');
				}
		  }
		  else
		  {
			   $this->load->view('forgetpassword');
		  }
		 
	  }
	
	  //logout method calling
	  public function logout()
	  {
		  $this->session->unset_userdata('userid');
		  $this->session->unset_userdata('email');
		  $this->session->unset_userdata('firstname');
		  $this->session->unset_userdata('lastname');
		  redirect('users/login');
	  }
	  //verify login
	  public function loginverify()
	  {
	  	
	  	$result=$this->users_model->checkUser($this->input->post('email'),$this->input->post('password'));

			if(!empty($result[0]['email']))
			{
				//set data in session
				$this->session->set_userdata('userid', $result[0]['id']);
				$this->session->set_userdata('email', $result[0]['email']);
				$this->session->set_userdata('firstname', $result[0]['first_name']);
				$this->session->set_userdata('lastname', $result[0]['last_name']);

				redirect('users/dashboard');

			}
			else
			{
				$this->session->set_flashdata('flash_message', 'invaliduser');
				redirect('users/login');
					
			}
	  }
	  //dashboard method calling
	  public function dashboard()
	  {
	  	//login check
	  	$this->loginCheck();
	  	//get user details 

 		if(isset($_REQUEST['save']))
	  	{
				//update password
				$data=array(
					'first_name' => $this->input->post('firstname'),
					'last_name' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'address1' => $this->input->post('address1'),
					'address2' => $this->input->post('address2'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'zip' => $this->input->post('zip'),
					'country' => $this->input->post('country'),
					'mobile_number' => $this->input->post('cellphone'),
					'home_phone' => $this->input->post('homephone'),
					'about_me' => $this->input->post('information'),
					'editprofile_datetime' => date('Y-m-d h:i:s')

					
					);
					
				$this->users_model->updateData('email',$this->input->post('email'),'users',$data);
				//redirected to login page
				$this->session->set_flashdata('flash_message', 'updated');

			//fetch user data
		  	$userdetails=$this->users_model->userDetailsById($this->session->userdata('userid'));
		  	//pass data
		  	$data=array(
		  		'userdetails' => $userdetails[0],
		  	);
			//set template
			$this->template->set_template('front');
			$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
			$this->template->write_view('content', 'dashboard',$data);
			$this->template->render();
	  	}
	  	else
	  	{
			//fetch user data
		  	$userdetails=$this->users_model->userDetailsById($this->session->userdata('userid'));
		  	//pass data
		  	$data=array(
		  		'userdetails' => $userdetails[0],
		  	);
			//set template
			$this->template->set_template('front');
			$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
			$this->template->write_view('content', 'dashboard',$data);
			$this->template->render();
	  	}

	  }
	  //
	  	public function loginCheck(){
		//echo $_SERVER['REQUEST_URI'];exit;
	    if(empty($this->session->userdata('email')))
		redirect('users/login');

	}

	//humans 
	public function humans()
	{
	  	//login check
	  	$this->loginCheck();
	  	//get user details 

		//fetch user data
		$petdetails=$this->users_model->getPetDetailsByUserId($this->session->userdata('userid'));

		// image upload code



 		if(isset($_REQUEST['save']))
	  	{

				//update password
				$data=array(
					
					'userid' => $this->session->userdata('userid'),
					'human_name' => $this->input->post('humanname'),
					'human_type' => $this->input->post('humantype'),
					'breed' => $this->input->post('breed'),
					'color' => $this->input->post('color'),
					'day' => $this->input->post('day'),
					'month' => $this->input->post('month'),
					'year' => $this->input->post('year'),
					'gender' => $this->input->post('sex'),
					'weight' => $this->input->post('weight'),
					'neuter' => $this->input->post('neuter'),
					'licenseid' => $this->input->post('license'),
					'microchipid' => $this->input->post('microchip'),
					'rabbiedvacid' => $this->input->post('rabies'),
					'vet_name' => $this->input->post('vetname'),
					'vet_phone' => $this->input->post('vetphonenumber'),
					'current_health_state' => $this->input->post('healthstate'),
					'allergies' => $this->input->post('allergies'),
					'medication_use' => $this->input->post('medication'),
					'overall_behaviour' => $this->input->post('overallrating'),
					'children_tolerance' => $this->input->post('childrenrating'),
					'dogs_tolerance' => $this->input->post('dograting'),
					'cats_tolerance' => $this->input->post('catrating'),
					'notes' => $this->input->post('note'),
					'date_modified' => date('Y-m-d h:i:s')
					);
				


		// image upload code..........................

		$target_dir = "pet_images/";
		$target_file = $target_dir . basename($_FILES["humanimage"]["name"]);
		
		// file upload code............................

		if (move_uploaded_file($_FILES["humanimage"]["tmp_name"], $target_file))
		{
			$data['human_image'] = $_FILES["humanimage"]["name"];
       	} 

			// checked for first time record save.....................................	

			if(empty($petdetails))
			{
				$data['date_created']=date('Y-m-d h:i:s');
				
				$this->users_model->saveData('user_humans',$data);
				//redirected to login page
				$this->session->set_flashdata('flash_message', 'saved');	
			}
			else
			{

				$this->users_model->updateData('id',$petdetails[0]['id'],'user_humans',$data);
				//redirected to login page
				$this->session->set_flashdata('flash_message', 'updated');

			}

			//fetch user data
		  	$petdetails=$this->users_model->getPetDetailsByUserId($this->session->userdata('userid'));
		  	//pass data
		  	$data=array(
		  		'userdetails' => $petdetails[0],
		  	);
			//set template
			$this->template->set_template('front');
			$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
			$this->template->write_view('content', 'humans',$data);
			$this->template->render();
	  	}
	  	else
	  	{

			if(empty($petdetails))
			{
					$data=array();
			}
			else
			{
					$data=array('userdetails' => $petdetails[0]);
			}
	
		  	//pass data
		  
			//set template
			$this->template->set_template('front');
			$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
			$this->template->write_view('content', 'humans',$data);
			$this->template->render();
	  	}
		  	
	}

	//idtags 
	public function idtags()
	{
				//set template
				$this->template->set_template('front');
				$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
				$this->template->write_view('content', 'idtags',$data);
				$this->template->render();
		  	
	}

	//report lost 
	public function reportlost()
	{
				//set template
				$this->template->set_template('front');
				$this->template->write('title', 'Welcome to the gaiatag Admin Dashboard !');
				$this->template->write_view('content', 'reportlost',$data);
				$this->template->render();
		  	
	}
	//test email code
	public function sendmail()
	{ 
         $from_email = "pcmishra22@hotmail.com"; 
         $to_email = "pcmishra22@gmail.com"; 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'prakash from email'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         	echo 'Email sent successfully';
         	//$this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         	echo 'Email sent successfully';
         	//$this->session->set_flashdata("email_sent","Error in sending Email."); 
        
    }
  
}
 /* End of file users.php */
/* Location: ./application/controllers/welcome.php */
