<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title> Signup GaiaTAG</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/front/js/jquery.validate.min.js"></script>

</head>

<body>


    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <?php
                        if($this->session->flashdata('flash_message') == 'emailexists')
                        {
                            echo '<div  style="color:red;" align="center" class="alert alert-danger"><strong>Email already exist !</strong></div>';
                        }
                ?>
                <form id="signup" name="signup" class="clearfix" method="post" action="">
                    <div class="col-md-12">
                        <div class="billing-details">
                            <p>Already a customer ? <a href="<?php echo base_url();?>users/login">Login</a></p>
                            <div class="section-title">
                                <h3 class="title">REGISTRATION</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" id="email" name="email" placeholder="Email">
                            </div>
                           
                            <div class="form-group">
                                <input class="input" type="password" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" id="conpass" name="conpass" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button class="primary-btn" name="submit" id="submit">JOIN NOW</button>       
                             </div>
            
                        </div>
                    </div>
                  
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- FOOTER -->
    <footer id="footer" class="section section-grey">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a class="logo" href="#">
                    <img src="<?php echo base_url();?>front/img/logo.png" alt="">
                  </a>
                        </div>
                        <!-- /footer logo -->

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                        <!-- footer social -->
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <!-- /footer social -->
                    </div>
                </div>
                <!-- /footer widget -->

                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-header">My Account</h3>
                        <ul class="list-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Compare</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer widget -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-header">Customer Service</h3>
                        <ul class="list-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Shiping & Return</a></li>
                            <li><a href="#">Shiping Guide</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer widget -->

                <!-- footer subscribe -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-header">Stay Connected</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        <form>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Email Address">
                            </div>
                            <button class="primary-btn">Join Newslatter</button>
                        </form>
                    </div>
                </div>
                <!-- /footer subscribe -->
            </div>
            <!-- /row -->
            <hr>
            <!-- row -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <!-- /footer copyright -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /FOOTER -->


<!-- jQuery Plugins -->
  <script src="<?php echo base_url();?>front/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>front/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>front/js/slick.min.js"></script>
  <script src="<?php echo base_url();?>front/js/nouislider.min.js"></script>
  <script src="<?php echo base_url();?>front/js/jquery.zoom.min.js"></script>
  <script src="<?php echo base_url();?>front/js/main.js"></script>


</body>

</html>
