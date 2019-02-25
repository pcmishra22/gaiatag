<?php
if(count(@$details)>0)
{
	$name=$details[0]['name'];
	$alias=$details[0]['alias'];
    $mid=$details[0]['mid'];
    $amv=$details[0]['approved_monthly_volume'];
    $avgticket=$details[0]['average_ticket'];
    $avgticket=$details[0]['highest_ticket'];
    $highestticket=$details[0]['highest_ticket'];
    $descriptor=$details[0]['descriptor'];
    $reserveamt=$details[0]['reserve_amount'];
    $resplan=$details[0]['reserve_plan'];
    $mersales=$details[0]['merchant_sales'];
    $currency=$details[0]['currency'];
    $siccode=$details[0]['sic_code'];
    $industry_type=$details[0]['industry_type'];
    $submitbutton='Update';
}
else {
    
	$name='';
    $alias='';
    $mid='';
    $amv='';
    $avgticket='';
    $avgticket='';
    $highestticket='';
    $descriptor='';
    $reserveamt='';
    $resplan='';
    $mersales='';
    $currency='';
    $siccode='';
    $industry_type='';
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
                <h5 class="widget-name"><i class="icon-ok"></i>Add Merchant</h5>

                <form id="validate" class="form-horizontal" action="" method="post" name="addmerchant">
                    <fieldset>
							<input type="hidden" name="id" value="<?php echo @$id;?>">
                        <!-- Form validation -->
                        <div class="widget">
                            <div class="navbar"><div class="navbar-inner"><h6>Add a Merchant :</h6></div></div>
                            <div class="well row-fluid">

                                <div class="control-group">
                                    <label class="control-label">Merchant DBA : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="merchant" id="merchant" value="<?php echo $name;?>"/>
                                    </div>
									<div align="right">
									<font color="red" id="msg"></font>
									</div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Alias : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="alias" id="alias" value="<?php echo $alias;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label">MID : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="mid" id="mid" value="<?php echo $mid;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label">Approved Monthly Volume : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="amv" id="amv" value="<?php echo $amv;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>




                                <div class="control-group">
                                    <label class="control-label">Average Ticket : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="avgticket" id="avgticket" value="<?php echo $avgticket;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>




                                <div class="control-group">
                                    <label class="control-label">Highest Ticket : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="highestticket" id="highestticket" value="<?php echo $highestticket;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <label class="control-label">Descriptor : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="descriptor" id="descriptor" value="<?php echo $descriptor;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>

  <div class="control-group">
                                    <label class="control-label">Reserve Amount : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="reserveamt" id="reserveamt" value="<?php echo $reserveamt;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">Reserve Plan : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="resplan" id="resplan" value="<?php echo $resplan;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">Merchant Sales : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="mersales" id="mersales" value="<?php echo $mersales;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">Currency : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="currency" id="currency" value="<?php echo $currency;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
    <div class="control-group">
                                    <label class="control-label">Industry Type: <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <select name="industry_type" class="validate[required] styled" data-prompt-position="topLeft:-1,-5">
                                            <option value="">Select Status</option>
                                            <option value="active" <?php if($industry_type=='mailorder'){ echo 'selected="selected"';}?>>Mail Order</option>
                                            <option value="inactive" <?php if($industry_type=='internet'){ echo 'selected="selected"';}?>>Internet</option>
                                            
                                        </select>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">SIC CODE : <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="siccode" id="siccode" value="<?php echo $siccode;?>"/>
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>
  <div class="control-group">
                                    <label class="control-label">URL : <span class="text-error">*</span></label>
                                    <div class="controls">
                                      <select name="url" class="validate[] styled" data-prompt-position="topLeft:-1,-5">
                                            <option value="">Select Url</option>
                                           
                                            
                                        </select>  
                                    </div>
                                    <div align="right">
                                    <font color="red" id="msg"></font>
                                    </div>
                                </div>

<div class="control-group">
                                    <label class="control-label">Child Entity : <span class="text-error">*</span></label>
                                    <div class="controls">
                                      <select name="childentity" class="validate[] styled" data-prompt-position="topLeft:-1,-5">
                                            <option value="">Select Entity</option>
                                            
                                            
                                        </select>  
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
<script>
function checkMerchant()
{
	var retValue = false;
	$.ajax
	({
  		url: "<?php echo base_url()?>mids/checkmerchantname",
  		type: "POST",
		data: "merchantname="+$("#merchant").val(),
		async: false, //blocks window close
  		success: function(result) 
		{
			var returned = true;
			if($.trim(result) == 'exists')
			{
				retValue = false;
				$("#msg").html('Merchant Name already exists.');
			}
			else
			{
				retValue = true;
				$("#msg").html('');
			}
  		}
	});
	
	return retValue;
}

</script>		