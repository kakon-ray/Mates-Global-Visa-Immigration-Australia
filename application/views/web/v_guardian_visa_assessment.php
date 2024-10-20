<!--<section class="page-title" style="background-image: url(--><?php //echo base_url(); ?><!--others/images/background/page-title.jpg);">-->
<!--    <div class="auto-container">-->
<!--        <div class="title-outer">-->
<!--            <h1 class="title">Student&nbsp;Assessment</h1>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--Contact Details Start-->
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Student Guardian Visa (Subclass 590)</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Contact Form -->
                <script>
                    function show_field(str)
                    {
                        if (str=="")
                        {
                            document.getElementById("txtHint").innerHTML="";
                            return;
                        }
                        if (window.XMLHttpRequest)
                        {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {
                            // code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function()
                        {
                            if (xmlhttp.readyState==4 && xmlhttp.status==200)
                            {
                                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

                            }
                        }
                        xmlhttp.open("GET","<?php echo base_url(); ?>web/guardian_applicants_section?q="+str,true);
                        xmlhttp.send();
                    }
                </script>

                <form id="contact_form" name="contact_form" class="" action="#" method="post">

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Father Name :</label>
                                <input name="form_name" class="form-control" name="FatherName" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Mother Name :</label>
                                <input name="form_email" class="form-control" name="MotherName" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Mobile No :</label>
                                <input name="form_email" class="form-control" name="MobileNo" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Email Address :</label>
                                <input name="form_email" class="form-control required email" name="Email" type="email"  required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Present Address :</label>
                                <input name="form_email" class="form-control" name="PresentAddress" type="text"  required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Who will accompany the applicant?</label>
                                <select class="default-select  form-control wide"  name="AccompanyApplicant" required>
                                    <option value="">Choose one</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">How many applicants for schooling visa?</label>
                                <select class="default-select  form-control wide"  name="AccompanyApplicant" onChange="show_field(this.value)" required>
                                    <option value="">Choose one</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">1st Applicant's Name:</label>
                                <input name="form_email" class="form-control" name="1stApplicantName" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of birth :</label>
                                <input name="form_name" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Gender :</label>
                                <select class="default-select  form-control wide"  name="AccompanyApplicant" required>
                                    <option value="">Choose one</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Which version studied :</label>
                                <select class="default-select  form-control wide"  name="AccompanyApplicant" required>
                                    <option value="">Choose one</option>
                                    <option value="English">English</option>
                                    <option value="Bangla">Bangla</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Have IELTS :</label>
                                <select class="default-select  form-control wide"  name="AccompanyApplicant" required>
                                    <option value="">Choose one</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">IELTS Score :</label>
                                <select class="default-select  form-control wide" name="IELTSScore" required>
                                    <option value="">Choose one</option>
                                    <option value="5.0">5.0</option>
                                    <option value="5.5">5.5</option>
                                    <option value="6.0">6.0</option>
                                    <option value="6.5">6.5</option>
                                    <option value="7.0">7.0</option>
                                    <option value="7.5">7.5</option>
                                    <option value="8.0">8.0</option>
                                    <option value="Appeared">Appeared</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Which class will be enroll :</label>
                                <select class="default-select  form-control wide"  name="AccompanyApplicant" required>
                                    <option value="">Choose one</option>
                                    <option value="1 to 6 Class">1 to 6 Class</option>
                                    <option value="7 to 9 Class">7 to 9 Class</option>
                                    <option value="11 to 12 Class">11 to 12 Class</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="lebel_title">In which session to apply for admission :</label>
                                    <select class="default-select  form-control wide" name="HighestEducation" required>
                                        <option value="">Choose one</option>
                                        <option value="January to February">January to February</option>
                                        <option value="June to July">June to July</option>
                                        <option value="November to Decembe">November to December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Applied schooling visa before(country name)?</label>
                                <input name="form_email" class="form-control" name="1stApplicantName" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport expiry date :</label>
                                <input name="form_name" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div id="txtHint"></div>

                    </div>

                    <div class="mb-3 text-center">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

