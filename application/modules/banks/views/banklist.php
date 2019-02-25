
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

                <!-- Action tabs -->
                
                
     <div class="widget">

	                       
            <!-- /action tabs -->
             <?php
			if($this->session->flashdata('flash_message') == 'saved')
        	{
        		?>
        		 <div class="alert alert-success">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Bank Added Successfully.
	                    </div>
        		<?php
			}	
			if($this->session->flashdata('flash_message') == 'updated')
        	{
				?>
        		 <div class="alert alert-success">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Bank Updated Successfully.
	                    </div>
        		<?php
				
			}
			if($this->session->flashdata('flash_message') == 'deleted')
        	{
        		?>
        		 <div class="alert alert-error">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Bank Deleted Successfully.
	                    </div>
        		<?php
			}
			?>
  </div>             
                
                
                
 
     
                <!-- Default datatable -->
                <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>BANKS :</h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Id</th>
                                    <th>Business Name</th>
                                    <th>Business Phone</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
								foreach($banks as $bank) 
								{	
							?>
							<tr>
                                <td><?php echo $bank['id'];?></td>
                                <td><?php echo $bank['businessname'];?></td>
                                <td><?php echo $bank['businessphone'];?></td>
                                <td><?php echo $bank['first_name'];?></td>
                                <td><?php echo $bank['last_name'];?></td>
                                <td><?php echo date('M d, Y',strtotime($bank['datecreated']))?></td>
                                <td>
                               
                                <a href="<?php echo base_url()?>banks/add/<?php echo $bank['id'];?>" class="btn btn-primary">Edit</a>
	                       		<a href="<?php echo base_url()?>banks/deletebank/<?php echo $bank['id'];?>" class="btn btn-danger">Delete</a>
	                           <a href="<?php echo base_url()?>banks/view/<?php echo $bank['id'];?>" class="btn btn-success">View</a>
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