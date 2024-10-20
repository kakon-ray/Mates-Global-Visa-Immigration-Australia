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
                        <div class="team-details__top-content2">
                            <p class="team-details__top-text-2">
                                <h4>Australia Study Visa Application Process</h4>
                                Step 1 - Letter of Offer : If your course application is successful, you will receive a Letter of Offer from your chosen education provider.<br><hr>
                            •	Read the Letter of Offer carefully before you accept it. It will include your course details, enrolment conditions and fees you will need to pay if you accept the offer. <br><hr>
                            •	Make sure that you understand all your rights, including the refund arrangements. If you don’t start or finish your course, the agreement will be used to determine if you will receive a refund on any fees paid.<br><hr>
                            •	Keep a copy of the Letter of Offer. You will need this copy so that you are aware of your rights and if you have to make a claim against your education provider.<br><hr>
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

