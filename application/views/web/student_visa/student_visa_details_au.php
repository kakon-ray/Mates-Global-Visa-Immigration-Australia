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
                        <div class="team-details__top-img"> <img src="<?php echo base_url(); ?>others/upload/common/Study-In-Au.jpg" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content2">
                            <p class="team-details__top-text-2">
                                <h4>Australia Study Visa Application Process</h4>
                                Step 1 - Letter of Offer : If your course application is successful, you will receive a Letter of Offer from your chosen education provider. You need it for your student visa application to show the Australian Government your registration in the course. You may get credits for prior learning.
                                <br><hr>
                                Step 3 - Proof of English proficiency : Australian courses are taught in English, so you may need to provide a certificate of results from an approved English test. Only certain tests are accepted, but all are easily accessible worldwide.
                                <br><hr>
                                Step 4 - Genuine Temporary Entrant (GTE) requirement : In the online student visa application, you must write a statement in English and provide documents showing you meet the genuine temporary entrant (GTE) requirement.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content">
                            <p class="team-details__top-text-2">
                                <hr>
                                Step 5 - Proof of sufficient funds : To get a student visa, you need to show enough money for your expenses. For current prices, visit the Department of Home Affairs website.
                                <hr>
                                Step 6 - Overseas Student Health Cover (OSHC) : As an international student in Australia, you need Overseas Student Health Cover (OSHC) for your entire stay. Failure to show proof of this insurance will result in your student visa application being rejected. More info on our insurance page.
                                <hr>
                                Step 7 - Health requirement : To enter Australia, international students must be in good health. Therefore, a health examination may be necessary to fulfill the student visa health requirement. Use the My Health Declaration service to complete any required health examinations before applying for your visa.
                                <hr>
                                Step 8 - Character requirement : To study in Australia, you must meet specific character requirements. In certain cases, a police background check may be required.
                                <hr>
                                Step 9 - Apply using the Account : The Home Affairs website provides all the requirements for a student visa. Find more information on the Home Affairs website.
                                <hr>
                               Step 10 - Check travel requirements : Stay updated on the latest travel requirements by checking our Preparing for Your Travels page.
                               <hr>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--Team Details End-->

