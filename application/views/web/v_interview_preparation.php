<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Interview&nbsp;Preparation</h1>
        </div>
    </div>
</section>
<?php
foreach($InterviewPreparation as $InterviewPreparationData)
{
    $image=$InterviewPreparationData['image'];
    $title=$InterviewPreparationData['title'];
    $text=$InterviewPreparationData['text'];
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
                                <?php echo $text; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Details End-->
