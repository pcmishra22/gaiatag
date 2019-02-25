
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              <?php
                  echo UsersDashboardLeftPanel();
              ?>
            </div>
            <div class="col-md-7">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="basicinfo" id="basicinfo" class="form-inline" action="" method="post">
                     <?php
                        if($this->session->flashdata('flash_message') == 'updated')
                        {
                            echo '<div  style="color:green;" align="center" class="alert alert-success"><strong>Record Updated Successfully !</strong></div>';
                        }
                       ?>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">First name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" value="<?php echo $userdetails['first_name']?>" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Last name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" value="<?php echo $userdetails['last_name']?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">My email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="My Email" value="<?php echo $userdetails['email']?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="address1"> Address1</label>
                        <input id="address1" class="form-control input-group-lg" type="text" name="address1" title="Enter Address1" placeholder="My Address1" value="<?php echo $userdetails['address1']?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="address2">Address2</label>
                        <input id="address2" class="form-control input-group-lg" type="text" name="address2" title="Enter Address2" placeholder="My Address2" value="<?php echo $userdetails['address2']?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city"> My city</label>
                        <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="<?php echo $userdetails['city']?>"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="state"> My state</label>
                        <input id="state" class="form-control input-group-lg" type="text" name="state" title="Enter state" placeholder="Your state" value="<?php echo $userdetails['state']?>"/>
                      </div>

                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="zip">My zip</label>
                       <input id="zip" class="form-control input-group-lg" type="text" name="zip" title="Enter zip" placeholder="Your zip" value="<?php echo $userdetails['zip']?>"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country">My country</label>
                       <input id="country" class="form-control input-group-lg" type="text" name="country" title="Enter country" placeholder="Your country" value="<?php echo $userdetails['country']?>"/>
                      </div>
                    </div>
                     <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="cellphone">Cell Phone </label>
                       <input id="cellphone" class="form-control input-group-lg" type="text" name="cellphone" title="Enter cellphone" placeholder="Your cellphone" value="<?php echo $userdetails['mobile_number']?>"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="homephone">Home Phone</label>
                       <input id="homephone" class="form-control input-group-lg" type="text" name="homephone" title="Enter homephone" placeholder="Your homephone" value="<?php echo $userdetails['home_phone']?>"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">About me</label>
                        <textarea id="my-info" name="information" class="form-control" placeholder="Some texts about me" rows="4" cols="400"><?php echo $userdetails['about_me']?></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="cellphone">Created Date </label>
                       <input id="cellphone" class="form-control input-group-lg" type="text" name="createddate" title="Created Date"  value="<?php echo $userdetails['datecreated']?>" readonly/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="homephone">Last Updated</label>
                       <input id="homephone" class="form-control input-group-lg" type="text" name="updateddate" title="Last Updated" value="<?php echo $userdetails['editprofile_datetime']?>" readonly/>
                      </div>
                    </div>


                    <button class="btn btn-primary" name="save" id="save">Save Changes</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">Sarah's activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

