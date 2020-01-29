<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 8/30/2016
 * Time: 10:29 PM
 */

if(isset($_POST['ubtn']))
{
    $message=$obj_app->update_cv($_POST,$_FILES);
}
$login_id=$_SESSION['login_id'];
$result1=$obj_app->select_basic_info_by_login_id($login_id);
$data1=mysqli_fetch_assoc($result1);
$result2=$obj_app->select_education1_by_login_id($login_id);
$data2=mysqli_fetch_assoc($result2);
$result3=$obj_app->select_education2_by_login_id($login_id);
$data3=mysqli_fetch_assoc($result3);
$result4=$obj_app->select_education3_by_login_id($login_id);
$data4=mysqli_fetch_assoc($result4);
$result5=$obj_app->select_experience1_by_login_id($login_id);
$data5=mysqli_fetch_assoc($result5);
$result6=$obj_app->select_experience2_by_login_id($login_id);
$data6=mysqli_fetch_assoc($result6);
$result7=$obj_app->select_experience3_by_login_id($login_id);
$data7=mysqli_fetch_assoc($result7);
$result8=$obj_app->select_qualification1_by_login_id($login_id);
$data8=mysqli_fetch_assoc($result8);
$result9=$obj_app->select_qualification2_by_login_id($login_id);
$data9=mysqli_fetch_assoc($result9);
$result10=$obj_app->select_qualification3_by_login_id($login_id);
$data10=mysqli_fetch_assoc($result10);
$result11=$obj_app->select_reference1_by_login_id($login_id);
$data11=mysqli_fetch_assoc($result11);
$result12=$obj_app->select_reference2_by_login_id($login_id);
$data12=mysqli_fetch_assoc($result12);
?>

<div class="container body">
    <?php
    if(isset($message))
    {
        if($message=='CV Update Successful!!')
        {?>
            <div class="alert alert-success">
                <h3><?php if(isset($message)) echo $message;?></h3>
            </div>
        <?php } else {?>
            <div class="alert alert-danger">
                <h3><?php if(isset($message)) echo $message;?></h3>
            </div>
        <?php }}?>

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Basic Information</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Education</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Work Experience</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Qualifications</p>
            </div>


            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p>Photograph</p>
            </div>


            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                <p>References</p>
            </div>
        </div>
    </div>
    <form role="form" action="" method="post" enctype="multipart/form-data">
        <div class="row setup-content" id="step-1">
            <div class="col-md-12">
                <br>
                <h3 class="text-center text-danger"> Basic Information</h3>
                <br>
                <div class="form-group">
                    <label class="control-label">Career Object</label>
                    <input   type="text" required="required" name="career_object" value="<?php echo $data1['career_object']?>" class="form-control" placeholder="Enter your career object"  />
                </div>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input  maxlength="100" type="text" required="required" name="fname" value="<?php echo $data1['first_name']?>" class="form-control" placeholder="Enter First Name"  />
                    <input  maxlength="100" type="hidden" required="required" name="user_id" value="<?php echo $data1['user_id']?>" class="form-control" placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" name="lname" value="<?php echo $data1['last_name']?>" class="form-control" placeholder="Enter Last Name" />
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="100" type="text" required="required" name="email" value="<?php echo $data1['email']?>" class="form-control" placeholder="Enter Your Email" />
                </div>

                <div class="form-group">
                    <label class="control-label">Phone Number</label>
                    <input maxlength="100" type="text" required="required" name="phone" value="<?php echo $data1['phone']?>" class="form-control" placeholder="Enter Your Phone Number" />
                </div>

                <div class="form-group">
                    <label class="control-label"> Website/Blog </label>
                    <input maxlength="100" type="text" required="required" name="web" value="<?php echo $data1['web']?>" class="form-control" placeholder="Enter Website/Blog" />
                </div>


                <div class="form-group">
                    <label>Gender</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="male" checked>Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios2" value="female">Female
                        </label>
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label">Date of Birth</label>
                    <input maxlength="100" type="date" required="required" name="dob" class="form-control" value="<?php echo $data1['dob']?>" placeholder="Enter Your Date of Birth" />
                </div>
                <div class="form-group">
                    <label class="control-label">Present Address</label>
                    <textarea required="required" class="form-control" name="address"  placeholder="Enter your address" ><?php echo $data1['address']?></textarea>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>

        <div class="row setup-content" id="step-2">
            <div >
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-danger"> Education</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Name of Degree</label>
                        <input maxlength="200" type="text" required="required" name="name_of_degree" class="form-control" value="<?php echo $data2['name_of_degree']?>" placeholder="Enter Name of Degree" />
                        <input maxlength="200" type="hidden" required="required" name="edu_id" class="form-control" value="<?php echo $data2['edu_id']?>" placeholder="Enter Name of Degree" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Major/Group/Subject</label>
                        <input maxlength="200" type="text" required="required" name="major" class="form-control" value="<?php echo $data2['major']?>" placeholder="Enter Major/Group/Subject"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Institution*</label>
                        <input maxlength="200" type="text" required="required" name="instituation" class="form-control" value="<?php echo $data2['instituation']?>"  placeholder="Enter Institution"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Passing Year*</label>
                        <input maxlength="200" type="text" required="required" name="passing_year" class="form-control" value="<?php echo $data2['passing_year']?>" placeholder="Enter Passing Year"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">CGPA / Result</label>
                        <input maxlength="200" type="text" required="required" name="cgpa" class="form-control" value="<?php echo $data2['cgpa']?>" placeholder="Enter CGPA / Resul"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Achievement(s)</label>
                        <input maxlength="200" type="text" required="required" name="achievement" class="form-control" value="<?php echo $data2['achievement']?>" placeholder="Enter Achievement(s)"  />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>



            <hr>
            <div class="col-md-12">
                <br>
                <h3 class="text-center text-success"> Add Extra</h3>
                <h3 class="text-center text-danger"> Education</h3>
                <br>
                <div class="form-group">
                    <label class="control-label">Name of Degree</label>
                    <input maxlength="200" type="text" class="form-control" name="name_of_degree1" value="<?php if(isset($data3['name_of_degree'])) echo  $data3['name_of_degree']?>" placeholder="Enter Name of Degree" />
                    <input maxlength="200" type="hidden" class="form-control" name="edu_id1" value="<?php if(isset($data3['edu_id'])) echo $data3['edu_id']?>" placeholder="Enter Name of Degree" />
                </div>
                <div class="form-group">
                    <label class="control-label">Major/Group/Subject</label>
                    <input maxlength="200" type="text"  class="form-control" name="major1" value="<?php if(isset($data3['major'])) echo $data3['major']?>" placeholder="Enter Major/Group/Subject"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Institution*</label>
                    <input maxlength="200" type="text" class="form-control" name="instituation1" value="<?php if(isset($data3['instituation'])) echo $data3['instituation']?>" placeholder="Enter Institution"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Passing Year*</label>
                    <input maxlength="200" type="text"  class="form-control" name="passing_year1" value="<?php if(isset($data3['passing_year'])) echo $data3['passing_year']?>"  placeholder="Enter Passing Year"  />
                </div>

                <div class="form-group">
                    <label class="control-label">CGPA / Result</label>
                    <input maxlength="200" type="text"  class="form-control" name="cgpa1" value="<?php if(isset($data3['cgpa'])) echo $data3['cgpa']?>" placeholder="Enter CGPA / Resul"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Achievement(s)</label>
                    <input maxlength="200" type="text"  class="form-control" name="achievement1" value="<?php if(isset($data3['achievement'])) echo $data3['achievement']?>" placeholder="Enter Achievement(s)"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>

            <hr>
            <div class="col-md-12">
                <br>
                <h3 class="text-center text-success"> Add Extra</h3>
                <h3 class="text-center text-danger"> Education</h3>
                <br>
                <div class="form-group">
                    <label class="control-label">Name of Degree</label>
                    <input maxlength="200" type="text" class="form-control" name="name_of_degree2" value="<?php if(isset($data4['name_of_degree'])) echo $data4['name_of_degree']?>" placeholder="Enter Name of Degree" />
                    <input maxlength="200" type="hidden" class="form-control" name="edu_id2" value="<?php if(isset($data4['edu_id'])) echo $data4['edu_id']?>" placeholder="Enter Name of Degree" />
                </div>
                <div class="form-group">
                    <label class="control-label">Major/Group/Subject</label>
                    <input maxlength="200" type="text"  class="form-control" name="major2" value="<?php if(isset($data4['major'])) echo $data4['major']?>"  placeholder="Enter Major/Group/Subject"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Institution*</label>
                    <input maxlength="200" type="text" class="form-control" name="instituation2" value="<?php if(isset($data4['instituation'])) echo $data4['instituation']?>"  placeholder="Enter Institution"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Passing Year*</label>
                    <input maxlength="200" type="text"  class="form-control" name="passing_year2" value="<?php if(isset($data4['passing_year'])) echo $data4['passing_year']?>"   placeholder="Enter Passing Year"  />
                </div>

                <div class="form-group">
                    <label class="control-label">CGPA / Result</label>
                    <input maxlength="200" type="text"  class="form-control" name="cgpa2"  value="<?php if(isset($data4['cgpa'])) echo $data4['cgpa']?>"  placeholder="Enter CGPA / Resul"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Achievement(s)</label>
                    <input maxlength="200" type="text"  class="form-control" name="achievement2" value="<?php if(isset($data4['achievement'])) echo $data4['achievement']?>"  placeholder="Enter Achievement(s)"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>


        </div>

        <div class="row setup-content" id="step-3">
            <div class="">
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-danger"> Work Experience</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Job Type * </label>
                        <input maxlength="200" type="text" required="required" name="job_title" class="form-control" value="<?php echo $data5['job_title']?>" placeholder="Enter Job Type" />
                        <input maxlength="200" type="hidden" required="required" name="exp_id" class="form-control" value="<?php echo $data5['exp_id']?>" placeholder="Enter Job Type" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title / Designation * </label>
                        <input maxlength="200" type="text" required="required" name="desig" class="form-control" value="<?php echo $data5['desig']?>" placeholder="Enter Title/Designation"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company / Organization  </label>
                        <input maxlength="200" type="text" required="required" name="org" class="form-control"  value="<?php echo $data5['org']?>"  placeholder="Enter Company / Organization" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input maxlength="200" type="date" required="required" name="sdate" class="form-control"  value="<?php echo $data5['sdate']?>"   placeholder="Enter Start Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input maxlength="200" type="date" required="required" name="edate" value="<?php echo $data5['edate']?>" class="form-control" placeholder="Enter End Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Job Description</label>
                        <input maxlength="200" type="text" required="required" name="job_des" value="<?php echo $data5['job_des']?>" class="form-control" placeholder="Enter Job Description" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                <hr>
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-success"> Add Extra</h3>
                    <h3 class="text-center text-danger"> Work Experience</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Job Type * </label>
                        <input maxlength="200" type="text"  class="form-control" name="job_title1" value="<?php if(isset($data6['job_title'])) echo $data6['job_title']?>" placeholder="Enter Job Type" />
                        <input maxlength="200" type="hidden"  class="form-control" name="exp_id1" value="<?php if(isset($data6['exp_id'])) echo $data6['exp_id']?>" placeholder="Enter Job Type" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title / Designation * </label>
                        <input maxlength="200" type="text"  class="form-control" name="desig1" value="<?php if(isset($data6['desig'])) echo $data6['desig']?>" placeholder="Enter Title/Designation"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company / Organization  </label>
                        <input maxlength="200" type="text"  class="form-control" name="org1" value="<?php if(isset($data6['org'])) echo $data6['org']?>" placeholder="Enter Company / Organization" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input maxlength="200" type="date" class="form-control" name="sdate1"  value="<?php if(isset($data6['sdate'])) echo $data6['sdate']?>"  placeholder="Enter Start Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input maxlength="200" type="date"  class="form-control" name="edate1"  value="<?php if(isset($data6['edate'])) echo $data6['edate']?>"   placeholder="Enter End Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Job Description</label>
                        <input maxlength="200" type="text" class="form-control" name="job_des1" value="<?php if(isset($data6['job_des'])) echo $data6['job_des']?>"  placeholder="Enter Job Description" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                <hr>
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-success"> Add Extra</h3>
                    <h3 class="text-center text-danger"> Work Experience</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Job Type * </label>
                        <input maxlength="200" type="text"  class="form-control" name="job_title2" value="<?php if(isset($data7['job_title'])) echo $data7['job_title']?>" placeholder="Enter Job Type" />
                        <input maxlength="200" type="hidden"  class="form-control" name="exp_id2" value="<?php if(isset($data7['exp_id'])) echo $data7['exp_id']?>" placeholder="Enter Job Type" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title / Designation * </label>
                        <input maxlength="200" type="text"  class="form-control" name="desig2" value="<?php if(isset($data7['desig'])) echo $data7['desig']?>" placeholder="Enter Title/Designation"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company / Organization  </label>
                        <input maxlength="200" type="text"  class="form-control" name="org2" value="<?php if(isset($data7['org'])) echo $data7['org']?>" placeholder="Enter Company / Organization" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input maxlength="200" type="date" class="form-control" name="sdate2"  value="<?php if(isset($data7['sdate'])) echo $data7['sdate']?>" placeholder="Enter Start Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input maxlength="200" type="date"  class="form-control" name="edate2" value="<?php if(isset($data7['edate'])) echo $data7['edate']?>" placeholder="Enter End Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Job Description</label>
                        <input maxlength="200" type="text" class="form-control" name="job_des2" value="<?php if(isset($data7['job_des'])) echo $data7['job_des']?>" placeholder="Enter Job Description" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>


        <div class="row setup-content" id="step-4">
            <div class="">
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-danger">Qualifications</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Qualifications</label>
                        <input maxlength="200" type="text" required="required" name="qualification" value="<?php echo $data8['qualification']?>" class="form-control" placeholder="Enter Qualifications" />
                        <input maxlength="200" type="hidden" required="required" name="qua_id" value="<?php echo $data8['qua_id']?>" class="form-control" placeholder="Enter Qualifications" />
                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                <hr>
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-success"> Add Extra</h3>
                    <h3 class="text-center text-danger"> Qualifications</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Qualifications</label>
                        <input maxlength="200" type="text"  class="form-control"  name="qualification1" value="<?php echo $data9['qualification']?>" placeholder="Enter Qualifications" />
                        <input maxlength="200" type="hidden"  class="form-control"  name="qua_id1" value="<?php echo $data9['qua_id']?>" placeholder="Enter Qualifications" />
                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>

                <hr>
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-success"> Add Extra</h3>
                    <h3 class="text-center text-danger"> Qualifications</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Qualifications</label>
                        <input maxlength="200" type="text" class="form-control" name="qualification2" value="<?php if(isset($data10['qualification'])) echo $data10['qualification']?>"  placeholder="Enter Qualifications" />
                        <input maxlength="200" type="hidden" class="form-control" name="qua_id2" value="<?php if(isset($data10['qua_id'])) echo $data10['qua_id']?>"  placeholder="Enter Qualifications" />
                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>

            </div>
        </div>


        <div class="row setup-content" id="step-5">
            <div class="">
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-danger"> Photograph</h3>
                    <br>

                    <div class="form-group">
                        <img src="<?php echo $data1['photo']?>" height="250px" width="250px">
                    </div>

                    <div class="form-group">
                        <label class="control-label">PhotoGraph</label>

                        <input type="file" name="photo" class="btn btn-primary btn-block">
                        <p class="help-block">pic size 130x130</p>

                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-6">
            <div class="">
                <div class="col-md-12">
                    <br>
                    <h3 class="text-center text-danger"> References</h3>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input maxlength="200" type="text" required="required" name="name" value="<?php echo $data11['namee']?>" class="form-control" placeholder="Enter Company Name" />
                        <input maxlength="200" type="hidden" required="required" name="ref_id" value="<?php echo $data11['ref_id']?>" class="form-control" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization</label>
                        <input maxlength="200" type="text" required="required" name="orga" value="<?php echo $data11['org']?>" class="form-control" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Designation</label>
                        <input maxlength="200" type="text" required="required" name="des" value="<?php echo $data11['desig']?>" class="form-control" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="200" type="text" required="required" name="em" value="<?php echo $data11['email']?>" class="form-control" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Phone / Mobile</label>
                        <input maxlength="200" type="text" required="required" name="mobile" value="<?php echo $data11['phone']?>" class="form-control" placeholder="Enter Company Name" />
                    </div>

                    <hr>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input maxlength="200" type="text" required="required" name="name1" class="form-control" value="<?php echo $data12['namee']?>" placeholder="Enter Company Name" />
                        <input maxlength="200" type="hidden" required="required" name="ref_id1" class="form-control" value="<?php echo $data12['ref_id']?>" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization</label>
                        <input maxlength="200" type="text" required="required" name="orga1" class="form-control" value="<?php echo $data12['org']?>" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Designation</label>
                        <input maxlength="200" type="text" required="required" name="des1" class="form-control" value="<?php echo $data12['desig']?>" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="200" type="text" required="required" name="em1" class="form-control" value="<?php echo $data12['email']?>" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Phone / Mobile</label>
                        <input maxlength="200" type="text" required="required" name="mobile1" class="form-control" value="<?php echo $data12['phone']?>" placeholder="Enter Company Name" />
                    </div>

                    <button class="btn btn-success btn-lg pull-right" name="ubtn" type="submit">Update</button>
                </div>
            </div>
        </div>
    </form>

</div>

<br>
<br>
<br>
<br>
<br>


