<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>GaiaTAG -  <?php
    echo $title;
    ?></title>
<link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/prettify.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.bootbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.elfinder.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.inputmask.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.validation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.form.wizard.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.form.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/tables/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/files/functions.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/charts/graph.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/charts/chart1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/charts/chart2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/charts/chart3.js"></script>

</head>

<body>

    <!-- Fixed top -->
    <div id="top">
        <div class="fixed">
            <a href="index.html" title="" class="logo"><img src="<?php echo base_url();?>img/logo.png" alt="" /></a>
            <ul class="top-menu">
                <li><a class="fullview"></a></li>
                <li><a class="showmenu"></a></li>
                 <!--<li><a href="#" title="" class="messages"><i class="new-message"></i></a></li>-->

                <li class="dropdown">
                    <a class="user-menu" data-toggle="dropdown"><img src="<?php echo base_url();?>img/userpic.png" alt="" /><span>Hello, <?php
                                echo $this->session->userdata('username');
                        ?>! <b class="caret"></b></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" title=""><i class="icon-user"></i>Profile</a></li>
                        <li><a href="#" title=""><i class="icon-inbox"></i>Messages<span class="badge badge-info">9</span></a></li>
                        <li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
                        <li><a href="<?php echo base_url();?>admin/logout" title=""><i class="icon-remove"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /fixed top -->


    <!-- Content container -->
    <div id="container">

        <!-- Sidebar -->
        <div id="sidebar">

            <div class="sidebar-tabs">
                <ul class="tabs-nav two-items">
                    <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
                    <li><a href="#stuff" title=""><i class="icon-cogs"></i></a></li>
                </ul>

                <div id="general">

                    <!-- Sidebar user -->
                    <div class="sidebar-user widget">
                        <div class="navbar"><div class="navbar-inner"><h6>


                        Hello, 
                        <?php
                                echo $this->session->userdata('username');
                        ?>!


                        </h6></div></div>
                        <a href="#" title="" class="user"><img src="http://placehold.it/210x110" alt="" /></a>
                        <ul class="user-links">
                            <li><a href="" title="">New users<strong>+12</strong></a></li>
                        </ul>
                    </div>
                    <!-- /sidebar user -->

                    <div class="general-stats widget">
                        <ul class="head">
                            <li><span>Users</span></li>
                            <li><span>Orders</span></li>
                            <li><span>Visits</span></li>
                        </ul>
                        <ul class="body">
                            <li><strong>116k+</strong></li>
                            <li><strong>1290</strong></li>
                            <li><strong>554</strong></li>
                        </ul>
                    </div>

                    <!-- Main navigation -->
                    <ul class="navigation widget">
                        <li class="active"><a href="<?php echo base_url();?>admin/dashboard" title=""><i class="icon-home"></i>Dashboard</a></li>
                       
                         <li><a href="#" title="" class="expand"><i class="icon-reorder"></i> USERS<strong>2</strong></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>admin/userlist" title="">LIST USERS</a></li>
                                <li><a href="<?php echo base_url();?>admin/useradd" title="">ADD USER</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="expand"><i class="icon-reorder"></i> HUMANS<strong>2</strong></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>admin/humanlist" title="">LIST HUMANS</a></li>
                                <li><a href="<?php echo base_url();?>admin/humanadd" title="">ADD HUMANS</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="expand"><i class="icon-reorder"></i>PAGES<strong>2</strong></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>admin/pagelist" title="">LIST PAGES</a></li>
                                <li><a href="<?php echo base_url();?>admin/pageadd" title="">ADD PAGES</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="expand"><i class="icon-reorder"></i> EMAIL TEMPLATE<strong>2</strong></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>admin/emailtemplatelist" title="">LIST TEMPLATE</a></li>
                                <li><a href="<?php echo base_url();?>admin/emailtemplateadd" title="">ADD TEMPLATE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="expand"><i class="icon-reorder"></i> NEWSLETTERS<strong>2</strong></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>admin/newsletterlist" title="">LIST NEWSLETTERS</a></li>
                                <li><a href="<?php echo base_url();?>admin/newsletteradd" title="">ADD NEWSLETTERS</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="" class="expand"><i class="icon-reorder"></i> FAQ<strong>2</strong></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>admin/faqlist" title="">LIST FAQ</a></li>
                                <li><a href="<?php echo base_url();?>admin/faqadd" title="">ADD FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /main navigation -->

                </div>

                <div id="stuff">

                    <!-- Social stats -->
                    <div class="widget">
                        <h6 class="widget-name"><i class="icon-twitter"></i>Social statistics</h6>
                        <ul class="social-stats">
                            <li>
                                <a href="" title="" class="orange-square"><i class="icon-rss"></i></a>
                                <div>
                                    <h4>1,286</h4>
                                    <span>total feed subscribers</span>
                                </div>
                            </li>
                            <li>
                                <a href="" title="" class="blue-square"><i class="icon-twitter"></i></a>
                                <div>
                                    <h4>12,683</h4>
                                    <span>total twitter followers</span>
                                </div>
                            </li>
                            <li>
                                <a href="" title="" class="dark-blue-square"><i class="icon-facebook"></i></a>
                                <div>
                                    <h4>530,893</h4>
                                    <span>total facebook likes</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /social stats -->


                    <!-- Datepicker -->
                    <div class="widget">
                        <h6 class="widget-name"><i class="icon-calendar"></i>Datepicker</h6>
                        <div class="inlinepicker datepicker-liquid"></div>
                    </div>
                    <!-- /datepicker -->


                    <!-- Dates range -->
                    <ul class="widget dates-range">
                        <li><input type="text" id="fromDate" name="from" placeholder="From" /></li>
                        <li class="sep">-</li>
                        <li><input type="text" id="toDate" name="to" placeholder="To" /></li>
                    </ul>
                    <!-- /dates range -->


                    <!-- Color picker -->
                    <div class="widget input-append color" data-color="rgb(255, 146, 180)" data-color-format="rgb" id="cp3">
                        <input type="text" value="" readonly >
                        <span class="add-on"><i style="background-color: rgb(255, 146, 180)"></i></span>
                    </div>
                    <!-- /color picker -->


                    <!-- Time picker range -->
                    <ul class="widget dates-range">
                        <li><input id="timeformatExample1" type="text" placeholder="Start" /></li>
                        <li class="sep">-</li>
                        <li><input id="timeformatExample2" type="text" placeholder="End" /></li>
                    </ul>
                    <!-- /time picker range -->


                    <!-- Gallery thumbs -->
                    <div class="widget">
                        <h6 class="widget-name"><i class="icon-picture"></i>Gallery thumbs</h6>
                        <div class="row-fluid thumbs">
                            <div class="span6">
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                            </div>
                            <div class="span6">
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                                <a href="<?php echo base_url();?>img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- /gallery thumbs -->

                    <!-- Action buttons -->
                    <div class="widget">
                        <h6 class="widget-name"><i class="icon-search"></i>Action buttons</h6>
                        <button class="btn btn-block btn-danger">Action button</button>
                        <button class="btn btn-block btn-info">Action button</button>
                        <button class="btn btn-block btn-success">Action button</button>
                    </div>
                    <!-- /action buttons -->

                    <!-- Tags input -->
                    <div class="widget">
                        <h6 class="widget-name"><i class="icon-search"></i>Tags input</h6>
                        <input type="text" id="tags1" class="tags" value="these,are,sample,tags" />
                    </div>
                    <!-- /tags input -->

                </div>

            </div>
        </div>
        <!-- /sidebar -->

    <?php
    echo $content;
    ?>
        

    </div>
    <!-- /content container -->


    <!-- Footer -->
    <div id="footer">
        <div class="copyrights">&copy;  Brought to you by Eugene Kopyov.</div>
        <ul class="footer-links">
            <li><a href="" title=""><i class="icon-cogs"></i>Contact admin</a></li>
            <li><a href="" title=""><i class="icon-screenshot"></i>Report bug</a></li>
        </ul>
    </div>
    <!-- /footer -->

</body>
</html>
