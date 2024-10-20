<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Country We Serve New Zealand</h1>
        </div>
    </div>
</section>
<?php
foreach($ServeNewzealand as $ServeNewzealandData)
{
    $image=$ServeNewzealandData['image'];
    $text=$ServeNewzealandData['text'];

    $string2 = substr($text, 0, 968);
    $string3 = substr($text, 962, 25000);
}
?>
<!--Team Details Start-->
<section class="team-details">
    <div class="container pb-100">
        <div class="team-details__top pb-70">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-left">
                        <div class="team-details__top-img"> <img src="<?php echo base_url(); ?>others/upload/common/<?php echo $image; ?>" width="600" height="600" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content2">
                            <p class="team-details__top-text-2">
                                <?php echo $string2; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="courses-details__content">
                        <!--<img src="--><?php //echo base_url(); ?><!--others/images/resource/course-details.jpg" alt="" />-->
                        <p class="team-details__top-text-2">
                            <?php echo $string3; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Details End-->

