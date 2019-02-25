
<!-- Content -->
        <div id="content">

            <!-- Content wrapper -->
            <div class="wrapper">

                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb"> 
                        <li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
                        <li class="active"><a href="<?php echo base_url()?>merchants/merchantlist" title="">Merchants</a></li>
                    </ul>
                </div>
                <!-- /breadcrumbs line -->

                <!-- Action tabs -->
                
                
     <div class="widget">

	                       
            <!-- /action tabs -->
             <?php
			if($this->session->flashdata('flash_message') == 'saved')
        	{
        		?>
        		 <div class="alert alert-success">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Merchant Added Successfully.
	                    </div>
        		<?php
			}	
			if($this->session->flashdata('flash_message') == 'updated')
        	{
				?>
        		 <div class="alert alert-success">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Merchant Updated Successfully.
	                    </div>
        		<?php
				
			}
			if($this->session->flashdata('flash_message') == 'deleted')
        	{
        		?>
        		 <div class="alert alert-error">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Merchant Deleted Successfully.
	                    </div>
        		<?php
			}
			?>
  </div>             
                
                
                
 
     
                <!-- Default datatable -->
                <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>MERCHANTS :</h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Alias</th>
                                    <th>Mid</th>
                                    <th>Monthly CAP</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
								foreach($merchants as $merchant) 
								{	
							?>
							<tr>
                                <td><?php echo $merchant['id'];?></td>
                                <td><?php echo $merchant['name'];?></td>
                                <td><?php echo $merchant['alias'];?></td>
                                <td><?php echo $merchant['mid'];?></td>
                                <td><?php echo $merchant['approved_monthly_volume'];?></td>
                                <td><?php echo date('M d, Y',strtotime($merchant['datecreated']))?></td>
                                <td>
                               
                                <a href="<?php echo base_url()?>mids/add/<?php echo $merchant['id'];?>" class="btn btn-primary">Edit</a>
	                       		<a href="<?php echo base_url()?>mids/deletemerchant/<?php echo $merchant['id'];?>" class="btn btn-danger">Delete</a>
	                           <a href="<?php echo base_url()?>mids/view/<?php echo $merchant['id'];?>" class="btn btn-success">View</a>
                                </td>
                               
                            </tr>
							<?php
							     }                            
                            ?>
                          </tbody>
                        </table>
                    </div>
                </div>
                <!-- /default datatable -->









            <!-- /content wrapper -->

        </div>
        <!-- /content -->