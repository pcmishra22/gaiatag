
<!-- Content -->
        <div id="content">

            <!-- Content wrapper -->
            <div class="wrapper">

                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb"> 
                        <li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
                        <li class="active"><a href="<?php echo base_url()?>ibos/ibolist" title="">Ibos</a></li>
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
	                        Ibo Added Successfully.
	                    </div>
        		<?php
			}	
			if($this->session->flashdata('flash_message') == 'updated')
        	{
				?>
        		 <div class="alert alert-success">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Ibo Updated Successfully.
	                    </div>
        		<?php
				
			}
			if($this->session->flashdata('flash_message') == 'deleted')
        	{
        		?>
        		 <div class="alert alert-error">
	                        <button type="button" class="close" data-dismiss="alert">×</button>
	                        Ibo Deleted Successfully.
	                    </div>
        		<?php
			}
			?>
  </div>             
                
                
                
 
     
                <!-- Default datatable -->
                <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>IBOS :</h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Home</th>
                                    <th>Phone Cell</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
								foreach($ibos as $ibo) 
								{	
							?>
							<tr>
                                <td><?php echo $ibo['id'];?></td>
                                <td><?php echo $ibo['first_name'];?></td>
                                <td><?php echo $ibo['last_name'];?></td>
                                <td><?php echo $ibo['phone_home'];?></td>
                                <td><?php echo $ibo['phone_cell'];?></td>
                                <td><?php echo date('M d, Y',strtotime($ibo['datecreated']))?></td>
                                <td>
                               
                                <a href="<?php echo base_url()?>ibos/add/<?php echo $ibo['id'];?>" class="btn btn-primary">Edit</a>
	                       		<a href="<?php echo base_url()?>ibos/deleteibo/<?php echo $ibo['id'];?>" class="btn btn-danger">Delete</a>
	                           <a href="<?php echo base_url()?>ibos/view/<?php echo $ibo['id'];?>" class="btn btn-success">View</a>
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