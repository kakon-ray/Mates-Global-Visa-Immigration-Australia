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
                            <a href="https://matesglobal.com/web/student_assessment" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
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
                            <a href="https://matesglobal.com/web/student_assessment" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
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
                            <a href="https://matesglobal.com/web/student_assessment" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                let's connect with Global Connex and build a brighter future together.
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
