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
        <div class="logo"><a href="<?php echo $SiteURLHome; ?>"><img src="<?php echo base_url(); ?>others/images/logo-2.png" alt="" title="Tronis"></a></div>
    </div>
    <!--Nav Box-->
    <div class="nav-outer">
        <nav class="nav main-menu">
            <ul class="navigation">
                <li class="current"><a href="<?php echo $SiteURLHome; ?>">Home</a></li>
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


<!-- Banner Section Two-->
<section class="banner-section-two">
    <div class="banner-carousel owl-carousel owl-theme">
        <?php
        foreach($Slider as $SliderData)
        {
            $image=$SliderData['image'];
            $title=$SliderData['title'];
            $big_text=$SliderData['big_text'];
            $small_text=$SliderData['small_text'];
            ?>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="bg-image" style="background-image: url(<?php echo base_url(); ?>others/upload/cms/<?php echo $image; ?>);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span class="sub-title animate-1"><?php echo $title; ?></span>
                        <div class="inner">
                            <h1 class="title animate-2"><?php echo $big_text; ?></h1>
                            <h3 class="animate-3"><?php echo $small_text; ?></h3>
                            <!--<div class="btn-box animate-4">-->
                            <!--<a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
        <?php } ?>
    </div>
</section>
<!--END Banner Section Two -->

<!-- Features Section Two -->
<!-- Features Section -->
<section class="features-section">
    <div class="anim-icons">
        <span class="icon icon-object-1"></span>
    </div>
    <div class="auto-container">
        <div class="outer-box">
            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box ">
                        <div class="icon-box">
                            <i class="icon flaticon-life-insurance"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="title">Student Visa</h5>
                            <a href="<?php echo $SiteURLAssessment; ?>" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
                        </div>
                    </div>
                </div>
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box ">
                        <div class="icon-box">
                            <i class="icon flaticon-passport-12"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="title">Work Visa</h5>
                            <a href="<?php echo $SiteURLAssessment; ?>" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
                        </div>
                    </div>
                </div>
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box ">
                        <div class="icon-box">
                            <i class="icon flaticon-group"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="title">Visitor Visa</h5>
                            <a href="<?php echo $SiteURLAssessment; ?>" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                Top Rated By Customers & Immigration Firms With 100% Success Rate.
            </div>
        </div>
    </div>
</section>
<!-- End Features Section-->

<!-- End Features Section-->
<!-- About Section Five -->
<section class="about-section-five">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon icon-object-3"></span>
        </div>
        <?php
        foreach($AboutCompany as $AboutCompanyData)
        {
            $about_image=$AboutCompanyData['image'];
            $title=$AboutCompanyData['title'];
            $details=$AboutCompanyData['details'];
            $link=$AboutCompanyData['link'];
            $phone=$AboutCompanyData['phone'];
        }
        ?>
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">About our company</span>
                        <h2><?php echo $title; ?></h2>
                        <div class="text">
                            <?php echo $details; ?>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="tel:<?php echo $phone; ?>" class="info-btn">
                            <i class="icon fa fa-phone"></i>
                            <small>Call Anytime</small>  <?php echo $phone; ?>
                        </a>
                        <a href="<?php echo $SiteURLContact; ?>" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
                    </div>
                </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image overlay-anim wow fadeInUp"><img src="<?php echo base_url(); ?>others/upload/about/<?php echo $about_image; ?>" alt=""></figure>
                    <!--                    <figure class="stemp bounce-y"><img src="--><?php //echo base_url(); ?><!--others/images/resource/stemp-3.png" alt=""></figure>-->
                    <div class="experience">
                        <div class="inner">
                            <i class="icon flaticon-increase"></i>
                            <div class="text"><strong>36+</strong> Work Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Emd About Section Five -->
<!-- Countries Section Three -->
<section class="countries-section-three">
    <div class="anim-icons">
        <span class="icon icon-object-1"></span>
    </div>
    <div class="outer-box pt-0">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Countries we offer</span>
                <h2>Countries We Support <br>for Immigration.</h2>
            </div>
            <!--  Countries Carousel -->
            <div class="row">

                <?php
                foreach($CountryOffer as $CountryOfferData)
                {
                    $country_image=$CountryOfferData['country_image'];
                    $country_name=$CountryOfferData['country_name'];
                    $details=$CountryOfferData['details'];
                    $link_details=$CountryOfferData['link'];
                    ?>
                    <!-- Country Block Three-->
                    <div class="country-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="flag"><img src="<?php echo base_url(); ?>others/upload/country/<?php echo $country_image; ?>" alt=""></div>
                                <h5 class="title"><a href="<?php echo $link_details; ?>"><?php echo $country_name; ?></a></h5>
                                <div class="text"><?php echo $details; ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- Country Block Three-->
                <?php } ?>
            </div>
            <!--            <div class="bottom-text">Top Rated By Customers & Immigration Firms With 100% Success Rate.</div>-->
        </div>
    </div>
</section>
<!--End Countries Section -->
<!-- Call to Action Two -->
<?php
foreach($Video as $VideoData)
{
    $video_image=$VideoData['image'];
    $video_text=$VideoData['text'];
    $video_explore_link=$VideoData['explore_link'];
    $video_link=$VideoData['video_link'];
}
?>
<section class="call-to-action-two pull-up" style="background-image: url(<?php echo base_url(); ?>others/upload/home-video/<?php echo $video_image; ?>)">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="title-box">
                    <h2 class="title"><?php echo $video_text; ?></h2>
                    <a href="<?php echo $video_explore_link; ?>" class="theme-btn btn-style-one light"><span class="btn-title">Explore now</span></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="video-box">
                    <div class="inner">
                        <a href="<?php echo $video_link; ?>" class="play-now-two alternate lightbox-image"><i class="icon fa fa-play"></i></a>
                        <img src="<?php echo base_url(); ?>others/images/icons/icon-arrow.png" alt="" class="arrow">
                        <h4 class="title style-font">Play Video</h4>
                        <span class="sub-title">Watch  Videos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call to Action -->

<!-- Services Section Two -->
<section class="services-section-two">
    <div class="anim-icons">
        <span class="icon icon-object-3"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">What do we offer</span>
            <h2>Outstanding Immigration <br>Visa Services.</h2>
        </div>
        <div class="row">
            <?php
            foreach($Immigration as $ImmigrationData)
            {
                $iimmigration_image=$ImmigrationData['image'];
                $iimmigration_title=$ImmigrationData['title'];
                $iimmigration_text=$ImmigrationData['text'];

                ?>
                <!-- Service Block Two  -->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="<?php echo base_url(); ?>others/upload/home-service/<?php echo $iimmigration_image; ?>" alt=""></a></figure>
                            <div class="icon-box"><i class="icon fa fa-graduation-cap"></i></div>
                            <div class="content-box">
                                <h5 class="title"><a href="<?php echo $SiteURLAustralia; ?>"><?php echo $iimmigration_title; ?></a></h5>
                                <div class="text"><?php echo $iimmigration_text; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Block Two  -->
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Services Section-->

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
                                    <!--<li><a href="--><?php //echo $SiteURLDirectorMessage; ?><!--">Message</a></li>-->
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
                    <!--                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                    <li><a href="https://www.facebook.com/globalconnex" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://wa.me/+8801966601743" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://join.skype.com/invite/yD7vhkI0pq2f" target="_blank"><i class="fab fa-skype"></i></a></li>
                    <!--                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--End Main Footer -->
</div><!-- End Page Wrapper -->
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