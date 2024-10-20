<style>
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 0 !important;
        background: #ffffff;
        background-image: none;
        flex: 1;
        padding: 5px 2.5em;
        color: #686a6f;
        cursor: pointer;
        font-size: 0.9rem;
        font-family: 'Open Sans', sans-serif;
    }

    select::-ms-expand {
        display: none;
    }

    .select {
        position: relative;
        display: flex;
        width: 100%;
        height: 4em;
        line-height: 4;
        background: #ffffff;
        overflow: hidden;
        border-radius: .25em;
    }

    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #e9e9e9;
        cursor: pointer;
        pointer-events: none;
        transition: .25s all ease;
    }

    .select:hover::after {
        color: #859393;
    }

    /* === HEADING STYLE #3 === */
    .three h1 {
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1.5em;
        padding-bottom: 15px;
        position: relative;
    }

    .three h1:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 5px;
        width: 25%;
        background-color: #111;
    }

    .three h1:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        height: 1px;
        width: 100%;
        max-width: 100%;
        background-color: #333;
    }

    #user-address-textarea {
        background-color: #fff;
        height: 60px;
        margin-bottom: 10px;
    }
</style>
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Study Visa Application Form</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <script>
                    function show_field(str) {
                        if (str == "") {
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo base_url(); ?>web/martial_status?q=" + str, true);
                        xmlhttp.send();
                    }
                </script>

                <script>
                    function show_field_children(str) {
                        if (str == "") {
                            document.getElementById("ChildrenField").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("ChildrenField").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo base_url(); ?>web/children_form?q=" + str, true);
                        xmlhttp.send();
                    }
                </script>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>web_operation/student_assessment_new_submit" method="post">
                    <!--<form id="contact_form" name="contact_form" class="" action="--><?php //echo base_url(); 
                                                                                        ?><!--web_operation/student_assessment_request" method="post">-->

                    <!-------------------Personal Details Start-------------------->
                    <div class="three">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="Personal Details">&nbsp;Personal Details :</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Full Name :</label>
                                <input name="FullName" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of Birth :</label>
                                <input name="DateOfBirth" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Gender :</label>
                                <div class="select">
                                    <select id="format" name="Gender" required>
                                        <option value="">Choose one</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Religion :</label>
                                <input name="Religion" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Martial Status :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="MartialStatus" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Nationality :</label>
                                <input name="Nationality" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">National ID No :</label>
                                <input name="NationalIdNo" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Birth Certificate No :</label>
                                <input name="BirthCertificateNo" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Driving License No :</label>
                                <input name="DrivingLicenseNo" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport No :</label>
                                <input name="PassportNo" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Issue Date :</label>
                                <input name="PassportIssueDate" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Expiry Date :</label>
                                <input name="PassportExpiryDate" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Primary Contact No (number only) :</label>
                                <input name="PrimaryContactNo" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Secondary Contact No (number only) :</label>
                                <input name="SecondaryContactNo" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Emergency Contact No (number only) :</label>
                                <input name="EmergencyContactNo" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Primary Email :</label>
                                <input name="PrimaryEmail" class="form-control" type="email" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Secondary Email :</label>
                                <input name="SecondaryEmail" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Father’s Name :</label>
                                <input name="FatherName" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Mother’s Name :</label>
                                <input name="MotherName" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>
                    <!-------------------Personal Details End-------------------->

                    <!-------------------Address Details Start-------------------->
                    <div class="three">
                        <h1><img src="<?php echo base_url(); ?>others/images/location.png" width="25" height="25" alt="Personal Details">&nbsp;Address Details :</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-6">
                                <label class="lebel_title">Present Address :</label>
                                <textarea class="form-control" id="user-address-textarea" rows="3" cols="5" name="PresentAddress" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-6">
                                <label class="lebel_title">Permanent Address :</label>
                                <textarea class="form-control" id="user-address-textarea" rows="3" cols="5" name="PermanentAddress" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-------------------Address Details End-------------------->

                    <!-------------------Details of Preferred Study Start-------------------->
                    <div class="three">
                        <h1><img src="<?php echo base_url(); ?>others/images/graduation-hat.png" width="25" height="25" alt="Personal Details">&nbsp;Details of Preferred Study :</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred Country :</label>
                                <input name="PreferredCountry" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred City :</label>
                                <input name="PreferredCity" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred Institute :</label>
                                <input name="PreferredInstitute" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred of Degree :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="PreferredDegree" required>
                                        <option value="">Choose one</option>
                                        <option value="For Certificate">For Certificate</option>
                                        <option value="For Diploma">For Diploma</option>
                                        <option value="For Bachelor">For Bachelor</option>
                                        <option value="For Masters">For Master’s</option>
                                        <option value="For Post Graduate">For Post Graduate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred Course (1) :</label>
                                <input name="PreferredCourse1" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred Course (2) Optional :</label>
                                <input name="PreferredCourse2" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Preferred Session :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="PreferredSession" required>
                                        <option value="">Choose one</option>
                                        <option value="January-February">January-February</option>
                                        <option value="June-July">June-July</option>
                                        <option value="September-October">September-October</option>
                                        <option value="November-December">November-December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------Details of Preferred Study End-------------------->

                    <!-------------------Education / Skilled Details Start-------------------->
                    <div class="three d-flex align-items-center gap-2">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/graduate.png" width="25" height="25" alt="Personal Details">&nbsp;Education / Skilled Details Academic 1:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_field_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>

                    </div>
                    <div class="row">
                        <input type="hidden" name="education_section[1]" value="education_section_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="EducationInstituteName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Exam/Degree Name :</label>
                                <input name="EducationExamDegreeName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Major In :</label>
                                <input name="EducationMajorIn[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Result :</label>
                                <input name="EducationResult[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">CGPA :</label>
                                <input name="EducationCGPA[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Year of Passing :</label>
                                <input name="EducationYearOfPassing[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Course Duration :</label>
                                <input name="EducationCourseDuration[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <!--        https://codepen.io/led8/pen/zYYPZxj | Add More | CodePane-->

                        <div class="input_fields_wrap"></div>


                    </div>
                    <!-------------------Education / Skilled Details End-------------------->

                    <!------------------- Skills Summery  start    -------------------->

                    <div class="three d-flex align-items-center gap-2">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp;Skills Summery 1:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_skills_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="slill_section[1]" value="slill_section_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="SkillsInstituteName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Course Name :</label>
                                <input name="SkillsCourseName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Completion Date :</label>
                                <input name="SkillsCompletionDate[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Duration of the Course :</label>
                                <input name="SkillsDurationCourse[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Start From :</label>
                                <input name="SkillsStartFrom[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">End To :</label>
                                <input name="SkillsEndTo[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Country :</label>
                                <input name="SkillsCountry[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Address :</label>
                                <input name="SkillsInstituteAddress[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="input_skills_wrap"></div>

                    </div>
                    <!------------------- Skills Summer End    -------------------->

                    <!------------------- Professional Certificate Summery start    -------------------->

                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/graduation-hat.png" width="25" height="25" alt="Personal Details">&nbsp;Professional Certificate Summery 1:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_certificate_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="professional_certificate[1]" value="professional_certificate_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="ProfessionalCertificateInstituteName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Certificate Name :</label>
                                <input name="ProfessionalCertificateCertificateName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Start From :</label>
                                <input name="ProfessionalCertificateStartFrom[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">End To :</label>
                                <input name="ProfessionalCertificateEndTo[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Country :</label>
                                <input name="ProfessionalCertificateCountry[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Address :</label>
                                <input name="ProfessionalCertificateInstituteAddress[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="input_certificate_wrap"></div>

                    </div>
                    <!------------------- Professional Certificate Summery End    -------------------->

                    <!------------------- Employment History Start    -------------------->

                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/employement_history.png" width="25" height="25" alt="Personal Details">&nbsp;Employment History Experience 1:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_employe_history_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="employment_history[1]" value="employment_history_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Company Name :</label>
                                <input name="ExperienceCompanyName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Designation :</label>
                                <input name="ExperienceDesignation[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Department :</label>
                                <input name="ExperienceDepartment[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Employment Duration :</label>
                                <input name="ExperienceEmploymentDuration[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Company Address :</label>
                                <input name="ExperienceCompanyAddress[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="input_employe_history_wrap"></div>

                    </div>
                    <!------------------- Employment History End    -------------------->

                    <!------------------- English Proficiency Certificate Start    -------------------->

                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/success.png" width="25" height="25" alt="Personal Details">&nbsp;English Proficiency Certificate 1:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_english_proficiency_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="english_proficiency_certificate[1]" value="english_proficiency_certificate_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Institute Name :</label>
                                <input name="ProficiencyInstituteName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Certificate Name :</label>
                                <input name="ProficiencyCertificateName[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Skills Breakdown :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="ProficiencySkillsBreakdown[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Listening Score">Listening Score</option>
                                        <option value="Reading Score">Reading Score</option>
                                        <option value="Speaking Score">Speaking Score</option>
                                        <option value="Writing Score">Writing Score</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Overall Score :</label>
                                <input name="ProficiencyOverallScore[1]" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Test Date :</label>
                                <input name="ProficiencyEnglisghTestDate[1]" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Valid Date :</label>
                                <input name="ProficiencyEnglisghValidDate[1]" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="input_english_proficiency_wrap"></div>

                    </div>
                    <!------------------- English Proficiency Certificate End    -------------------->


                    <!------------------- Sponsor Financial Details Saving Account   -------------------->

                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/savings.png" width="25" height="25" alt="Personal Details">&nbsp;Sponsor Financial Details (Saving Account ) Summery 1 :</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_sponsor_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="sponsor_saving[1]" value="sponsor_saving_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Sponsor Name :</label>
                                <input name="SavingSponsorName[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Relation with Applicant :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingRelationWithApplicant[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Uncle">Uncle</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Does the sponsor have a saving account? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingAccount[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">sponsor’s account valid for more than 6 months? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingSponsorSixMonths[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Available in the sponsor’s account how much? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SavingAccountHowMuch[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="5 to 10 Lac">5 to 10 Lac</option>
                                        <option value="11 to 20 Lac">11 to 20 Lac</option>
                                        <option value="21 to 30 Lac">21 to 30 Lac</option>
                                        <option value="31 to 40 Lac">31 to 40 Lac</option>
                                        <option value="40 to Above">40 to Above</option>
                                        <option value="Nill">Nill</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Bank Name :</label>
                                <input name="SavingBankName[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="input_sponsors_wrap"></div>

                    </div>
                    <!------------------- Sponsor’s Fixed deposit End    -------------------->


                    <!------------------- Sponsor’s Fdr Start    -------------------->

                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/savings.png" width="25" height="25" alt="Personal Details">&nbsp;Sponsor Financial Details (FDR Account) Summery 1 :</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_sponsor_fdr_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="sponsor_fdr[1]" value="sponsor_fdr_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Sponsor Name :</label>
                                <input name="FdrSponsorName[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Relation with Applicant :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FdrRelationWithApplicant[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Uncle">Uncle</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Does the sponsor have a FDR account? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FDRAccount[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Sponsor’s account valid for more than 6 months? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FdrSponsorSixMonths[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Available in the sponsor’s Fdr account how much? </label>
                                <div class="select">
                                    <select id="format" class="form-control" name="FdrAccountHowMuch[1]" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="5 to 10 Lac">5 to 10 Lac</option>
                                        <option value="11 to 20 Lac">11 to 20 Lac</option>
                                        <option value="21 to 30 Lac">21 to 30 Lac</option>
                                        <option value="31 to 40 Lac">31 to 40 Lac</option>
                                        <option value="40 to Above">40 to Above</option>
                                        <option value="Nill">Nill</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Bank Name :</label>
                                <input name="FdrBankName[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="input_sponsors_fdr_wrap"></div>

                    </div>
                    <!------------------- Sponsor’s Fdr Certificate End    -------------------->




                    <!------------------- Spouse Details Start    -------------------->
                    <div class="three pt-4">
                        <h1><img src="<?php echo base_url(); ?>others/images/spouse.png" width="25" height="25" alt="Personal Details">&nbsp;Spouse Details :</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Name of Spouse :</label>
                                <input name="NameSpouse" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of Birth :</label>
                                <input name="SposeDateOfBirth" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Religion :</label>
                                <input name="SpouseReligion" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Nationality :</label>
                                <input name="SpouseNationality" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Occupation :</label>
                                <div class="select">
                                    <select id="format" class="form-control" name="SpouseOccupation" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Govt. Services">Govt. Services</option>
                                        <option value="Private Services">Private Services</option>
                                        <option value="Study">Study</option>
                                        <option value="Business">Business</option>
                                        <option value="Freelancer">Freelancer</option>
                                        <option value="Housewife">Housewife</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">NID Number :</label>
                                <input name="SpouseNIDNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Birth Certificate Number :</label>
                                <input name="SpouseBirthCertificateNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Number :</label>
                                <input name="SpousePassportNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Issue Date :</label>
                                <input name="SpousePassportIssueDate" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Expiry Date :</label>
                                <input name="SpousePassportExpiryDate" class="form-control" type="date" required>
                            </div>
                        </div>


                    </div>
                    <!------------------- Spouse Details End    -------------------->


                    <!------------------- Child Details Start    -------------------->


                    <div class="three d-flex align-items-center gap-2 py-4">
                        <div style="width: 98%;">
                            <h1><img src="<?php echo base_url(); ?>others/images/child.png" width="30" height="30" alt="Personal Details">&nbsp;Child Details 1:</h1>
                        </div>
                        <div style="width: 2%; margin-bottom:-10px">
                            <button class="btn btn-success btn-sm" id="add_childs"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="row">
                       <input type="hidden" name="child_details[1]" value="child_details_1">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Name of Child : </label>
                                <input name="NameofChild[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of Birth : </label>
                                <input name="ChildDateofBirth[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Religion : </label>
                                <input name="ChildReligion[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Nationality : </label>
                                <input name="ChildNationality[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">NID Number (If applicable) : </label>
                                <input name="ChildNIDNumber[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Birth Certificate Number : </label>
                                <input name="ChildBirthCertificateNumber[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Number : </label>
                                <input name="ChildPassportNumber[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Issue Date : </label>
                                <input name="ChildPassportIssueDate[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Passport Expiry Date : </label>
                                <input name="ChildPassportExpiryDate[1]" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="input_add_childs_wrap"></div>

                    </div>
                    <!------------------- Sponsor’s Fdr Certificate End    -------------------->



                    <!--<div id="txtHint"></div>-->
                    <!--<div id="ChildrenField"></div>-->

                    <div class="mb-3 text-center">
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!-- http://localhost/globalconnex/web/student_assessment -->