
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
                        <div class="team-details__top-img"> <img src="<?php echo base_url(); ?>others/upload/common/Study-In-New-Zealand.jpg" width="500px" height="500px" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content2">
                            <p class="team-details__top-text-2">
                            <h4>New Zealand Study Visa Application Process</h4>
                            1. Accept the offer letter and pay fees.<hr>
                            2. Complete a medical exam with an approved doctor.<hr>
                            3. Obtain a Police Clearance Certificate.<hr>
                            4. Apply online or by post and keep the payment receipt.<hr>
                            5. Wait for visa decision, apply three months in advance.

                            </p>
                        </div>
                    </div>
                </div>

<!--                <div class="col-xl-12 col-lg-12">-->
<!--                    <div class="team-details__top-right">-->
<!--                        <div class="team-details__top-content">-->
<!--                            <p class="team-details__top-text-2">-->
<!--                                Step 5 - Proof of sufficient funds : To get a student visa, you need to show enough money for your expenses. For current prices, visit the Department of Home Affairs website.-->
<!--                            <hr>-->
<!--                            Step 6 - Overseas Student Health Cover (OSHC) : As an international student in Australia, you need Overseas Student Health Cover (OSHC) for your entire stay. Failure to show proof of this insurance will result in your student visa application being rejected. More info on our insurance page.-->
<!--                            <hr>-->
<!--                            Step 7 - Health requirement : To enter Australia, international students must be in good health. Therefore, a health examination may be necessary to fulfill the student visa health requirement. Use the My Health Declaration service to complete any required health examinations before applying for your visa.-->
<!--                            <hr>-->
<!--                            Step 8 - Character requirement : To study in Australia, you must meet specific character requirements. In certain cases, a police background check may be required.-->
<!--                            <hr>-->
<!--                            Step 9 - Apply using the Account : The Home Affairs website provides all the requirements for a student visa. Find more information on the Home Affairs website.-->
<!--                            <hr>-->
<!--                            Step 10 - Check travel requirements : Stay updated on the latest travel requirements by checking our Preparing for Your Travels page.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
        </div>

    </div>
</section>
<!--Team Details End-->




