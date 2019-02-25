<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>GaiaTAG</title>
<link href="<?php echo base_url()?>css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/plugins/forms/jquery.uniform.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/files/login.js"></script>

</head>

<body class="no-background">

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="index.html" title="" class="logo"><img src="<?php echo base_url()?>img/logo.png" alt="" /></a>
			<ul class="top-menu">
				<li class="dropdown">
					<a class="login-top" data-toggle="dropdown"></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="#" title=""><i class="icon-group"></i>Change user</a></li>
						<li><a href="#" title=""><i class="icon-plus"></i>New user</a></li>
						<li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
						<li><a href="#" title=""><i class="icon-remove"></i>Go to the website</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->


    <!-- Login block -->
    <div class="login">
        <div class="navbar">
            <div class="navbar-inner">
                <h6><i class="icon-user"></i>Login page</h6>
                <div class="nav pull-right">
                    <a href="#" class="dropdown-toggle navbar-icon" data-toggle="dropdown"><i class="icon-cog"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="icon-plus"></i>Register</a></li>
                        <li><a href="#"><i class="icon-refresh"></i>Recover password</a></li>
                        <li><a href="#"><i class="icon-cog"></i>Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="well">
        <form class="row-fluid" method="post" action="<?php echo  base_url();?>admin/validate_credentials" id="loginForm" role="form">
             <?php
                if(isset($message_error) && $message_error){
          ?>
            <div style="height:5px;"><a class="close" data-dismiss="alert">×</a>
            <strong style="color:red;margin-left:50px;">Please enter correct details</strong></div>
            <?php
        }
        ?>
                <div class="control-group">

                    <label class="control-label">Username</label>
                    <div class="controls"><input class="span12" type="text" id="username" name="username" placeholder="username" /></div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Password:</label>
                    <div class="controls"><input class="span12" type="password" id="password" name="password" placeholder="password" /></div>
                </div>

                <div class="control-group">
                    <div class="controls"><label class="checkbox inline"><input type="checkbox" name="checkbox1" class="styled" value="" checked="checked">Remember me</label></div>
                </div>

                <div class="login-btn"><input type="submit" value="Log me in" class="btn btn-danger btn-block" /></div>
            </form>
        </div>
    </div>
    <!-- /login block -->


	<!-- Footer -->
	<div id="footer">
		<div class="copyrights">&copy;  Brought to you by Eugene Kopyov.</div>
		<ul class="footer-links">
			<li><a href="" title=""><i class="icon-cogs"></i>Contact admin</a></li>
			<li><a href="" title=""><i class="icon-screenshot"></i>Report bug</a></li>
		</ul>
	</div>
	<!-- /footer -->
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap/bootstrap.js"></script>  
    <script type="text/javascript" src="<?php echo base_url()?>plugins/forms/validate/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>plugins/forms/uniform/jquery.uniform.min.js"></script>

     
</body>
</html>
<script type="text/javascript">
        // document ready function
        $(document).ready(function() {
 
            $("#loginForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 5
                    },
                    password: {
                        required: true,
                        minlength: 5
                    }  
                },
                messages: {
                    username: {
                        required: "Fill me please",
                        minlength: "My name is bigger"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "My password is more that 5 chars"
                    }
                }   
            });
        });
    </script> 