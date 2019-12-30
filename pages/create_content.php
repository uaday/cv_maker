<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 8/30/2016
 * Time: 12:50 AM
 */
if(isset($_POST['sbtn']))
{
    $message=$obj_app->create_cv($_POST,$_FILES);
}
?>

<div class="container body">
    <?php
        if(isset($message))
        {
            if($message=='Cv Created Successful!!')
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
                    <input   type="text" required="required" name="career_object" class="form-control" placeholder="Enter your career object"  />
                </div>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input  maxlength="100" type="text" required="required" name="fname" class="form-control" placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" name="lname" class="form-control" placeholder="Enter Last Name" />
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="100" type="email" required="required" name="email" class="form-control" placeholder="Enter Your Email" />
                </div>

                <div class="form-group">
                    <label class="control-label">Phone Number</label>
                    <input maxlength="100" type="text" required="required" name="phone" class="form-control" placeholder="Enter Your Phone Number" />
                </div>

                <div class="form-group">
                    <label class="control-label"> Website/Blog </label>
                    <input maxlength="100" type="text"  name="web" class="form-control" placeholder="Enter Website/Blog" />
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
                    <input maxlength="100" type="date" required="required" name="dob" class="form-control" placeholder="Enter Your Date of Birth" />
                </div>
                <div class="form-group">
                    <label class="control-label">Present Address</label>
                    <textarea required="required" class="form-control" name="address" placeholder="Enter your address" ></textarea>
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
                        <input maxlength="200" type="text" required="required" name="name_of_degree" class="form-control" placeholder="Enter Name of Degree" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Major/Group/Subject</label>
                        <input maxlength="200" type="text" required="required" name="major" class="form-control" placeholder="Enter Major/Group/Subject"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Institution*</label>
                        <input maxlength="200" type="text" required="required" name="instituation" class="form-control" placeholder="Enter Institution"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Passing Year*</label>
                        <input maxlength="200" type="text" required="required" name="passing_year" class="form-control" placeholder="Enter Passing Year"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">CGPA / Result</label>
                        <input maxlength="200" type="text" required="required" name="cgpa" class="form-control" placeholder="Enter CGPA / Resul"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Achievement(s)</label>
                        <input maxlength="200" type="text" required="required" name="achievement" class="form-control" placeholder="Enter Achievement(s)"  />
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
                    <input maxlength="200" type="text" class="form-control" name="name_of_degree1" placeholder="Enter Name of Degree" />
                </div>
                <div class="form-group">
                    <label class="control-label">Major/Group/Subject</label>
                    <input maxlength="200" type="text"  class="form-control" name="major1" placeholder="Enter Major/Group/Subject"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Institution*</label>
                    <input maxlength="200" type="text" class="form-control" name="instituation1" placeholder="Enter Institution"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Passing Year*</label>
                    <input maxlength="200" type="text"  class="form-control" name="passing_year1" placeholder="Enter Passing Year"  />
                </div>

                <div class="form-group">
                    <label class="control-label">CGPA / Result</label>
                    <input maxlength="200" type="text"  class="form-control" name="cgpa1" placeholder="Enter CGPA / Resul"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Achievement(s)</label>
                    <input maxlength="200" type="text"  class="form-control" name="achievement1" placeholder="Enter Achievement(s)"  />
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
                    <input maxlength="200" type="text" class="form-control" name="name_of_degree2" placeholder="Enter Name of Degree" />
                </div>
                <div class="form-group">
                    <label class="control-label">Major/Group/Subject</label>
                    <input maxlength="200" type="text"  class="form-control" name="major2" placeholder="Enter Major/Group/Subject"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Institution*</label>
                    <input maxlength="200" type="text" class="form-control" name="instituation2" placeholder="Enter Institution"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Passing Year*</label>
                    <input maxlength="200" type="text"  class="form-control" name="passing_year2" placeholder="Enter Passing Year"  />
                </div>

                <div class="form-group">
                    <label class="control-label">CGPA / Result</label>
                    <input maxlength="200" type="text"  class="form-control" name="cgpa2" placeholder="Enter CGPA / Resul"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Achievement(s)</label>
                    <input maxlength="200" type="text"  class="form-control" name="achievement2" placeholder="Enter Achievement(s)"  />
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
                        <label class="control-label">Job Type  </label>
                        <input maxlength="200" type="text"  name="job_title" class="form-control" placeholder="Enter Job Type" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title / Designation  </label>
                        <input maxlength="200" type="text"  name="desig" class="form-control" placeholder="Enter Title/Designation"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company / Organization  </label>
                        <input maxlength="200" type="text"  name="org" class="form-control" placeholder="Enter Company / Organization" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input maxlength="200" type="date"  name="sdate" class="form-control" placeholder="Enter Start Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input maxlength="200" type="date"  name="edate" class="form-control" placeholder="Enter End Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Job Description</label>
                        <input maxlength="200" type="text"  name="job_des" class="form-control" placeholder="Enter Job Description" />
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
                        <label class="control-label">Job Type  </label>
                        <input maxlength="200" type="text"  class="form-control" name="job_title1" placeholder="Enter Job Type" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title / Designation </label>
                        <input maxlength="200" type="text"  class="form-control" name="desig1" placeholder="Enter Title/Designation"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company / Organization  </label>
                        <input maxlength="200" type="text"  class="form-control" name="org1" placeholder="Enter Company / Organization" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input maxlength="200" type="date" class="form-control" name="sdate1" placeholder="Enter Start Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input maxlength="200" type="date"  class="form-control" name="edate1" placeholder="Enter End Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Job Description</label>
                        <input maxlength="200" type="text" class="form-control" name="job_des1" placeholder="Enter Job Description" />
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
                        <label class="control-label">Job Type  </label>
                        <input maxlength="200" type="text"  class="form-control" name="job_title2" placeholder="Enter Job Type" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title / Designation  </label>
                        <input maxlength="200" type="text"  class="form-control" name="desig2" placeholder="Enter Title/Designation"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company / Organization  </label>
                        <input maxlength="200" type="text"  class="form-control" name="org2" placeholder="Enter Company / Organization" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input maxlength="200" type="date" class="form-control" name="sdate2" placeholder="Enter Start Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input maxlength="200" type="date"  class="form-control" name="edate2" placeholder="Enter End Date" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Job Description</label>
                        <input maxlength="200" type="text" class="form-control" name="job_des2" placeholder="Enter Job Description" />
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
                        <input maxlength="200" type="text" required="required" name="qualification" class="form-control" placeholder="Enter Qualifications" />
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
                        <input maxlength="200" type="text"  class="form-control"  name="qualification1" placeholder="Enter Qualifications" />
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
                        <input maxlength="200" type="text" class="form-control" name="qualification2"  placeholder="Enter Qualifications" />
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
                        <label class="control-label">PhotoGraph</label>

                        <input type="file" name="photo" required="required" class="btn btn-primary btn-block">
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
                        <input maxlength="200" type="text" required="required" name="name" class="form-control" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization</label>
                        <input maxlength="200" type="text" required="required" name="orga" class="form-control" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Designation</label>
                        <input maxlength="200" type="text" required="required" name="des" class="form-control" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="200" type="text" required="required" name="em" class="form-control" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Phone / Mobile</label>
                        <input maxlength="200" type="text" required="required" name="mobile" class="form-control" placeholder="Enter Company Name" />
                    </div>

                    <hr>
                    <br>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input maxlength="200" type="text" required="required" name="name1" class="form-control" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Organization</label>
                        <input maxlength="200" type="text" required="required" name="orga1" class="form-control" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Designation</label>
                        <input maxlength="200" type="text" required="required" name="des1" class="form-control" placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="200" type="text" required="required" name="em1" class="form-control" placeholder="Enter Company Address"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Phone / Mobile</label>
                        <input maxlength="200" type="text" required="required" name="mobile1" class="form-control" placeholder="Enter Company Name" />
                    </div>

                    <button class="btn btn-success btn-lg pull-right" name="sbtn" type="submit">Submit</button>
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

