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
                        <div class="team-details__top-img"> <img src="<?php echo base_url(); ?>others/upload/common/Study-In-Canada.jpg" alt="">
                            <div class="team-details__big-text"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content2">
                            <p class="team-details__top-text-2">
                            <h4>Canada Study Visa Application Process</h4>
                            STEP 1 : Apply to University : The first step in the Canadian Student Visa process is to apply to a university.<br><hr>
                            STEP 2 : Appear for IELTS : It is imperative that you appear for IELTS (score 6 to 6.5) for your Canadian student visa. No other test is valid for the visa application.<br><hr>
                            STEP 3 : Get University Admits : The Importance of Paying the Initial Tuition Fee for Confirming Your University Admission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="team-details__top-right2">
                        <div class="team-details__top-content">
                            <p class="team-details__top-text-2">
                                <hr>STEP 4 : Receipt of Payment : The university will provide you with a receipt that you need for your Visa application in Canada. While filling the visa form, you will have to show the proof of fees paid.<hr>
                                <hr>STEP 5 : Purchase of GIC : Students must buy a Guaranteed Investment Certificate (GIC) from a participating bank like ICICI Bank, SBI Canada Bank, CIBC Bank of the amount of CAD 10200.<hr>
                                <hr>STEP 6 : Proof of funds : At present, it is deemed to show CAD $10,000 for every year of your stay in Canada. You can show bank statements, bank draft, or a letter from a person or institution providing you with the money.<hr>
                                <hr>STEP 7 : Apply for Visa : You can either submit application through CIC website or submit a paper application through the Canadian Embassy in your country.<hr>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Details End-->


