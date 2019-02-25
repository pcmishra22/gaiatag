<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function getquestionbyid($id)
	{
	     $CI =& get_instance();
	     $CI->load->model('users/users_model');
		 $result= $CI->users_model->getQuestionById($id);
		 return $result;
	}

	//subtitle 
	function subTitleDisplay()
	{
		return '';
	}
	//left panel
	function UsersDashboardLeftPanel()
	{
       

       $str='<!--Edit Profile Menu-->';
       $str.=' <ul class="edit-menu">';
       //checked for dashboard pages
        if (strpos($_SERVER['REQUEST_URI'], 'dashboard') !== false)
        {
            $str.='<li class="active"><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/dashboard">Basic Information</a></li>';
        }else
        {

            $str.='<li><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/dashboard">Basic Information</a></li>';
        }
        //checked for change password
        if (strpos($_SERVER['REQUEST_URI'], 'changepassword') !== false)
        {
            $str.='<li class="active"><i class="icon ion-ios-locked-outline"></i><a href="'.base_url().'users/changepassword">Change Password</a></li>';
        }else
        {

            $str.='<li><i class="icon ion-ios-locked-outline"></i><a href="'.base_url().'users/changepassword">Change Password</a></li>';
        }
        //checked for humans
        if (strpos($_SERVER['REQUEST_URI'], 'humans') !== false)
        {
            $str.='<li class="active"><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/humans">Humans</a></li>';
        }else
        {

            $str.='<li><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/humans">Humans</a></li>';
        }
        //checked for ID tags
        if (strpos($_SERVER['REQUEST_URI'], 'idtags') !== false)
        {
            $str.='<li class="active"><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/idtags">ID Tags</a></li>';
        }else
        {

            $str.='<li><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/idtags">ID Tags</a></li>';
        }
        //checked for report lost
        if (strpos($_SERVER['REQUEST_URI'], 'reportlost') !== false)
        {
            $str.='<li class="active"><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/reportlost">Report Lost</a></li>';
        }else
        {

            $str.='<li><i class="icon ion-ios-information-outline"></i><a href="'.base_url().'users/reportlost">Report Lost</a></li>';
        }

        $str.=' </ul>';
        return $str;
	}
	
