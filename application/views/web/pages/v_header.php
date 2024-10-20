<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mates Global | Visa & Immigrations</title>
    <!-- Stylesheets -->
    <link href="<?php echo base_url(); ?>others/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>others/js/respond.js"></script>
    <meta name="description" content="At Global Conex Pty Ltd, we are a leading immigration consultancy firm that specializes in helping students and professionals obtain student and work visas for Australia, Canada, New Zealand, Sweden, and Malaysia.">
    <meta name="keywords" content="Scholarship, Financial Aid, Educational Grant, International Student Scholarship, First-Generation College Student Scholarship, Healthcare Scholarship, Engineering Scholarship, Environmental Science Scholarship, Work Visa, Student Visa, Business Visa, Immigration Visa, Visa Requirements, Visa Application Form, Visa Interview, Visa Processing Time, Visa Fees, Immigration Process, Green Card, Permanent Residency, Naturalization, Passport Requirements, Visa Supporting Documents, Proof of Funds, Proof of Accommodation, Visa Policy, Visa Waiver Program, Visa-Free Entry, Visa on Arrival, Immigration Law, Visa Compliance, Visa Regulations, Employment Support, Job Placement Services, Career Placement Assistance, Career Counseling, Professional Development, Career Guidance">
    <meta name="author" content="Global Conex Pty Ltd">
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
        <div class="logo"><a href="<?php echo $SiteURLHome; ?>"><img src="<?php echo base_url(); ?>others/images/logo3.png" alt="" title="Tronis"></a></div>
    </div>
    <!--Nav Box-->
    <div class="nav-outer">
        <nav class="nav main-menu">
            <ul class="navigation">
                <!--<li class="current"><a href="--><?php //echo $SiteURLHome; ?><!--">Home</a></li>-->
                <li><a href="<?php echo $SiteURLHome; ?>">Home</a></li>
                <li class="dropdown"><a href="#">About Us</a>
                    <ul>
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <!--<li><a href="--><?php //echo $SiteURLDirectorMessage; ?><!--">Director Message</a></li>-->
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
                <span class="icon lnr lnr-icon-user"></span>
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
            <div class="nav-logo"><a href="#"><img src="<?php echo base_url(); ?>others/images/logo3.png" alt="" title=""></a></div>
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

<style>
    /***********Login************/
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 500px;
        padding: 0% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }
    .form .register-form {
        display: none;
    }
    .container {
        position: relative;
        z-index: 1;
        /*max-width: 300px;*/
        margin: 0 auto;
    }
    .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
    }
    .container .info {
        margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa {
        color: #EF3B3A;
    }
</style>
<!-- Header Search -->
<div class="search-popup">
    <span class="search-back-drop"></span>
    <button class="close-search"><span class="fa fa-times"></span></button>
    <div class="search-inner">
        <div class="login-page">
            <div class="form">
                <form class="register-form" action="<?php echo base_url(); ?>web/sign_up" method="post" enctype="multipart/form-data">
                    <div class="sec-title">
                        <span class="sub-title">sign up</span>
                    </div>
                    <input type="text" name="username" placeholder="name" required/>
                    <input type="password" name="userpassword" placeholder="password" required/>
                    <input type="email" name="useremail" placeholder="email address" required/>
                    <button type="submit">create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                <form class="login-form" action="<?php echo base_url(); ?>user_panel" method="post" enctype="multipart/form-data">
                    <div class="sec-title">
                        <span class="sub-title">Login</span>
                    </div>
                    <input type="text" name="UserName" placeholder="username / email" required/>
                    <input type="password" name="UserPassword" placeholder="password" required/>
                    <button type="submit">login</button>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Header Search -->
<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container">
        <div class="inner-container">
            <!--Logo-->
            <div class="logo">
                <a href="#" title=""><img src="<?php echo base_url(); ?>others/images/logo3.png" alt="" title=""></a>
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