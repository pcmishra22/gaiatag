<?php
if(count(@$details)>0)
{
	$firstname=$details[0]['first_name'];
	$lastname=$details[0]['last_name'];
    $phonehome=$details[0]['phone_home'];
    $phonecell=$details[0]['phone_cell'];
    $address=$details[0]['address'];
    $city=$details[0]['city'];
    $state=$details[0]['state'];
    $zip=$details[0]['zip'];
    $ssn=$details[0]['ssn'];
    $ownershippercent=$details[0]['ownership_percent'];
    $bankinstitution=$details[0]['bank_institution'];
    $submitbutton='Update';
}
else {
    
	$firstname='';
    $lastname='';
    $phonehome='';
    $phonecell='';
    $address='';
    $city='';
    $state='';
    $zip='';
    $ssn='';
    $ownershippercent='';
    $bankinstitution='';
    $submitbutton='Save';	
	}
?>

<!-- Content -->
        <div id="content">

            <!-- Content wrapper -->
            <div class="wrapper">

                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb"> 
                        <li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
                        <li class="active"><a href="<?php echo base_url()?>merchants/add" title="">Add Merchant</a></li>
                    </ul>
                </div>
                <!-- /breadcrumbs line -->

                <!-- Form validation -->
                <h5 class="widget-name"><i class="icon-ok"></i> <?php echo $submitbutton;?> IBO</h5>

                <form id="validate" class="form-horizontal" action="" method="post" name="addibo">
                    <fieldset>
							<input type="hidden" name="id" value="<?php echo @$id;?>">
                        <!-- Form validation -->
                        <div class="widget">
                            <div class="navbar"><div class="navbar-inner"><h6> <?php echo $submitbutton;?> an IBO :</h6></div></div>
                            <div class="well row-fluid">

                                <div class="control-group">
                                    <label class="control-label">First Name  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="firstname" id="firstname" value="<?php echo $firstname;?>"/>
                                    </div>
									<div align="right">
									<font color="red" id="msg"></font>
									</div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Last Name : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="lastname" id="lastname" value="<?php echo $lastname;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label">Phone Home : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="phonehome" id="phonehome" value="<?php echo $phonehome;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label">Phone Cell : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="phonecell" id="phonecell" value="<?php echo $phonecell;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>




                                <div class="control-group">
                                    <label class="control-label">Address : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="address" id="address" value="<?php echo $address;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>




                                <div class="control-group">
                                    <label class="control-label">City : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="city" id="city" value="<?php echo $city;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label">State : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="state" id="state" value="<?php echo $state;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>

  <div class="control-group">
                                    <label class="control-label">Zip : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="zip" id="zip" value="<?php echo $zip;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">SSN : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="ssn" id="ssn" value="<?php echo $ssn;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">Ownership Percent : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="ownershippercent" id="ownershippercent" value="<?php echo $ownershippercent;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">Bank Institution : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="bankinstitution" id="bankinstitution" value="<?php echo $bankinstitution;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  
 
  





                                <div class="form-actions align-right">
                                    <button type="submit" name="submit" value="submit" class="btn btn-info">
                                    <?php echo $submitbutton;?>
                                    </button>
                                    <button type="reset" name="reset" value="reset" class="btn">Reset</button>
                                </div>

                            </div>

                        </div>
                        <!-- /form validation -->

                    </fieldset>
                </form>
                <!-- /form validation -->

            <!-- /content wrapper -->

        </div>
        <!-- /content -->
	