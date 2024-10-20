
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Global Connex | Visa & Immigrations</title>
    <!-- Stylesheets -->
    <link href="<?php echo base_url(); ?>others/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/external.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>others/js/respond.js"></script>
</head>

<body>
<div class="page-wrapper">
<!-- Preloader -->
<div class="preloader"></div>
<!-- Main Header-->
<header class="main-header header-style-three">

<?php
$SiteURLHome=site_url('web');
$SiteURLCompanyProfile=site_url('web/company_profile');
$SiteURLMissionVision=site_url('web/mission_vision');
$SiteURLDirectorMessage=site_url('web/director_message');
$SiteURLExpert=site_url('web/expert');
?>

<!-- Main box -->
<div class="main-box">
    <div class="logo-box">
        <div class="logo"><a href="<?php echo $SiteURLHome; ?>"><img src="<?php echo base_url(); ?>others/images/logo-2.png" alt="" title="Tronis"></a></div>
    </div>
    <!--Nav Box-->
    <div class="nav-outer">
        <nav class="nav main-menu">
            <ul class="navigation">
                <li><a href="<?php echo $SiteURLHome; ?>">Home</a></li>
                <li class="dropdown"><a href="#">About Us</a>
                    <ul>
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <!-- <li><a href="--><?php //echo $SiteURLDirectorMessage; ?><!--">Director Message</a></li>-->
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('web/student_visa');
                $SiteURLWorkPermitVisa=site_url('web/work_permit_visa');
                $SiteURLTrainingVisa=site_url('web/training_visa');
                $SiteURLInvestmentVisa=site_url('web/investment_visa');
                $SiteURLTouristVisa=site_url('web/tourist_visa');
                $SiteURLResumeBuilding=site_url('web/resume_building');
                $SiteURLInterviewMatching=site_url('web/interview_matching');
                $SiteURLInterviewPreparation=site_url('web/interview_preparation');
                $SiteURLInterviewCounseling=site_url('web/career_counseling');
                $SiteURLHireStaff=site_url('web/hire_staff');
                ?>

                <li class="dropdown"><a href="#">Our&nbsp;Services</a>
                    <ul>
                        <li class="dropdown"><a href="#">Visa&nbsp;Consultant</a>
                            <ul>
                                <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                                <li><a href="<?php echo $SiteURLWorkPermitVisa; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                                <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                                <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                                <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Job&nbsp;Recruitment</a>
                            <ul>
                                <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                                <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                                <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                                <li><a href="<?php echo $SiteURLInterviewCounseling; ?>">Career&nbsp;Counseling</a></li>
                                <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <?php
                $SiteURLCountryAustralia=site_url('web/country_australia');
                $SiteURLCountryNewZealand=site_url('web/country_newzealand');
                $SiteURLCountryCanada=site_url('web/country_canada');
                $SiteURLCountrySweden=site_url('web/country_sweden');
                $SiteURLCountryMalaysia=site_url('web/country_malaysia');
                ?>

                <li class="dropdown"><a href="#">Country We Serve</a>
                    <ul>
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLAustralia=site_url('web/visa_australia');
                $SiteURLNewZealand=site_url('web/visa_newzealand');
                $SiteURLCanada=site_url('web/visa_canada');
                $SiteURLSweden=site_url('web/visa_sweden');
                $SiteURLMalaysia=site_url('web/visa_malaysia');
                $SiteURLContact=site_url('web/contact');
                $SiteURLAssessment=site_url('web/assessment');
                ?>

                <li class="dropdown"><a href="#">Apply for Visa</a>
                    <ul>
                        <li><a href="<?php echo $SiteURLAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $SiteURLAssessment; ?>">Assessment</a></li>
                <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
            </ul>
        </nav>
        <!-- Main Menu End-->
    </div>
    <?php
    foreach($Contact as $ContactData)
    {
        $contact_address=$ContactData['address'];
        $contact_email=$ContactData['email'];
        $contact_phone=$ContactData['phone'];
    }
    ?>
    <div class="outer-box">
        <a href="tel:<?php echo $contact_phone; ?>" class="info-btn">
            <i class="icon fa fa-phone"></i>
            <small>Call Anytime</small><br> <?php echo $contact_phone; ?>
        </a>
        <div class="ui-btn-outer">
            <button class="ui-btn ui-btn search-btn">
                <span class="icon lnr lnr-icon-search"></span>
            </button>
        </div>
        <!-- Mobile Nav toggler -->
        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
    </div>
</div>
<!-- End Main Box -->
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    <nav class="menu-box">
        <div class="upper-box">
            <div class="nav-logo"><a href="#"><img src="<?php echo base_url(); ?>others/images/logo.png" alt="" title=""></a></div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>
        <ul class="navigation clearfix">
            <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
        <ul class="contact-list-one">
            <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                    <i class="icon lnr-icon-phone-handset"></i>
                    <span class="title">Call Now</span>
                    <a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a>
                </div>
            </li>
            <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                    <span class="icon lnr-icon-envelope1"></span>
                    <span class="title">Send Email</span>
                    <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                </div>
            </li>
            <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                    <span class="icon lnr-icon-clock"></span>
                    <span class="title">Send Email</span>
                    Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                </div>
            </li>
        </ul>
        <ul class="social-links">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </nav>
</div><!-- End Mobile Menu -->
<!-- Header Search -->
<div class="search-popup">
    <span class="search-back-drop"></span>
    <button class="close-search"><span class="fa fa-times"></span></button>
    <div class="search-inner">
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search..." required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- End Header Search -->
<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container">
        <div class="inner-container">
            <!--Logo-->
            <div class="logo">
                <a href="#" title=""><img src="<?php echo base_url(); ?>others/images/logo.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
        </div>
    </div>
</div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->
<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title2.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h4 style="color: white">New Zealand Student Visa Attachment</h4>
        </div>
    </div>
</section>


<!--Contact Details Start-->
<section class="team-contact-form">
<div class="container pb-100">
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
    <div class="sec-title text-center">
        <span class="sub-title">Applicant Identity Documents</span>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">CV / Bio Data (PDF) :</label>
                <input class="form-control" type="file" name="Cv" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Passport Full Scan Copy (JPG) :</label>
                <input class="form-control" type="file" name="Passport" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Photographs (4.5cm X 3.5cm) :</label>
                <input class="form-control" type="file" name="Photographs" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Birth Certificate :</label>
                <input class="form-control" type="file" name="BirthCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">S.S.C Certificate :</label>
                <input class="form-control" type="file" name="SSCCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">S.S.C Mark Sheet :</label>
                <input class="form-control" type="file" name="SSCMarkSheet" id="formFile" required>
            </div>
        </div
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">H.S.C Certificate :</label>
                <input class="form-control" type="file" name="HSCCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">H.S.C Mark Sheet :</label>
                <input class="form-control" type="file" name="HSCMarkSheet" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Degree Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="DegreeCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Degree Mark Sheet (If Applicable) :</label>
                <input class="form-control" type="file" name="DegreeMarkSheet" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Master or MBA Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="MBACertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Masters or MBA Mark Sheet (If Applicable) :</label>
                <input class="form-control" type="file" name="MBAMarkSheet" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Diploma Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="DiplomaCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Diploma Mark Sheet (If Applicable) :</label>
                <input class="form-control" type="file" name="DiplomaMarkSheet" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Training Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="TrainingCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Skilled Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="SkilledCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">IELTS Certificate :</label>
                <input class="form-control" type="file" name="IELTSCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Others English Language Certificate :</label>
                <input class="form-control" type="file" name="EnglishCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">MOI Letter (If Applicable) :</label>
                <input class="form-control" type="file" name="MOILetter" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Tuition fee Receipt Copy :</label>
                <input class="form-control" type="file" name="TuitionFeeReceipt" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Tuition Fee Confirmation Letter :</label>
                <input class="form-control" type="file" name="TuitionFeeConfirmationLetter" id="formFile" required>
            </div>
        </div>

    </div>







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



<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="upper-box">
            <div class="logo"><a href="#"><img src="<?php echo base_url(); ?>others/images/logo-2.png" alt=""></a></div>
            <div class="subscribe-form">
                <h5 class="title">Subscribe to Newsletter</h5>
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                        <button type="button" class="theme-btn btn-style-one"><span class="btn-title">Subscribe</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4">
                    <div class="footer-widget about-widget">
                        <h5 class="widget-title">Contact</h5>
                        <div class="text"><?php echo $contact_address; ?></div>
                        <ul class="contact-info">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a><br></li>
                            <li><i class="fa fa-phone-square"></i> <a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a><br>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-xl-6 col-lg-8 col-md-12 mb-0">
                    <div class="footer-widget links-widget">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Explore</h5>
                                <ul class="user-links">
                                    <?php
                                    $SiteURLCompanyProfilePdf=base_url('others/upload/profile/GlobalConnexProfile.pdf');
                                    ?>
                                    <li><a href="<?php echo $SiteURLCompanyProfilePdf; ?>" target="_blank">Company Profile</a></li>
                                    <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission & Vision</a></li>
                                    <!--                                    <li><a href="--><?php //echo $SiteURLDirectorMessage; ?><!--">Message</a></li>-->
                                    <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                                    <li><a href="<?php echo $SiteURLAssessment; ?>">Assessment</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Visa</h5>
                                <ul class="user-links">
                                    <li><a href="<?php echo $SiteURLStudentVisa; ?>">Students Visa</a></li>
                                    <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Business Visa</a></li>
                                    <li><a href="<?php echo $SiteURLTouristVisa; ?>">Travel Visa</a></li>
                                    <li><a href="<?php echo $SiteURLWorkPermitVisa; ?>">Work Visa</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <h5 class="widget-title">Country&nbsp;Serve</h5>
                                <ul class="user-links">
                                    <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                                    <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                                    <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                                    <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Column-->
                <div class="footer-column col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget gallery-widget">
                        <h5 class="widget-title">Gallery</h5>
                        <div class="widget-content">
                            <div class="outer clearfix">
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-1.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-2.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-3.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-4.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-5.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="<?php echo base_url(); ?>others/images/resource/project-thumb-6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">&copy; Copyright 2023 by <a href="#">Global Connex</a>
                </div>
                <ul class="social-icon-two">
                    <li><a href="https://www.facebook.com/globalconnex" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://wa.me/+8801966601743" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->
</div>
<!-- End Page Wrapper -->
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="<?php echo base_url(); ?>others/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>others/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>others/js/wow.js"></script>
<script src="<?php echo base_url(); ?>others/js/appear.js"></script>
<script src="<?php echo base_url(); ?>others/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/owl.js"></script>
<script src="<?php echo base_url(); ?>others/js/script.js"></script>
</body>
</html>