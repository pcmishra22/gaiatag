<?php
if(count(@$details)>0)
{
	$name=$details[0]['name'];
	$submitbutton='Update';
}
else {
	$name='';
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
                        <li class="active"><a href="<?php echo base_url()?>role/add" title="">Add Role</a></li>
                    </ul>
                </div>
                <!-- /breadcrumbs line -->

                <!-- Action tabs -->
               
                <!-- /action tabs -->
               

                <!-- Form validation -->
                <h5 class="widget-name"><i class="icon-ok"></i>Add Role</h5>

                <form id="roleform" class="form-horizontal" action="" method="post" name="addrole" onsubmit="return checkRole()";>
                    <fieldset>
							<input type="hidden" name="id" value="<?php echo @$id;?>">
                        <!-- Form validation -->
                        <div class="widget">
                            <div class="navbar"><div class="navbar-inner"><h6>Add a Role :</h6></div></div>
                            <div class="well row-fluid">

                                <div class="control-group">
                                    <label class="control-label">Role Name: <span class="text-error">*</span></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required] span12" name="role" id="role" value="<?php echo $name;?>"/>
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
function checkRole()
{
	var retValue = false;
	$.ajax
	({
  		url: "<?php echo base_url()?>role/checkrolename",
  		type: "POST",
		data: "rolename="+$("#role").val(),
		async: false, //blocks window close
  		success: function(result) 
		{
			var returned = true;
			if($.trim(result) == 'exists')
			{
				retValue = false;
				$("#msg").html('Role Name already exists.');
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