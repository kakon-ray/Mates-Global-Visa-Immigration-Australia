<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Global Connex | Visa & Immigrations</title>
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
                        <!--                            <li><a href="--><?php //echo $SiteURLDirectorMessage; ?><!--">Director Message</a></li>-->
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

<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Student&nbsp;Visa</h1>
        </div>
    </div>
</section>


<?php
foreach($StudentVisa as $StudentVisaData)
{
    $image=$StudentVisaData['image'];
    $title=$StudentVisaData['title'];
    $text=$StudentVisaData['text'];

    $string2 = substr($text, 0, 510);
    $string3 = substr($text, 510, 1500);
}

?>
<!--Team Details Start-->
<section class="team-details">
    <div class="container pb-100">
        <div class="team-details__top pb-70">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-left">
                        <div class="team-details__top-img"> <img src="<?php echo base_url(); ?>others/upload/common/<?php echo $image; ?>" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content">
                            <p class="team-details__top-text-1"><?php echo $title; ?></p>
                            <p class="team-details__top-text-2">
                                <?php echo $string2; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content">
                            <p class="team-details__top-text-2">
                                <?php echo $string3; ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--Team Details End-->

<!--Contact Details Start-->
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Contact With Us Now</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="#" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                        <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
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