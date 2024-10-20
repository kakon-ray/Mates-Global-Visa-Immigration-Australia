<?php
foreach($MissionVision as $MissionVisionData)
{
    $image=$MissionVisionData['image'];
    $title=$MissionVisionData['title'];
    $details=$MissionVisionData['details'];
}
?>
<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Mission & Vision</h1>
        </div>
    </div>
</section>
<!--Start courses Details-->
<section class="course-details">
    <div class="container">
        <div class="row flex-xl-row-reverse">
            <!--Start courses Details Content-->
            <div class="col-xl-12 col-lg-12">
                <div class="courses-details__content">
                    <!--                    <img src="--><?php //echo base_url(); ?><!--others/images/resource/course-details.jpg" alt="" />-->
                    <h2 class="mt-4"><?php echo $title; ?></h2>
                    <p><?php echo $details; ?></p>
                </div>
            </div>
            <!--End courses Details Content-->
        </div>
    </div>
</section>
<!--End courses Details-->


