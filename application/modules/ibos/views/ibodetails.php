
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
                                      <td><code>First Name</code></td>
                                      <td><?php echo $details[0]['first_name']?></td>
                                </tr>
                                <tr>
                                      <td><code>Last Name</code></td>
                                      <td><?php echo $details[0]['last_name']?></td>
                                </tr>
                                <tr>
                                      <td><code>Phone Home</code></td>
                                      <td><?php echo $details[0]['phone_home']?></td>
                                </tr>
                                <tr>
                                      <td><code>Phone Cell</code></td>
                                      <td><?php echo $details[0]['phone_cell']?></td>
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
                                      <td><code>SSN</code></td>
                                      <td><?php echo $details[0]['ssn']?></td>
                                </tr>
                                <tr>
                                      <td><code>Ownership Percent Sales</code></td>
                                      <td><?php echo $details[0]['ownership_percent']?></td>
                                </tr>
                                <tr>
                                      <td><code>Bank Institution</code></td>
                                      <td><?php echo $details[0]['bank_institution']?></td>
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