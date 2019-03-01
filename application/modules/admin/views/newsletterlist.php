 <!-- Content -->
            <div id="content">
    
                <!-- Content wrapper -->
                <div class="wrapper">
    
                    <!-- Breadcrumbs line -->
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb"> 
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"><a href="calendar.html" title="">Calendar</a></li>
                        </ul>
                        
                        <ul class="alt-buttons">
                            <li><a href="#" title=""><i class="icon-signal"></i><span>Stats</span></a></li>
                            <li><a href="#" title=""><i class="icon-comments"></i><span>Messages</span></a></li>
                            <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Tasks</span> <strong>(+16)</strong></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" title=""><i class="icon-plus"></i>Add new task</a></li>
                                    <li><a href="#" title=""><i class="icon-reorder"></i>Statement</a></li>
                                    <li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /breadcrumbs line -->
    
                  <div class="widget">
                    <div class="navbar"><div class="navbar-inner"><h6>MANAGE NEWSLETTER USER LIST :-</h6></div></div>
                   
                  <!-- Default datatable -->
                <?
                        if(@$msg!='')
                        {
                        ?>
                        <div class="alert alert-error" style="margin-top: 16px;">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><? echo $msg;?></strong>
                        </div>
                        <?
                        }
                        ?>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                              foreach($userlist as $user)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $user['id']?></td>
                                    <td><?php echo $user['email']?></td>
                                    <td><?php echo $user['status']?></td>
                                    <td><?php echo $user['datecreated']?></td>
                                    <td>
                                    <p class="item-buttons">
                                        <a href="<?php echo base_url();?>admin/addcms/<?php echo $user['id']?>" class="btn btn-info tip" title="Edit">Edit</a>
                                        <a href="<?php echo base_url();?>admin/deletecms/<?php echo $user['id']?>" class="btn btn-danger tip" title="Move to trash">Delete</a>
                                        <a href="<?php echo base_url();?>admin/viewcms/<?php echo $user['id']?>" class="btn btn-info tip" title="View Details">View</a>
                                    </p>
                                    </td> 
                                    </tr>      
                                <?php
                                }
                                if(@$links!='')
                                {
                                ?>
                                <tr>
                                   <td><p><?php echo $links; ?></p></td>
                                </tr>
                                <?php
                                }
                                ?>
     
                            </tbody>
                        </table>
                    </div>
                </div>
    
                   
                </div>
                <!-- /content wrapper -->
            </div>
            <!-- /content -->

    