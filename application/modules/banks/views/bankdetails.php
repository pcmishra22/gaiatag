
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
                
                
    

  <!-- Table with options -->
                <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>Bank Details :</h6></div></div>
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
                                      <td><code>Business Name</code></td>
                                      <td><?php echo $details[0]['businessname']?></td>
                                </tr>
                                <tr>
                                      <td><code>Business Address</code></td>
                                      <td><?php echo $details[0]['businessaddress']?></td>
                                </tr>
                                <tr>
                                      <td><code>Business City</code></td>
                                      <td><?php echo $details[0]['businesscity']?></td>
                                </tr>
                                <tr>
                                      <td><code>Business State</code></td>
                                      <td><?php echo $details[0]['businessstate']?></td>
                                </tr>
                                  <tr>
                                      <td><code>Business Zip</code></td>
                                      <td><?php echo $details[0]['businesszip']?></td>
                                </tr>
                                <tr>
                                      <td><code>Business Phone</code></td>
                                      <td><?php echo $details[0]['businessphone']?></td>
                                </tr>
                                <tr>
                                      <td><code>First Name</code></td>
                                      <td><?php echo $details[0]['first_name']?></td>
                                </tr>
                                <tr>
                                      <td><code>Last Name</code></td>
                                      <td><?php echo $details[0]['last_name']?></td>
                                </tr>

                                  <tr>
                                      <td><code>Address</code></td>
                                      <td><?php echo $details[0]['address']?></td>
                                </tr>
                                <tr>
                                      <td><code>City</code></td>
                                      <td><?php echo $details[0]['city']?></td>
                                </tr>
                                <tr>
                                      <td><code>State</code></td>
                                      <td><?php echo $details[0]['state']?></td>
                                </tr>
                                <tr>
                                      <td><code>Zip</code></td>
                                      <td><?php echo $details[0]['zip']?></td>
                                </tr>
                                <tr>
                                      <td><code>Phone</code></td>
                                      <td><?php echo $details[0]['phone']?></td>
                                </tr>
                              
                                <tr>
                                      <td><code>Created Date</code></td>
                                      <td><?php echo date('M d, Y',strtotime($details[0]['datecreated']))?></td>
                                </tr>
                                <tr>
                                      <td><code>Updated Date</code></td>
                                      <td><?php echo date('M d, Y',strtotime($details[0]['dateupdated']))?></td>
                                </tr>
                                
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /table with options -->

            <!-- /content wrapper -->

        </div>
        <!-- /content -->