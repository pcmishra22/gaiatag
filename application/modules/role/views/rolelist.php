
<!-- Content -->
        <div id="content">

            <!-- Content wrapper -->
            <div class="wrapper">

                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb"> 
                        <li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
                        <li class="active"><a href="<?php echo base_url()?>role/rolelist" title="">Roles</a></li>
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
	                        Role Added Successfully.
	                    </div>
        		<?php
			}	
			if($this->session->flashdata('flash_message') == 'updated')
        	{
				?>
        		 <div class="alert alert-success">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Role Updated Successfully.
	                    </div>
        		<?php
				
			}
			if($this->session->flashdata('flash_message') == 'deleted')
        	{
        		?>
        		 <div class="alert alert-error">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Role Deleted Successfully.
	                    </div>
        		<?php
			}
			?>
  </div>             
                
                
                
 
     
                <!-- Default datatable -->
                <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>ROLES :</h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
										foreach($roles as $role) 
										{	
										?>
										 <tr>
                                  <td><?php echo $role['id']?></td>
                                  <td><?php echo $role['name']?></td>
                                  <td><?php echo date('M d, Y',strtotime($role['datecreated']))?></td>
                                  <td>
                                 
	                       				<a href="<?php echo base_url()?>role/add/<?php echo $role['id']?>" class="btn btn-primary">Edit</a>
	                       				<a href="<?php echo base_url()?>role/deleterole/<?php echo $role['id']?>" class="btn btn-danger">Delete</a>
	                     
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