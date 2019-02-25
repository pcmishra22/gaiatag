
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
                
                
                

  <!-- Table with options -->
                <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>Merchant Details :</h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                             
                                <tr>
                                      <td><code>Name</code></td>
                                      <td><?php echo $details[0]['name']?></td>
                                </tr>
                                <tr>
                                      <td><code>Alias</code></td>
                                      <td><?php echo $details[0]['alias']?></td>
                                </tr>
                                <tr>
                                      <td><code>Mid</code></td>
                                      <td><?php echo $details[0]['mid']?></td>
                                </tr>
                                <tr>
                                      <td><code>Approved Monthly Volume</code></td>
                                      <td><?php echo $details[0]['approved_monthly_volume']?></td>
                                </tr>
                                  <tr>
                                      <td><code>Average Ticket</code></td>
                                      <td><?php echo $details[0]['average_ticket']?></td>
                                </tr>
                                <tr>
                                      <td><code>Highest Ticket</code></td>
                                      <td><?php echo $details[0]['highest_ticket']?></td>
                                </tr>
                                <tr>
                                      <td><code>Descriptor</code></td>
                                      <td><?php echo $details[0]['descriptor']?></td>
                                </tr>
                                <tr>
                                      <td><code>Reserve Amount</code></td>
                                      <td><?php echo $details[0]['reserve_amount']?></td>
                                </tr>

                                  <tr>
                                      <td><code>Reserve Plan</code></td>
                                      <td><?php echo $details[0]['reserve_plan']?></td>
                                </tr>
                                <tr>
                                      <td><code>Merchant Sales</code></td>
                                      <td><?php echo $details[0]['merchant_sales']?></td>
                                </tr>
                                <tr>
                                      <td><code>Currency</code></td>
                                      <td><?php echo $details[0]['currency']?></td>
                                </tr>
                                <tr>
                                      <td><code>Industry Type</code></td>
                                      <td><?php echo $details[0]['industry_type']?></td>
                                </tr>
                                <tr>
                                      <td><code>Sic Code</code></td>
                                      <td><?php echo $details[0]['sic_code']?></td>
                                </tr>
                                <tr>
                                      <td><code>Url</code></td>
                                      <td><?php echo $details[0]['url']?></td>
                                </tr>
                                <tr>
                                      <td><code>Child Entity</code></td>
                                      <td><?php echo $details[0]['childentity']?></td>
                                </tr>
                                <tr>
                                      <td><code>Date</code></td>
                                      <td><?php echo date('M d, Y',strtotime($details[0]['datecreated']))?></td>
                                </tr>
                                
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /table with options -->

            <!-- /content wrapper -->

        </div>
        <!-- /content -->