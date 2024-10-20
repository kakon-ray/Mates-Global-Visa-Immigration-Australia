<!--<section class="page-title" style="background-image: url(--><?php //echo base_url(); ?><!--others/images/background/page-title.jpg);">-->
<!--    <div class="auto-container">-->
<!--        <div class="title-outer">-->
<!--            <h1 class="title">Student&nbsp;Assessment</h1>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--Contact Details Start-->

<style>
    select {
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        appearance:none;
        outline:0;
        box-shadow:none;
        border:0!important;
        background: #f4f5f8;
        background-image: none;
        flex: 1;
        padding: 5px 2.5em;
        color:#686a6f;
        cursor:pointer;
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
        background: #f4f5f8;
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
        cursor:pointer;
        pointer-events:none;
        transition:.25s all ease;
    }
    .select:hover::after {
        color: #859393;
    }
</style>
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Student Visa Assessment Form</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">

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
                    xmlhttp.open("GET","<?php echo base_url(); ?>web/martial_status?q="+str,true);
                    xmlhttp.send();
                }
            </script>

            <script>
                function show_field_children(str)
                {
                    if (str=="")
                    {
                        document.getElementById("ChildrenField").innerHTML="";
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
                            document.getElementById("ChildrenField").innerHTML=xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET","<?php echo base_url(); ?>web/children_form?q="+str,true);
                    xmlhttp.send();
                }
            </script>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>web_operation/student_assessment_request" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Full Name :</label>
                                <input name="FullName" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Phone Number :</label>
                                <input name="PhoneNumber" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Email Address :</label>
                                <input name="EmailAddress" class="form-control required email" type="email"  required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Contact Address :</label>
                                <input name="ContactAddress" class="form-control" type="text"  required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Date of birth :</label>
                                <input name="DateBirth" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">IELTS Score :</label>
                                <div class="select">
                                    <select  id="format" name="IELTSScore" required>
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
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Highest Education :</label>
                                <div class="select">
                                    <select id="format" name="HighestEducation" required>
                                        <option value="">Choose one</option>
                                        <option value="Kindergarten">Kindergarten</option>
                                        <option value="Primary">Primary</option>
                                        <option value="Secondary School">Secondary School</option>
                                        <option value="Higher Secondary School">Higher Secondary School</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Honors">Honors</option>
                                        <option value="Masters">Masters</option>
                                        <option value="PGD">PGD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Finished Year :</label>
                                <input name="FinishedYear" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Result :</label>
                                <input name="Result" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Name of the institution :</label>
                                <input name="Institution" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Apply Form :</label>
                                <div class="select">
                                    <select  class="form-control" id="format" name="WhichCountryApplyForm" required>
                                        <option value="">Choose one</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Philippine">Philippine</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Canada">Canada</option>
                                        <option value="United State">United State</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Sweden">Sweden</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="lebel_title">Select Country for student visa :</label>
                                    <div class="select">
                                        <select  id="format" class="form-control"  name="CountryStudentVisa" required>
                                            <option value="">Choose one</option>
                                            <option value="Australia">Australia</option>
                                            <option value="NewZealand">New Zealand</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Germany">Germany</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="lebel_title">Which program will be enroll ?</label>
                                    <div class="select">
                                        <select  id="format" class="form-control"  name="ProgramEenroll" required>
                                            <option value="">Choose one</option>
                                            <option value="V-Vlll">V-Vlll</option>
                                            <option value="lX-X">lX-X</option>
                                            <option value="Xl-Xll">Xl-Xll</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="Bachelor">Bachelor</option>
                                            <option value="Masters">Masters</option>
                                            <option value="PGD">PGD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="lebel_title">Which session want to apply ?</label>
                                    <div class="select">
                                        <select  id="format" class="form-control"  name="WhichSession" required>
                                            <option value="">Choose one</option>
                                            <option value="January to February">January to February</option>
                                            <option value="June to July">June to July</option>
                                            <option value="November to Decembe">November to December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Main applicant have passport :</label>
                                <div class="select">
                                    <select id="format" class="form-control"  name="MainApplicantPassport" required>
                                        <option value="">Choose one</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="lebel_title">Martial Status :</label>
                                <div class="select">
                                    <select  id="format" class="form-control"  name="MartialStatus" onChange="show_field(this.value)" required>
                                        <option value="">Choose one</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="txtHint"></div>
                    <div id="ChildrenField"></div>

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

