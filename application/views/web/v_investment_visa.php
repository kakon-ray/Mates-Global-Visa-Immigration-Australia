<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Investment&nbsp;Visa</h1>
        </div>
    </div>
</section>
<?php
foreach($InvestmentVisa as $InvestmentVisaData)
{
    $image=$InvestmentVisaData['image'];
    $title=$InvestmentVisaData['title'];
    $text=$InvestmentVisaData['text'];
    $string2 = substr($text, 0, 540);
    $string3 = substr($text, 540, 1500);
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