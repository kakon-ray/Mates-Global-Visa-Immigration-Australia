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
                        <div class="team-details__top-img"> <img src="<?php echo base_url(); ?>others/upload/common/Study-In-Sweden.jpg" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content2">
                            <p class="team-details__top-text-2">
                            <h4>Sweden Study Visa Application Process</h4>
                            •	First, choose a preferred course and university.<br>
                            •	Prepare your documents that need to apply.<br>
                            •	Prepare your IELTS.<br>
                            •	Apply online through the web portal of the University.<br>
                            •	Get an offer if you are eligible to study there.<br>
                            •	Apply for a student visa to study there.<br>
                            •	Book an air ticket and fly to your dream destination.

                            </p>
                        </div>
                    </div>
                </div>

<!--                <div class="col-xl-12 col-lg-12">-->
<!--                    <div class="team-details__top-right2">-->
<!--                        <div class="team-details__top-content">-->
<!--                            <p class="team-details__top-text-2">-->
<!--                            <hr>STEP 4 : Receipt of Payment : The university will provide you with a receipt that you need for your Visa application in Canada. While filling the visa form, you will have to show the proof of fees paid.<hr>-->
<!--                            <hr>STEP 5 : Purchase of GIC : Students must buy a Guaranteed Investment Certificate (GIC) from a participating bank like ICICI Bank, SBI Canada Bank, CIBC Bank of the amount of CAD 10200.<hr>-->
<!--                            <hr>STEP 6 : Proof of funds : At present, it is deemed to show CAD $10,000 for every year of your stay in Canada. You can show bank statements, bank draft, or a letter from a person or institution providing you with the money.<hr>-->
<!--                            <hr>STEP 7 : Apply for Visa : You can either submit application through CIC website or submit a paper application through the Canadian Embassy in your country.<hr>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


            </div>
        </div>

    </div>
</section>
<!--Team Details End-->

