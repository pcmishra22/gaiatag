<?php
if(count(@$details)>0)
{

    $businessname=$details[0]['businessname'];
    $businessaddress=$details[0]['businessaddress'];
    $businesscity=$details[0]['businesscity'];
    $businessstate=$details[0]['businessstate'];
    $businesszip=$details[0]['businesszip'];
    $businessphone=$details[0]['businessphone'];
    $firstname=$details[0]['first_name'];
    $lastname=$details[0]['last_name'];
    $address=$details[0]['address'];
    $city=$details[0]['city'];
    $state=$details[0]['state'];
    $zip=$details[0]['zip'];
    $phone=$details[0]['phone'];
    $submitbutton='Update';
}
else {
    
    $businessname='';
    $businessaddress='';
    $businesscity='';
    $businessstate='';
    $businesszip='';
    $businessphone='';
    $firstname='';
    $lastname='';
    $phonehome='';
    $phonecell='';
    $address='';
    $city='';
    $state='';
    $zip='';
    $phone='';
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
                        <li class="active"><a href="<?php echo base_url()?>banks/banklist" title="">Banks</a></li>
                    </ul>
                </div>
                <!-- /breadcrumbs line -->

                <!-- Form validation -->
                <h5 class="widget-name"><i class="icon-ok"></i> <?php echo $submitbutton;?> BANK</h5>

                <form id="validate" class="form-horizontal" action="" method="post" name="addbank">
                    <fieldset>
                            <input type="hidden" name="id" value="<?php echo @$id;?>">
                        <!-- Form validation -->
                        <div class="widget">
                            <div class="navbar"><div class="navbar-inner"><h6> <?php echo $submitbutton;?> a BANK :</h6></div></div>
                            <div class="well row-fluid">

                                
<div class="control-group">
                                    <label class="control-label">Business Name  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="businessname" id="businessname" value="<?php echo $businessname;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>

<div class="control-group">
                                    <label class="control-label">Business Address  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="businessaddress" id="businessaddress" value="<?php echo $businessaddress;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
<div class="control-group">
                                    <label class="control-label">Business City  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="businesscity" id="businesscity" value="<?php echo $businesscity;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
<div class="control-group">
                                    <label class="control-label">Business State  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="businessstate" id="businessstate" value="<?php echo $businessstate;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>

<div class="control-group">
                                    <label class="control-label">Business Zip  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="businesszip" id="businesszip" value="<?php echo $businesszip;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
<div class="control-group">
                                    <label class="control-label">Business Phone  : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="businessphone" id="businessphone" value="<?php echo $businessphone;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>

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
                                    <label class="control-label">Phone : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="phone" id="phone" value="<?php echo $phone;?>"/>
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
    