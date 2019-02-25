<style> 
.div
{
  border:1px solid #E6E6E6;
  clear:both;
}
</style>

<script type="text/javascript">

  baseurl='<?php echo base_url();?>frontend/images/';
   
   function change(id)
   {
      var cname=document.getElementById(id).className;

      var ab=document.getElementById(id+"_hidden").value;
      
      document.getElementById(cname+"rating").value=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src=baseurl+"star2.png";
      }
      var id=parseInt(ab)+1;
      
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src=baseurl+"star1.png";
      }
   }

</script>

       <?php

        //check array 

          if(empty($userdetails))
          {
            $humanname='';
            $humanimage='';
            $humantype='';
            $breed='';
            $color='';
            $weight='';
            $neuter='';
            $licenseid='';
            $microchipid='';
            $rabbiedvacid='';
            $vetname='';
            $vetphone='';
            $currenthealthstate='';
            $allergies='';
            $medication_use='';
            $overall_behaviour='';
            $children_tolerance='';
            $dogs_tolerance='';
            $cats_tolerance='';
            $notes='';
            $datecreated='';
            $dateupdated='';
          }
          else
          {
            $humanname=$userdetails['human_name'];
            $humanimage=$userdetails['human_image'];
            $humantype=$userdetails['human_type'];
            $breed=$userdetails['breed'];
            $color=$userdetails['color'];
            $weight=$userdetails['weight'];
            $neuter=$userdetails['neuter'];
            $licenseid=$userdetails['licenseid'];
            $microchipid=$userdetails['microchipid'];
            $rabbiedvacid=$userdetails['rabbiedvacid'];
            $vetname=$userdetails['vet_name'];
            $vetphone=$userdetails['vet_phone'];
            $currenthealthstate=$userdetails['current_health_state'];
            $allergies=$userdetails['allergies'];
            $medication_use=$userdetails['medication_use'];
            $overall_behaviour=$userdetails['overall_behaviour'];
            $children_tolerance=$userdetails['children_tolerance'];
            $dogs_tolerance=$userdetails['dogs_tolerance'];
            $cats_tolerance=$userdetails['cats_tolerance'];
            $notes=$userdetails['notes'];
            $datecreated=$userdetails['date_created'];
            $dateupdated=$userdetails['date_modified'];
          }

       ?>

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
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>human Info</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                     <?php
                        if($this->session->flashdata('flash_message') == 'updated')
                        {
                            echo '<div  style="color:green;" align="center" class="alert alert-success"><strong>Record Updated Successfully !</strong></div>';
                        }
                        if($this->session->flashdata('flash_message') == 'saved')
                        {
                            echo '<div  style="color:green;" align="center" class="alert alert-success"><strong>Record Saved Successfully !</strong></div>';
                        }
                       ?>
                  <form name="basicinfo" id="basicinfo" class="form-inline" action="" method="post" enctype="multipart/form-data">

                   
            <?php
                    //check which file is created...............
                    $fullpath=base_url()."human_images/".$humanimage;
            ?>

              <div class="friend-list">
                <div class="row">
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="<?php echo $fullpath;?>" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <!--<a href="#" class="pull-right text-green">My Friend</a>-->
                          <h5><a href="timeline.html" class="profile-link"><?php echo $humanname; ?></a></h5>
                          <!--<p>Graphic Designer at Envato</p>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                  <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="humanname">human Name</label>
                        <input id="humanname" class="form-control input-group-lg" type="text" name="humanname" title="Enter human name" placeholder="human name" value="<?php echo $humanname; ?>" />
                      </div>

                  </div>
                  <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="humanimage">human Image (Select image to upload:)</label>
                        
                            <input type="file" name="humanimage" id="humanimage" title="Select image to upload">

                      </div>
                  </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="humantype"> human Type</label>
                        <input id="humantype" class="form-control input-group-lg" type="text" name="humantype" title="Enter humantype" placeholder="My human Type" value="<?php echo $humantype; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="breed">human Breed</label>
                        <input id="breed" class="form-control input-group-lg" type="text" name="breed" title="Enter Breed" placeholder="My Breed" value="<?php echo $breed; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="breed">Color</label>
                        <input id="color" class="form-control input-group-lg" type="text" name="color" title="Enter color" placeholder="My color" value="<?php echo $color; ?>" />
                      </div>
                    </div>


                    <div class="row">
                      <p class="custom-label"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day" name="day">
                          <option value="Day">Day</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option selected>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month" name="month">
                          <option value="month">Month</option>
                          <option>Jan</option>
                          <option>Feb</option>
                          <option>Mar</option>
                          <option>Apr</option>
                          <option>May</option>
                          <option>Jun</option>
                          <option>Jul</option>
                          <option>Aug</option>
                          <option>Sep</option>
                          <option>Oct</option>
                          <option>Nov</option>
                          <option selected>Dec</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year" name="year">
                          <option value="year">Year</option>
                          <option selected>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group gender">
                      <span class="custom-label"><strong>I am a: </strong></span>
                      <label class="radio-inline">
                        <input type="radio" name="sex" value='male' checked>Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="sex" value='female'>Female
                      </label>
                    </div>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="weight">Weight (lbs)</label>
                        <input id="weight" class="form-control input-group-lg" type="text" name="weight" title="Enter weight" placeholder="My weight" value="<?php echo $weight; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="neuter">Neuter / Spay</label>
                        <select class="form-control valid" data-val="true" data-val-required="The Neuter/Spay field is required." id="neuter" name="neuter" aria-required="true" aria-invalid="false" aria-describedby="NeuterSpay-error">
                        
                        <option <?php
                         if($neuter=='no'){ ?>
                          selected="selected" 
                          <?php
                           }
                          ?> value="no"> No </option>
                          <option <?php
                         if($neuter=='yes'){ ?>
                          selected="selected" 
                          <?php
                           }
                          ?> value="yes"> Yes </option>
                        </select>
                      </div>
                    </div>
                  <div class="block-title">
                    <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Registration</h4>
                    <div class="line"></div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                    <div class="line"></div>
                  </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="license">License ID</label>
                        <input id="license" class="form-control input-group-lg" type="text" name="license" title="Enter Licence ID" placeholder="Enter Licence ID" value="<?php echo $licenseid;?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="microchip">Microchip ID</label>
                        <input id="microchip" class="form-control input-group-lg" type="text" name="microchip" title="Enter Microchip ID" placeholder="Enter Microchip ID" value="<?php echo $microchipid; ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="rabies">Rabies ID</label>
                        <input id="rabies" class="form-control input-group-lg" type="text" name="rabies" title="Enter Rabies ID" placeholder="Enter Rabies ID" value="<?php echo $rabbiedvacid; ?>" />
                      </div>
                    </div>

                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Vet/Provider</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="vetname">Vet Name</label>
                        <input id="vetname" class="form-control input-group-lg" type="text" name="vetname" title="Enter vet name" placeholder="Enter vet name" value="<?php echo $vetname; ?>" />
                      </div>
                    </div>


                      <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="vetphonenumber">Vet Phone Number</label>
                        <input id="vetphonenumber" class="form-control input-group-lg" type="text" name="vetphonenumber" title="Enter vet phone number" placeholder="Enter vet phone number" value="<?php echo $vetphone; ?>" />
                      </div>
                    </div>

                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>human Health</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="healthstate">Your human's Health State</label>
                        <input id="healthstate" class="form-control input-group-lg" type="text" name="healthstate" title="Enter human health state" placeholder="Enter Enter human health state" value="<?php echo $currenthealthstate; ?>" />
                      </div>
                    </div>
                      <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="allergies">Allergies</label>
                        <input id="allergies" class="form-control input-group-lg" type="text" name="allergies" title="Enter allergies" placeholder="Enter allergies" value="<?php echo $allergies;?>" />
                      </div>
                    </div>
                      <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="medication">Medication Taken</label>
                        <input id="medication" class="form-control input-group-lg" type="text" name="medication" title="Enter medication taken" placeholder="Enter medication taken" value="<?php echo $medication_use; ?>" />
                      </div>
                    </div>

                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>human Character</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>

                  <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="overallbehaviour" style="margin-top: 10px;">Your human's Overall Behaviour</label>
                      </div>

                    <div class="form-group col-xs-6">


<div class="div">
<?php
for($i=1;$i<=$overall_behaviour;$i++)
{
?>
    <input type="hidden" id="overall<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star2.png" onmouseover="change(this.id);" id="overall<?php echo $i;?>" class="overall">

<?php
}
?>
<?php

for($i=$overall_behaviour+1;$i<=5;$i++)
{
?>
    <input type="hidden" id="overall<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star1.png" onmouseover="change(this.id);" id="overall<?php echo $i;?>" class="overall">

<?php
}
?>
</div>  
                    </div>
                  </div>
                                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="overallbehaviour" style="margin-top: 10px;">Children Tolerence</label>
                      </div>

                    <div class="form-group col-xs-6">


<div class="div">
<?php
for($i=1;$i<=$children_tolerance;$i++)
{
?>
    <input type="hidden" id="children<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star2.png" onmouseover="change(this.id);" id="children<?php echo $i;?>" class="children">

<?php
}
?>
<?php

for($i=$children_tolerance+1;$i<=5;$i++)
{
?>
    <input type="hidden" id="children<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star1.png" onmouseover="change(this.id);" id="children<?php echo $i;?>" class="children">

<?php
}
?>
</div> 

                    </div>
                  </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                          <label for="dogtolerance" style="margin-top: 10px;">Dog Tolerence</label>
                      </div>

                    <div class="form-group col-xs-6">
                    


<div class="div">
<?php
for($i=1;$i<=$dogs_tolerance;$i++)
{
?>
    <input type="hidden" id="dog<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star2.png" onmouseover="change(this.id);" id="dog<?php echo $i;?>" class="dog">

<?php
}
?>
<?php

for($i=$dogs_tolerance+1;$i<=5;$i++)
{
?>
    <input type="hidden" id="dog<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star1.png" onmouseover="change(this.id);" id="dog<?php echo $i;?>" class="dog">

<?php
}
?>
</div> 


                    </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="cattolerance" style="margin-top: 10px;">Cat Tolerence</label>
                        </div>

                    <div class="form-group col-xs-6">


<div class="div">
<?php
for($i=1;$i<=$cats_tolerance;$i++)
{
?>
    <input type="hidden" id="cat<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star2.png" onmouseover="change(this.id);" id="cat<?php echo $i;?>" class="cat">

<?php
}
?>
<?php

for($i=$cats_tolerance+1;$i<=5;$i++)
{
?>
    <input type="hidden" id="cat<?php echo $i;?>_hidden" value="<?php echo $i;?>">
    <img src="<?php echo base_url();?>frontend/images/star1.png" onmouseover="change(this.id);" id="cat<?php echo $i;?>" class="cat">

<?php
}
?>
</div> 


<!-- hidden variable to post data  -->
  <input type="hidden" name="overallrating" id="overallrating" value="<?php echo $userdetails['overall_behaviour']?>">
  <input type="hidden" name="childrenrating" id="childrenrating" value="<?php echo $userdetails['children_tolerance']?>">
  <input type="hidden" name="dograting" id="dograting" value="<?php echo $userdetails['dogs_tolerance']?>">
  <input type="hidden" name="catrating" id="catrating" value="<?php echo $userdetails['cats_tolerance']?>">

                    </div>
                  </div>


                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Add'l. Notes</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">Note</label>
                        <textarea id="note" name="note" class="form-control" placeholder="Some notes about me" rows="4" cols="400"><?php echo $notes; ?></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="cellphone">Created Date </label>
                       <input id="cellphone" class="form-control input-group-lg" type="text" name="createddate" title="Created Date"  value="<?php echo $datecreated; ?>" readonly/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="homephone">Last Updated</label>
                       <input id="homephone" class="form-control input-group-lg" type="text" name="updateddate" title="Last Updated" value="<?php echo $dateupdated; ?>" readonly/>
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

