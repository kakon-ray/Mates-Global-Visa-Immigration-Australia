<style>
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 0 !important;
        background: #ffffff;
        background-image: none;
        flex: 1;
        padding: 5px 2.5em;
        color: #686a6f;
        cursor: pointer;
        font-size: 0.9rem;
        font-family: 'Open Sans', sans-serif;
    }

    select::-ms-expand {
        display: none;
    }

    .select {
        position: relative;
        display: flex;
        width: 100%;
        height: 4em;
        line-height: 4;
        background: #ffffff;
        overflow: hidden;
        border-radius: .25em;
    }

    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #e9e9e9;
        cursor: pointer;
        pointer-events: none;
        transition: .25s all ease;
    }

    .select:hover::after {
        color: #859393;
    }

    /* === HEADING STYLE #3 === */
    .three h1 {
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1.5em;
        padding-bottom: 15px;
        position: relative;
    }

    .three h1:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 5px;
        width: 25%;
        background-color: #111;
    }

    .three h1:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        height: 1px;
        width: 100%;
        max-width: 100%;
        background-color: #333;
    }

    .two h1 {
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1.5em;
        padding-bottom: 15px;
        position: relative;
    }



    .two h1:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        height: 1px;
        width: 100%;
        max-width: 100%;
        background-color: #333;
    }

    #user-address-textarea {
        background-color: #fff;
        height: 60px;
        margin-bottom: 10px;
    }

    .lebel_title {
        line-height: 13px;
    }
</style>
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Visitor Visa Application Form Subclass 400</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>web_operation/student_assessment_new_submit" method="post">

                    <!-------------------General Details Start-------------------->
                    <div class="three">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp;General Details :</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">1. Indicate if you are applying outside Australia or in Australia:</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Option 1 -->
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" checked id="outsideAustralia">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="outsideAustralia">
                                                Outside Australia
                                            </label>
                                            <span class="text-muted small">Go to Question 2</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <!-- Option 2 -->
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" id="inAustralia">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="inAustralia">
                                                In Australia
                                            </label>
                                            <span class="text-muted small">Go to Question 5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>



                        <!------------------- Input Field 2 -------------------->
                        <div class="two pt-5 outsideAustraliaDiv">
                            <h1>Applicants outside Australia</h1>
                        </div>

                        <div class="col-sm-4 mt-2 outsideAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">2. When do you wish to visit Australia?</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="startDate" class="form-control" type="date" required>
                                </div>
                                <div class="col-sm-6">
                                    <input name="endDate" class="form-control" type="date" required>
                                </div>
                            </div>
                        </div>

                        <!------------------- Input Field 3 -------------------->
                        <div class="col-sm-8 mt-2 outsideAustraliaDiv">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">3. How long do you wish to stay in Australia?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" id="Upto3months">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Upto3months">
                                                Up to 3 months
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" id="Upto6months">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Upto6months">
                                                Up to 6 months
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" id="Upto12months">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Upto12months">
                                                Up to 12 months
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!------------------- Input Field 4 -------------------->
                        <div class="col-sm-12 mt-2 outsideAustraliaDiv">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">4. Do you intend to enter Australia on more than one occasion?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="occasion" id="occasion_No" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="occasion_No">
                                                No
                                            </label>
                                            <span class="text-muted"> Go to Question 7</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="occasion" id="occasion_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="occasion_Yes">
                                                Yes
                                            </label>
                                            <span class="text-muted">Give details</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 mt-2 occasionDIv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details:</label>
                                <input name="occasionDetails" class="form-control" type="text">
                            </div>
                        </div>

                        <!------------------- Input Field 5 -------------------->
                        <div class="two pt-5 insideAustraliaDiv">
                            <h1>Applicants in Australia</h1>
                        </div>
                        <div class="col-sm-4 mt-2 insideAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">5. Specify the date you wish to extend your stay to:</label>
                                <input name="startDate" class="form-control" type="date" required>
                            </div>
                        </div>

                        <!------------------- Input Field 5 -------------------->
                        <div class="col-sm-8 mt-2 insideAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">6. Provide detailed reasons for requesting this further stay:</label>
                                <input name="furtherStay" class="form-control" type="text" required>
                            </div>

                        </div>
                    </div>

                    <!------------------- Part-A Your details -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details"> &nbsp; Part A – Your details :</h1>
                    </div>

                    <div class="two pt-5">
                        <h1>7. Give the following details exactly as they appear in your passport Make sure your passport is valid for the period of stay you are applying for.</h1>
                    </div>

                    <div class="row">

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Family Name :</label>
                                <input name="FamilyName" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <!-- Question Title -->
                            <div class="row">
                                <label class="lebel_title">Sex</label>
                                <!-- Option 1 -->
                                <div class="col-sm-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" id="Male">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Male">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Option 2 -->
                                <div class="col-sm-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="location" id="Female">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Date of birth :</label>
                                <input name="dateOfBirth" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Passport number :</label>
                                <input name="PassportNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Country of passport :</label>
                                <input name="Countryofpassport" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Nationality of passport holder :</label>
                                <input name="NationalityofpassportHolder " class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Date of issue :</label>
                                <input name="DateofIssue" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Date of expiry :</label>
                                <input name="DateofExpiry" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Place of issue :</label>
                                <input name="PlaceofIssue" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Issuing Authority :</label>
                                <input name="Issuing Authority" class="form-control" type="text" required>
                            </div>
                        </div>

                    </div>

                    <!------------------- Part-A Place of birth -------------------->
                    <div class="two pt-5">
                        <h1>8.&nbsp; Place of birth</h1>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Town/city :</label>
                                <input name="Town/city" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">State/province :</label>
                                <input name="State/province" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Country :</label>
                                <input name="Country" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">9. Relationship status:</label>
                            </div>

                            <!-- Option 1 -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelationshipStatus" id="Married">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Married">
                                                Married
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-1" type="radio" name="RelationshipStatus" id="Separated">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Separated">
                                                Separated
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelationshipStatus" id="Engaged">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Engaged">
                                                Engaged
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelationshipStatus" id="Divorced">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Divorced">
                                                Divorced
                                            </label>
                                        </div>
                                    </div>.
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelationshipStatus" id="Defacto">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Defacto">
                                                Defacto
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelationshipStatus" id="Widowed">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Widowed">
                                                Widowed
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelationshipStatus" id="NeverMarried">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="NeverMarried">
                                                Never Married
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">10. Are you or have you been known by any other name?</label>
                            </div>
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="KnownAnyOtherName" id="KnownAnyOtherName_No">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="KnownAnyOtherName_No">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="KnownAnyOtherName" id="KnownAnyOtherName_Yes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="KnownAnyOtherName_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">11. Do you currently hold an Australian visa? </label>
                            </div>

                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="currentlyHoldAustralian" id="currentlyHoldAustralian_No">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="currentlyHoldAustralian_No">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="currentlyHoldAustralian" id="currentlyHoldAustralian_Yes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="currentlyHoldAustralian_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">12. Have you applied for a Parent (subclass 103) visa? </label>
                            </div>

                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="appliedSubclass103" id="appliedSubclass103_No">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="appliedSubclass103_No">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="appliedSubclass103" id="appliedSubclass103_Yes" checked>
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="appliedSubclass103_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2 appliedSubclass103Div">
                            <div class="mb-2">
                                <label class="lebel_title">Please provide your queue date :</label>
                                <input name="QueueDate" class="form-control" type="date" required>
                            </div>
                        </div>


                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">13. Do you currently hold, or have you applied for, an APEC Business Travel
                                    Card (ABTC)?</label>
                            </div>
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="APECBusinessTravel" id="APECBusinessTravel_No">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="APECBusinessTravel_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="APECBusinessTravel" id="APECBusinessTravel_Yes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="APECBusinessTravel_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">14. Are you a citizen of any other country?</label>
                            </div>
                            <div class="row">
                                <div class="mb-3 p-3 border rounded bg-light">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="CitizenOtherCountry" id="CitizenOtherCountry_No">
                                        <label class="lebel_title flex-grow-1 fw-semibold" for="CitizenOtherCountry_No">
                                            No
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3 p-3 border rounded bg-light">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="CitizenOtherCountry" id="CitizenOtherCountry_Yes" checked>
                                        <label class="lebel_title flex-grow-1 fw-semibold" for="CitizenOtherCountry_Yes">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6 mt-2 CitizenOtherCountryDiv">
                            <div class="mb-2">
                                <label class="lebel_title">List countries :</label>
                                <input name="CitizenOtherListCountries" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">15. Do you have other current passports?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="OtherCurrentPassports" id="OtherCurrentPassports_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="OtherCurrentPassports_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="OtherCurrentPassports" id="OtherCurrentPassports_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="OtherCurrentPassports_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-sm-6 mt-2 OtherCurrentPassportsDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Passport number :</label>
                                <input name="OtherCurrentPassportNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2 OtherCurrentPassportsDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Country of passport :</label>
                                <input name="OtherCurrentPassportCountry" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div>
                                <label class="lebel_title">16. Do you hold an identity card or identity number issued to you by your
                                    government?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="HoldIdentityCard" id="HoldIdentityCard_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="HoldIdentityCard_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="HoldIdentityCard" id="HoldIdentityCard_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="HoldIdentityCard_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="col-sm-6 mt-2 HoldIdentityCardDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Family name :</label>
                                <input name="FamilyName" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2 HoldIdentityCardDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Given names :</label>
                                <input name="GivenNames" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2 HoldIdentityCardDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Type of document :</label>
                                <input name="TypeDocument" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2 HoldIdentityCardDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Identity Number :</label>
                                <input name="IdentityNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2 HoldIdentityCardDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Country Issue :</label>
                                <input name="CountryIssue" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">17. In what country are you currently located? </label>
                                <input name="CurrentlyLocated" class="form-control" type="text" required>
                            </div>
                        </div>

                    </div>

                    <!-- start 18 number section -->

                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="row">
                                <label class="lebel_title">18. What is your legal status in your current location?</label>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="currentLocation" id="Citizen">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Citizen">
                                                Citizen
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-1" type="radio" name="currentLocation" id="Permanentresident">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Permanentresident">
                                                Permanent resident
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="currentLocation" id="Visitor">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Visitor">
                                                Visitor
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="currentLocation" id="Student">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Student">
                                                Student
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="currentLocation" id="WorkVisa">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="WorkVisa">
                                                Work Visa
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="currentLocation" id="Nolegalstatus">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Nolegalstatus">
                                                No legal status
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="currentLocation" id="Other">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Other">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 currentLocationDiv">
                                    <div class="mb-2">
                                        <label class="lebel_title">Give details</label>
                                        <input name="CurrentlyLocated" class="form-control" type="text" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- start 19 number section -->
                    <div class="col-sm-12 mt-2">
                        <div class="mb-2">
                            <label class="lebel_title">19. What is the purpose of your stay in your current location and what is
                                your visa status? </label>
                            <input name="VisaStatus" class="form-control" type="text" required>
                        </div>
                    </div>

                    <!-- start 20 number section -->

                    <div class="row">
                        <div class="two pt-5">
                            <h1>20. Your current residential address?</h1>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Address:</label>
                                <input name="ResidentialAddress" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Post Code: </label>
                                <input name="ResidentialPostCode" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Country: </label>
                                <input name="ResidentialCounty" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>

                    <!-- start 21 number section -->

                    <div class="row">
                        <div class="two pt-5">
                            <h1>21. Address for correspondence: </h1>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Correspondence Address: </label>
                                <input name="AddressCorrespondence" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Postal Code: </label>
                                <input name="CorrespondencePostalCode" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Country: </label>
                                <input name="CorrespondenceCountry" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>

                    <!-- start 22 number section -->
                    <div class="row">
                        <div class="two pt-5">
                            <h1>22. &nbsp; Contact telephone numbers</h1>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Home: </label>
                                <input name="TelephoneNumberHome" class="form-control" type="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Office: </label>
                                <input name="TelephoneNumberOffice" class="form-control" type="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Mobile/cell: </label>
                                <input name="MobileCall" class="form-control" type="phone" required>
                            </div>
                        </div>
                    </div>

                    <!-- Start 23  Number Section -->
                    <div class="row">
                        <div class="col-sm-4 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">23. Communicating with you by email and/or fax?</label>
                            </div>
                            <div class="row">

                                <div>
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CommunicatingEmail" id="CommunicatingEmail_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CommunicatingEmail_No">
                                                No
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CommunicatingEmail" id="CommunicatingEmail_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CommunicatingEmail_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4 mt-2 CommunicatingEmailDiv">
                            <div class="mb-2">
                                <label class="lebel_title mb-2">Email address: </label>
                                <input name="EmailAddress" class="form-control" type="email" required>
                            </div>
                        </div>

                        <div class="col-sm-4 mt-2 CommunicatingEmailDiv">
                            <div class="my-2">
                                <label class="lebel_title">Fax number: </label>
                                <input name="FaxNumber" class="form-control" type="fax" required>
                            </div>
                        </div>
                    </div>

                    <!------------------- Part-B Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part B – Family travelling to Australia with you</h1>
                    </div>
                    <!-- Start 24 Number Section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <label class="lebel_title">24. Are you travelling to, or are you currently in, Australia with any family members?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="AustraliaWithAnyFamilyMember" id="AustraliaWithAnyFamilyMember_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="AustraliaWithAnyFamilyMember_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="AustraliaWithAnyFamilyMember" id="AustraliaWithAnyFamilyMember_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="AustraliaWithAnyFamilyMember_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6 AustraliaWithAnyFamilyMemberDIv">
                            <div class="mb-2">
                                <label class="lebel_title">Full Name: </label>
                                <input name="FullName" class="form-control" type="fax" required>
                            </div>
                        </div>

                        <div class="col-sm-6 AustraliaWithAnyFamilyMemberDIv">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to You: </label>
                                <input name="RelationshipYou" class="form-control" type="fax" required>
                            </div>
                        </div>

                        <div class="col-sm-6 AustraliaWithAnyFamilyMemberDIv">
                            <div class="mb-2">
                                <label class="lebel_title">Name of sponsor (if applicable): </label>
                                <input name="NameofSponsor" class="form-control" type="fax" required>
                            </div>
                        </div>

                    </div>


                    <!------------------- Part-C Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part C – Family NOT travelling to Australia with you </h1>
                    </div>
                    <!-- Start 25 Number Section -->
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="">
                                <label class="lebel_title">25. Do you have a partner, any children, or fiancé who will NOT be travelling, or has NOT travelled, to Australia with you?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PartnerChildren" id="PartnerChildren_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PartnerChildren_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PartnerChildren" id="PartnerChildren_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PartnerChildren_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4 PartnerChildrenDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Full Name: </label>
                                <input name="PartnerChildrenFullName" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-4 PartnerChildrenDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Date Of Birth: </label>
                                <input name="PartnerChildrenRelationshipYou" class="form-control" type="date">
                            </div>
                        </div>
                        <div class="col-sm-4 PartnerChildrenDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to You: </label>
                                <input name="PartnerChildrenRelationshipYou" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-4 PartnerChildrenDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Their address while you are in Australia: </label>
                                <input name="NameofSponsor" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!------------------- Part-D Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part D – Details of your visit to Australia </h1>
                    </div>


                    <!-- Start 26 Number Section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <label class="lebel_title">26. Is it likely you will be travelling from Australia to any other country?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="TravellingAustraliaOtherCountry" id="TravellingAustraliaOtherCountry_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="TravellingAustraliaOtherCountry_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="TravellingAustraliaOtherCountry" id="TravellingAustraliaOtherCountry_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="TravellingAustraliaOtherCountry_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6 TravellingAustraliaOtherCountryDiv">
                            <div class="mb-2">
                                <label class="lebel_title">itinerary details: </label>
                                <input name="ItineraryDetails" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>


                    <!-- Start 27 Number Section -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="">
                                <label class="lebel_title">27. Do you have any relatives in Australia?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelativesAustralia" id="RelativesAustralia_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="RelativesAustralia_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="RelativesAustralia" id="RelativesAustralia_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="RelativesAustralia_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-4 RelativesAustralia">
                            <div class="mb-2">
                                <label class="lebel_title">Full name: </label>
                                <input name="RelativesAustraliaFullName" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-4 RelativesAustralia">
                            <div class="mb-2">
                                <label class="lebel_title">Date of birth: </label>
                                <input name="RelativesAustraliaDateBirth" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-4 RelativesAustralia">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to you: </label>
                                <input name="RelativesAustraliaRelationship" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 RelativesAustralia">
                            <div class="my-2">
                                <label class="lebel_title">Address: </label>
                                <input name="RelativesAustraliaAddress" class="form-control" type="text" required>
                            </div>
                        </div>


                        <div class="col-sm-4 RelativesAustralia">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> Citizen or permanent resident of Australia ?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PermanentCitizen" id="PermanentCitizen_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PermanentCitizen_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PermanentCitizen" id="PermanentCitizen_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PermanentCitizen_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Start 28 Number Section -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mt-2">
                                <label class="lebel_title">28. Do you have any friends or contacts in Australia?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ContactsAustralia" id="ContactsAustralia_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ContactsAustralia_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ContactsAustralia" id="ContactsAustralia_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ContactsAustralia_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-4 ContactsAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Full name: </label>
                                <input name="ContactsAustraliaFullName" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-4 ContactsAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Date of birth: </label>
                                <input name="ContactsAustraliaDateBirth" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-4 ContactsAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to you: </label>
                                <input name="ContactsAustraliaRelationship" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 ContactsAustraliaDiv">
                            <div class="my-2">
                                <label class="lebel_title">Address: </label>
                                <input name="ContactsAustraliaAddress" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 ContactsAustraliaDiv">
                            <div class="mt-2">
                                <label class="lebel_title">Citizen or permanent resident of Australia ?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ContactsAustraliaCitizen" id="ContactsAustraliaCitizen_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ContactsAustraliaCitizen_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="Citizen" id="ContactsAustraliaCitizen_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ContactsAustraliaCitizen_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Start 29 Number Section -->
                    <div class="row">
                        <div class="col-sm-12 TravellingAustraliaOtherCountryDiv">
                            <div class="mb-2">
                                <label class="lebel_title">29. Why do you want to visit Australia? </label>
                                <input name="VisitAustralia" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>

                    <!-- Start 30 Number Section -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mt-2">
                                <label class="lebel_title">30. Do you intend to do a course of study while in Australia?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CourseStudyAustralia" id="CourseStudyAustralia_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CourseStudyAustralia_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CourseStudyAustralia" id="CourseStudyAustralia_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CourseStudyAustralia_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-4 CourseStudyAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Name of the course: </label>
                                <input name="NameOfTheCourse" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 CourseStudyAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Name of the institution: </label>
                                <input name="NameOfTheInstitution" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4 CourseStudyAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">How long will the course last?: </label>
                                <input name="CourseDuration" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>

                    <!------------------- Part-E Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part E – Health details </h1>
                    </div>

                    <!-- start 31 section -->
                    <div class="row">

                        <p>In the last 5 years, have you visited or lived outside your country of
                            passport for more than 3 consecutive months?</p>

                        <div class="col-sm-4">
                            <div>
                                <label class="lebel_title">31. Do not include time spent in Australia.</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="SpentTimeAustralia" id="SpentTimeAustralia_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="SpentTimeAustralia_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="SpentTimeAustralia" id="SpentTimeAustralia_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="SpentTimeAustralia_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- country 1 -->
                        <div class="col-sm-4 SpentTimeAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Country(1): </label>
                                <input name="SpentTimeAustraliaCountry_1" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-4 SpentTimeAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Date: </label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="SpentTimeAustraliaCountry_1_Date_start" class="form-control" type="date">
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="SpentTimeAustraliaCountry_1_Date_end" class="form-control" type="date">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- country 2 -->
                        <div class="col-sm-6 SpentTimeAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Country(2): </label>
                                <input name="SpentTimeAustraliaCountry_2" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 SpentTimeAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Date: </label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="SpentTimeAustraliaCountry_2_Date_start" class="form-control" type="date">
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="SpentTimeAustraliaCountry_2_Date_end" class="form-control" type="date">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- country 2 -->
                        <div class="col-sm-6 SpentTimeAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Country(3): </label>
                                <input name="SpentTimeAustraliaCountry_3" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 SpentTimeAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Date: </label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="SpentTimeAustraliaCountry_3_Date_start" class="form-control" type="date">
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="SpentTimeAustraliaCountry_3_Date_end" class="form-control" type="date">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- start 32 number section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title">32. Do you intend to enter a hospital or health care facility ?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="HealthCareFacility" id="HealthCareFacility_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="HealthCareFacility_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="HealthCareFacility" id="HealthCareFacility_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="HealthCareFacility_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 HealthCareFacilityDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details: </label>
                                <input name="HealthCareFacilityDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- start 33 number section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title">33. Do you intend to work as, a doctor, dentist, nurse or
                                    paramedic during your stay in Australia?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="DoctorDentist" id="DoctorDentist_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="DoctorDentist_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="DoctorDentist" id="DoctorDentist_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="DoctorDentist_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 DoctorDentistDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details: </label>
                                <input name="DoctorDentistDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- start 34 number section -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">34. Ever had, or currently have, tuberculosis / ever had a chest x-ray which showed an abnormality?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="Tuberculosis" id="Tuberculosis_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Tuberculosis_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="Tuberculosis" id="Tuberculosis_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="Tuberculosis_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 TuberculosisDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details: </label>
                                <input name="TuberculosisDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Start 35 Number Section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">35. During your proposed visit to Australia, do you expect to incur medical
                                    costs, or require treatment or medical follow up for: blood disorder/cancer/heart disease/HIV Infection;</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="IncurMedicalCosts" id="IncurMedicalCosts_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="IncurMedicalCosts_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="IncurMedicalCosts" id="IncurMedicalCosts_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="IncurMedicalCosts_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 IncurMedicalCostsDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details: </label>
                                <input name="IncurMedicalCostsDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Start 36 Number Section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">36. Do you require assistance with mobility or care due to a medical
                                    condition?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="MedicalCondition" id="MedicalCondition_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="MedicalCondition_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="MedicalCondition" id="MedicalCondition_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="MedicalCondition_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 MedicalConditionDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details: </label>
                                <input name="MedicalConditionDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Start 37 Number Section -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">37. Have you undertaken a health examination for an Australian visa in
                                    the last 12 months?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="UndertakenAustralianVisaLast12Month" id="UndertakenAustralianVisaLast12Month_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="UndertakenAustralianVisaLast12Month_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="UndertakenAustralianVisaLast12Month" id="UndertakenAustralianVisaLast12Month_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="UndertakenAustralianVisaLast12Month_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 UndertakenAustralianVisaLast12MonthDIv">
                            <div class="mb-2">
                                <label class="lebel_title">Give details: </label>
                                <input name="MedicalConditionDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!------------------- Part-F Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part F – Character details </h1>
                    </div>

                    <p>Have you ever:</p>

                    <div class="row">

                        <!-- question 1 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been charged with any offence that is
                                    currently awaiting legal action?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails1" id="CharacterDetails1_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails1_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails1" id="CharacterDetails1_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails1_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 2 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been convicted of an offence in any country
                                    (including any conviction which is now removed from official records)?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails2" id="CharacterDetails2_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails2_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails2" id="CharacterDetails2_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails2_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 3 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been the subject of an arrest warrant or
                                    Interpol notice?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails3" id="CharacterDetails3_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails3_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails3" id="CharacterDetails3_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails3_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- question 4 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been found guilty of a sexually based offence involving a child (including where no
                                    conviction as recorded)?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails4" id="CharacterDetails4_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails4_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails4" id="CharacterDetails4_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails4_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 5 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been named on a sex offender register?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails5" id="CharacterDetails5_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails5_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails5" id="CharacterDetails5_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails5_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- question 6 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been acquitted of any offence on the grounds
                                    of unsoundness of mind or insanity?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails6" id="CharacterDetails6_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails6_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails6" id="CharacterDetails6_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails6_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 7 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been found by a court not fit to plead?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails7" id="CharacterDetails7_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails7_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails7" id="CharacterDetails7_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails7_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 8 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">been directly or indirectly involved in, or
                                    associated with, activities which would represent a risk to national security in Australia or any other country?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails8" id="CharacterDetails8_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails8_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails8" id="CharacterDetails8_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails8_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 9 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">Been charged with, or indicted for: genocide,
                                    war crimes, crimes against humanity, torture, slavery, or any other crime that is otherwise of a serious international concern?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails9" id="CharacterDetails9_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails9_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails9" id="CharacterDetails9_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails9_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 10 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> been associated with a person, group or organisation that has been/is involved in criminal conduct?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails10" id="CharacterDetails10_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails10_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails10" id="CharacterDetails10_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails10_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 11 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> been associated with an organisation
                                    engaged in violence or engaged in acts of violence (including war, insurgency, freedom fighting, terrorism, protest) either overseas or in Australia?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails11" id="CharacterDetails11_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails11_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails11" id="CharacterDetails11_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails11_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 12 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> served in a military force, police force, state
                                    sponsored/private militia or intelligence agency (including secret police)?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails12" id="CharacterDetails12_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails12_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails12" id="CharacterDetails12_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails12_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 13 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">undergone any military/paramilitary training,
                                    been trained in weapons/explosives or in the manufacture of chemical/biological products?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails13" id="CharacterDetails13_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails13_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails13" id="CharacterDetails13_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails13_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 14 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> Been involved in people smuggling or people trafficking offences?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails14" id="CharacterDetails14_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails14_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails14" id="CharacterDetails14_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails14_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- question 15 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> been removed, deported or excluded from any country (including Australia)?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails15" id="CharacterDetails15_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails15_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails15" id="CharacterDetails15_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails15_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 16 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;"> Overstayed a visa in any country (including
                                    Australia)?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails16" id="CharacterDetails16_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails16_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails16" id="CharacterDetails16_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails16_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- question 17 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">Had any outstanding debts to the Australian
                                    Government or any public authority in Australia?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails17" id="CharacterDetails17_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails17_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CharacterDetails17" id="CharacterDetails17_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CharacterDetails17_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!------------------- Part-F Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part G – Employment status </h1>
                    </div>

                    <!-- question not 39 -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">39. What is your employment status?</label>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="EmploymentStatus" id="EmploymentStatus_Employed" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="EmploymentStatus_Employed">
                                                Employed/self-employed
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="EmploymentStatus" id="EmploymentStatus_Retired">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="EmploymentStatus_Retired">
                                                Retired
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="EmploymentStatus" id="EmploymentStatus_Student">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="EmploymentStatus_Student">
                                                Student
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="EmploymentStatus" id="EmploymentStatus_Other">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="EmploymentStatus_Other">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="EmploymentStatus" id="EmploymentStatus_Unemployed">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="EmploymentStatus_Unemployed">
                                                Unemployed
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Employed / Self-employed -->

                    <div class="row EmploymentStatus_Employed_Div">
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Employer/Business Name: </label>
                                <input name="EmploymentStatus_BusinessName" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Address: </label>
                                <input name="EmploymentStatus_Address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Postcode: </label>
                                <input name="EmploymentStatus_Postcode" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Telephone Number: </label>
                                <input name="EmploymentStatus_Telephone_Number" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Position you hold : </label>
                                <input name="EmploymentStatus_Position" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">How long have you been employed by this employer/business? : </label>
                                <input name="EmploymentStatus_Long_Employed" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Retired -->
                    <div class="row EmploymentStatus_Retired_Div">
                        <div class="col-sm-12">
                            <div class="mb-2">
                                <label class="lebel_title">Year of retirement: </label>
                                <input name="EmploymentStatus_YearRetirement" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Student -->
                    <div class="row EmploymentStatus_Student_Div">
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">Give details Your current course: </label>
                                <input name="EmploymentStatus_Current_Course" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">Name of educational institution: </label>
                                <input name="EmploymentStatus_Educational_Institution" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">How long have you been studying at this institution?: </label>
                                <input name="EmploymentStatus_Studying_Institution" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Other Give details -->
                    <div class="row EmploymentStatus_Other_Div">
                        <div class="col-sm-12">
                            <div class="mb-2">
                                <label class="lebel_title">Give Details : </label>
                                <input name="EmploymentStatus_Other_Details" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Unemployed Give details -->
                    <div class="row EmploymentStatus_Unemployed_Div">
                        <div class="col-sm-12">
                            <div class="mb-2">
                                <label class="lebel_title">Explain why you are unemployed and give details
                                    of your last employment (if applicable) : </label>
                                <input name="EmploymentStatus_Unemployed" class="form-control" type="text">
                            </div>
                        </div>
                    </div>


                    <!------------------- Part H – Funding for stay -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part H – Funding for stay </h1>
                    </div>


                    <div class="row">
                        <!-- Question 40 -->
                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">40. Give details of how you will maintain yourself financially while you are
                                    in Australia: </label>
                                <input name="Maintain_Yourself_Financially" class="form-control" type="text">
                            </div>
                        </div>

                        <!-- Question 41 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">41. Is your sponsor or someone else providing support for your visit to Australia?
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ProvidingSupportVisitAustralia" id="ProvidingSupportVisitAustralia_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ProvidingSupportVisitAustralia_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ProvidingSupportVisitAustralia" id="ProvidingSupportVisitAustralia_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ProvidingSupportVisitAustralia_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-4 ProvidingSupportVisitAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Full Name : </label>
                                <input name="ProvidingSupportVisitAustralia_Full_Name" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-4 ProvidingSupportVisitAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Date of birth : </label>
                                <input name="ProvidingSupportVisitAustralia_DateofBirth" class="form-control" type="text">
                            </div>
                        </div>


                        <div class="col-sm-4 ProvidingSupportVisitAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to You : </label>
                                <input name="ProvidingSupportVisitAustralia_Relationship_you" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 ProvidingSupportVisitAustraliaDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Their address while you are in Australia : </label>
                                <input name="ProvidingSupportVisitAustralia_Address_While_Australia" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 ProvidingSupportVisitAustraliaDiv">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">Type of support provided </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="TypeSupportProvided" id="TypeSupportProvidedFinancial">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="TypeSupportProvidedFinancial">
                                                Financial
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="TypeSupportProvided" id="TypeSupportProvided_Accommodation">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="TypeSupportProvided_Accommodation">
                                                Accommodation
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="TypeSupportProvided" id="TypeSupportProvided_Other">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="TypeSupportProvided_Other">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!------------------- Part I – Previous applications -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part I – Previous applications </h1>
                    </div>

                    <!-- Question 42  -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">42. Ibeen in Australia and not complied with
                                    visa conditions or departed Australia outside your authorised period of stay?
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PreviousApplications" id="PreviousApplications_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PreviousApplications_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PreviousApplications" id="PreviousApplications_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PreviousApplications_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 PreviousApplicationsDiv">
                            <div class="mb-2">
                                <label class="lebel_title">If you answered ‘Yes’ to any of the above questions, give details : </label>
                                <input name="PreviousApplicationsDetails" class="form-control" type="text">
                            </div>
                        </div>
                    </div>


                    <!------------------- Part J – Assistance with this form -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part J – Assistance with this form </h1>
                    </div>


                    <div class="row">
                        <!-- Question No 43 -->
                        <div class="col-sm-6">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">43. Did you receive assistance in completing this form?
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="AssistanceReceiveCompletingForm" id="AssistanceReceiveCompletingForm_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="AssistanceReceiveCompletingForm_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="AssistanceReceiveCompletingForm" id="AssistanceReceiveCompletingForm_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="AssistanceReceiveCompletingForm_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Family name : </label>
                                <input name="AssistanceReceiveCompletingForm_Family_Name" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Given names : </label>
                                <input name="AssistanceReceiveCompletingForm_Given_Names" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Address : </label>
                                <input name="AssistanceReceiveCompletingForm_Address" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div class="mb-2">
                                <label class="lebel_title">POSTCODE : </label>
                                <input name="AssistanceReceiveCompletingForm_POSTCODE" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Telephone number or daytime contact Office hours: </label>
                                <input name="Office_Telephone_Office" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div class="mb-2">
                                <label class="lebel_title">Telephone number or daytime contact Mobile/cell: </label>
                                <input name="Office_Telephone_Mobile" class="form-control" type="text">
                            </div>
                        </div>

                        <!-- Question No 44 -->
                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">44. Is the person an agent registered with the Office of the Migration
                                    Agents Registration Authority (Office of the MARA)?
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="MigrationAgentsRegistrationAuthority" id="MigrationAgentsRegistrationAuthority_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="MigrationAgentsRegistrationAuthority_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="MigrationAgentsRegistrationAuthority" id="MigrationAgentsRegistrationAuthority_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="MigrationAgentsRegistrationAuthority_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Question No 45 -->
                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">45. Is the person/agent in Australia?
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PersonAgentAustralia" id="PersonAgentAustralia_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PersonAgentAustralia_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PersonAgentAustralia" id="PersonAgentAustralia_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PersonAgentAustralia_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question No 46 -->
                        <div class="col-sm-6 AssistanceReceiveCompletingFormDiv">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">46. Did you pay the person/agent and/or give a gift for this assistance?
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PayPersonAgent" id="PayPersonAgent_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PayPersonAgent_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="PayPersonAgent" id="PayPersonAgent_Yes" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PayPersonAgent_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------------- Part J – Assistance with this form -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part K – Options for receiving written communications </h1>
                    </div>


                    <div class="row">
                        <!-- Question no 47 -->
                        <div class="col-sm-12 AssistanceReceiveCompletingFormDiv">
                            <div>
                                <label class="lebel_title" style="line-height: 13px;">47. All written communications about this application should be sent to:
                                    (Tick one box only)
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ReceivingWrittenCommunications" id="ReceivingWrittenCommunications_Myself">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ReceivingWrittenCommunications_Myself">
                                                Myself
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ReceivingWrittenCommunications" id="ReceivingWrittenCommunications_Authorised" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ReceivingWrittenCommunications_Authorised">
                                                Authorised Recipient
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ReceivingWrittenCommunications" id="ReceivingWrittenCommunications_Migration_Agent" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ReceivingWrittenCommunications_Migration_Agent">
                                                Migration agent
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="ReceivingWrittenCommunications" id="ReceivingWrittenCommunications_Exempt_Person" checked>
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="ReceivingWrittenCommunications_Exempt_Person">
                                                Exempt person
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!------------------- Part L – Payment details -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part L – Payment details </h1>
                    </div>
                    <!-- Question no 48 -->
                    <p><b>48. Important:</b> You must refer to the department’s website at www.immi.gov.au/fees-charges to complete this part of your application.
                        The website shows reference tables with the Visa Application Charges applicable to each visa subclass.</p>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">* Visa subclass you are applying for : </label>
                                <input name="VisaSubclassApplying" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">* Base Application Charge : </label>
                                <input name="BaseApplicationCharge" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">* Non-internet Application Charge (if applicable) : </label>
                                <input name="NonInternetApplicationCharge" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-12 pt-2">
                            <div class="mb-2">
                                <label class="lebel_title pb-3">* Additional Applicant Charge aged 18 years or over at the time your application is lodged : </label>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="lebel_title">Write the amount shown on the reference table for your visa subclass : </label>
                                        <input name="AdditionalApllicationPayment" class="form-control" type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="lebel_title">Number of additional applicants aged 18 years or over : </label>
                                        <input name="AdditionalApllicationAge" class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="lebel_title">Total : </label>
                                        <input name="AdditionalApplicantChargeOverAged18" class="form-control w-500" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-2">
                            <div class="mb-2">
                                <label class="lebel_title pb-3">* Subsequent Temporary Application Charge (if applicable) : </label>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="lebel_title">Write the amount shown on the reference table for your visa subclass : </label>
                                        <input name="AdditionalApllicationPayment" class="form-control" type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="lebel_title">Number of applicants : </label>
                                        <input name="AdditionalApllicationAge" class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="lebel_title">Total : </label>
                                        <input name="AdditionalApplicantChargeOverAged18" class="form-control w-500" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="mb-2">
                                <label class="lebel_title">* Total (1) + (2) + (3) + (4) + (5) : </label>
                                <input name="TotalAmount" class="form-control" type="number">
                            </div>
                        </div>
                    </div>

                    <!--  Question no 49 -->

                    <div class="col-sm-12">
                        <div>
                            <label class="lebel_title" style="line-height: 13px;">49. How will you pay your application charge? </label>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3 p-3 border rounded bg-light">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="PaymentMethod" id="PaymentMethod_BankCheque">
                                        <label class="lebel_title flex-grow-1 fw-semibold" for="PaymentMethod_BankCheque">
                                            Bank cheque
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="mb-3 p-3 border rounded bg-light">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="PaymentMethod" id="PaymentMethod_MoneyOrder">
                                        <label class="lebel_title flex-grow-1 fw-semibold" for="PaymentMethod_MoneyOrder">
                                            Money order
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3 p-3 border rounded bg-light">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="PaymentMethod" id="PaymentMethod_DebitCard">
                                        <label class="lebel_title flex-grow-1 fw-semibold" for="PaymentMethod_DebitCard">
                                            Debit card
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3 p-3 border rounded bg-light">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="PaymentMethod" id="PaymentMethod_CreditCard" checked>
                                        <label class="lebel_title flex-grow-1 fw-semibold" for="PaymentMethod_CreditCard">
                                            Credit card
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment by Credit card  (tick one box) -->
                            <div class="col-sm-12 PaymentMethodDIv">
                                <div>
                                    <label class="lebel_title" style="line-height: 13px;">Payment by Credit card (tick one box)
                                    </label>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="mb-3 p-3 border rounded bg-light">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="radio" name="CreaditCardType" id="CreaditCardType_MasterCard">
                                                <label class="lebel_title flex-grow-1 fw-semibold" for="CreaditCardType_MasterCard">
                                                    MasterCard
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3 p-3 border rounded bg-light">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="radio" name="CreaditCardType" id="CreaditCardType_AmericanExpress">
                                                <label class="lebel_title flex-grow-1 fw-semibold" for="CreaditCardType_AmericanExpress">
                                                    American Express
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 p-3 border rounded bg-light">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="radio" name="CreaditCardType" id="CreaditCardType_Visa">
                                                <label class="lebel_title flex-grow-1 fw-semibold" for="CreaditCardType_Visa">
                                                    Visa
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3 p-3 border rounded bg-light">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="radio" name="CreaditCardType" id="CreaditCardType_DinersClub">
                                                <label class="lebel_title flex-grow-1 fw-semibold" for="CreaditCardType_DinersClub">
                                                    Diners Club
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-3 p-3 border rounded bg-light">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="radio" name="CreaditCardType" id="CreaditCardType_JCB">
                                                <label class="lebel_title flex-grow-1 fw-semibold" for="CreaditCardType_JCB">
                                                    JCB
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Australian Dollars: </label>
                                    <input name="AustralianDollars" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Credit card number: </label>
                                    <input name="CreditCardNumber" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Expiry date: </label>
                                    <div class="d-flex">
                                        <input name="CreditCardStartDate" class="form-control" type="text" placeholder="Start Date">
                                        <span style="font-size:60px;margin-top:15px">/</span>
                                        <input name="CreditCardEndDate" class="form-control" type="text" placeholder="End Date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Cardholder’s name: </label>
                                    <input name="CardholdersName" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Telephone number: </label>
                                    <input name="CreditCardTelephone" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Address: </label>
                                    <input name="CreditCardTelephone" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4 PaymentMethodDIv">
                                <div class="mb-2">
                                    <label class="lebel_title">Signature of Cardholder: </label>
                                    <input name="CreditCardSignature" class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>
<!--Contact Details End-->

<!-- http://localhost/globalconnex/web/student_assessment -->