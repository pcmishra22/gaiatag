<div class="row">
                        <div class="col-lg-12">
                        <?php   
      //flash messages
      if($this->session->flashdata('flash_message'))
      {
        if($this->session->flashdata('flash_message') == 'deleted')
        {
            echo '<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>User Deleted Successfully.</div>';       
        }
        if($this->session->flashdata('flash_message') == 'added')
        {
            echo '<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>User Added Successfully.</div>';       
        }
        if($this->session->flashdata('flash_message') == 'updated')
        {
            echo '<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>User Updated Successfully.</div>';       
        }
      }
      ?>
                            <div class="panel panel-default gradient">
                                <div class="panel-heading">
                                    <h4>
                                        <span>List Users</span>
                                    </h4>
                                </div>
                                <div class="panel-body noPad clearfix">
                                    <?php
if(count($userlist)>0)
{
    ?>
                                    <table cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">
                                        <thead>
                                            <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
        <th>Date</th>
        <th>Status</th>
        
                                            </tr>
                                        </thead>
                                        <tbody>

    <?php
    foreach($userlist as $user)
    {
        ?>
        <tr class="odd gradeX">
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['first_name']?></td>
        <td><?php echo $user['last_name']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['mobile_number']?></td>
        <td><?php echo $user['city']?></td>
        <td><?php echo $user['datecreated']?></td>
        <td><?php echo $user['status']?></td>
        </tr>
        <?php
    }
    ?>                           </tbody>
                                    </table>
<?php
}
?>

                                </div>

                            </div>
                        </div>

                    </div>














