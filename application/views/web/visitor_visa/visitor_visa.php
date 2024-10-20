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

    #user-address-textarea {
        background-color: #fff;
        height: 60px;
        margin-bottom: 10px;
    }
</style>
<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Visitor Visa Application Form</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <script>
                    function show_field(str) {
                        if (str == "") {
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo base_url(); ?>web/martial_status?q=" + str, true);
                        xmlhttp.send();
                    }
                </script>

                <script>
                    function show_field_children(str) {
                        if (str == "") {
                            document.getElementById("ChildrenField").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("ChildrenField").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo base_url(); ?>web/children_form?q=" + str, true);
                        xmlhttp.send();
                    }
                </script>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>web_operation/student_assessment_new_submit" method="post">

                    <!-------------------General Details Start-------------------->
                    <div class="three">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp;General Details :</h1>
                    </div>
                    <div class="row">
                        <!------------------- Input Field 1 -------------------->
                        <div class="col-sm-6 mt-2">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">Indicate if you are applying outside Australia or in Australia:</label>
                            </div>

                            <!-- Option 1 -->
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="location" id="outsideAustralia">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="outsideAustralia">
                                        Outside Australia
                                    </label>
                                    <span class="text-muted small">Go to Question 2</span>
                                </div>
                            </div>

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

                        <!------------------- Input Field 2 -------------------->
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">When do you wish to visit Australia?</label>
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
                        <div class="col-sm-6 mt-2">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">How long do you wish to stay in Australia?</label>
                            </div>

                            <!-- Option 1 -->
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="location" id="Upto3months">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="Upto3months">
                                        Up to 3 months
                                    </label>
                                </div>
                            </div>

                            <!-- Option 2 -->
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="location" id="Upto6months">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="Upto6months">
                                        Up to 6 months
                                    </label>
                                </div>
                            </div>
                            <!-- Option 3 -->
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="location" id="Upto12months">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="Upto12months">
                                        Up to 12 months
                                    </label>
                                </div>
                            </div>

                        </div>

                        <!------------------- Input Field 4 -------------------->
                        <div class="col-sm-6 mt-2">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title"> Do you intend to enter Australia on more than one occasion?</label>
                            </div>

                            <!-- Option 1 -->
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="location" id="AustraliaOccasionNo">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="AustraliaOccasionNo">
                                        No
                                    </label>
                                    <span class="text-muted"> Go to Question 7</span>
                                </div>
                            </div>

                            <!-- Option 2 -->
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="location" id="AustraliaOccasionYes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="AustraliaOccasionYes">
                                        yes
                                    </label>
                                    <span class="text-muted">Give details</span>
                                </div>
                            </div>

                        </div>

                        <!------------------- Input Field 5 -------------------->
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Specify the date you wish to extend your stay to:</label>
                                <input name="startDate" class="form-control" type="date" required>
                            </div>
                        </div>

                        <!------------------- Input Field 5 -------------------->
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Provide detailed reasons for requesting this further stay:</label>
                                <textarea name="furtherStay" class="form-control" rows="2" cols="2" type="text" required> </textarea>
                            </div>

                        </div>
                    </div>

                    <!------------------- Part-A Your details -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part A – Your details : (Give the following details exactly as they appear in your passport)</h1>
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
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part A – Your details : (Place of birth)</h1>
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
                                <label class="lebel_title">Relationship status:</label>
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
                                    </div>
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
                                <label class="lebel_title">Are you or have you been known by any other name?</label>
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
                                <label class="lebel_title">Do you currently hold an Australian visa? </label>
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
                                <label class="lebel_title">Have you applied for a Parent (subclass 103) visa? </label>
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
                                    <input class="form-check-input me-3" type="radio" name="appliedSubclass103" id="appliedSubclass103_Yes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="appliedSubclass103_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Do you currently hold, or have you applied for, an APEC Business Travel
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
                                <label class="lebel_title">Are you a citizen of any other country?</label>
                            </div>
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
                                    <input class="form-check-input me-3" type="radio" name="CitizenOtherCountry" id="CitizenOtherCountry_Yes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="CitizenOtherCountry_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Do you have other current passports?</label>
                            </div>
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="OtherCurrentPassports" id="CitizenOtherCountry_No">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="OtherCurrentPassports_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 p-3 border rounded bg-light">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-3" type="radio" name="CitizenOtherCountry" id="CitizenOtherCountry_Yes">
                                    <label class="lebel_title flex-grow-1 fw-semibold" for="CitizenOtherCountry_Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Do you hold an identity card or identity number issued to you by your
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
                                            <input class="form-check-input me-3" type="radio" name="HoldIdentityCard" id="HoldIdentityCard_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="HoldIdentityCard_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Family name :</label>
                                <input name="FamilyName" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Given names :</label>
                                <input name="GivenNames" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Type of document :</label>
                                <input name="TypeDocument" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Identity Number :</label>
                                <input name="IdentityNumber" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Country Issue :</label>
                                <input name="CountryIssue" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">In what country are you currently located? </label>
                                <input name="CurrentlyLocated" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-12 mt-2">
                            <!-- Question Title -->
                            <div class="mb-2">
                                <label class="lebel_title">What is your legal status in your current location?:</label>
                            </div>

                            <!-- Option 1 -->
                            <div class="row">
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
                            </div>

                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">What is the purpose of your stay in your current location and what is
                                    your visa status? </label>
                                <input name="VisaStatus" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">What is the purpose of your stay in your current location and what is
                                    your visa status? </label>
                                <input name="VisaStatus" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Your current residential address? </label>
                                <input name="ResidentialAddress" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Your current residential Post Code: </label>
                                <input name="PostCode" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Your current residential Country: </label>
                                <input name="ResidentialCounty" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Address for correspondence: </label>
                                <input name="AddressCorrespondence" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Address for correspondence Postal Code: </label>
                                <input name="CorrespondencePostalCode" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Contact telephone numbers Home: </label>
                                <input name="TelephoneNumberHome" class="form-control" type="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Contact telephone numbers Office: </label>
                                <input name="TelephoneNumberOffice" class="form-control" type="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Mobile/cell: </label>
                                <input name="MobileCall" class="form-control" type="phone" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title">Do you agree to the department communicating with you by email
                                    and/or fax?</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CommunicatingEmail" id="CommunicatingEmail_No">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CommunicatingEmail_No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 p-3 border rounded bg-light">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="CommunicatingEmail" id="CommunicatingEmail_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="CommunicatingEmail_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="mb-2">
                                <label class="lebel_title mb-2">Email address: </label>
                                <input name="EmailAddress" class="form-control" type="email" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Fax number: </label>
                                <input name="FaxNumber" class="form-control" type="fax" required>
                            </div>
                        </div>



                    </div>

                    <!------------------- Part-B Place of birth -------------------->
                    <div class="three pt-5">
                        <h1><img src="<?php echo base_url(); ?>others/images/information.png" width="25" height="25" alt="General Details">&nbsp; Part B – Family travelling to Australia with you</h1>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <label class="lebel_title">Are you travelling to, or are you currently in, Australia with any family members?</label>
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
                                            <input class="form-check-input me-3" type="radio" name="AustraliaWithAnyFamilyMember" id="AustraliaWithAnyFamilyMember_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="AustraliaWithAnyFamilyMember_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Full Name: </label>
                                <input name="FullName" class="form-control" type="fax" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to You: </label>
                                <input name="RelationshipYou" class="form-control" type="fax" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
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

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="">
                                <label class="lebel_title">Do you have a partner, any children, or fiancé who will NOT be travelling, or has NOT travelled, to Australia with you?</label>
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
                                            <input class="form-check-input me-3" type="radio" name="PartnerChildren" id="PartnerChildren_Yes">
                                            <label class="lebel_title flex-grow-1 fw-semibold" for="PartnerChildren_Yes">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">Full Name: </label>
                                <input name="PartnerChildrenFullName" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">Date Of Birth: </label>
                                <input name="PartnerChildrenRelationshipYou" class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">Relationship to You: </label>
                                <input name="PartnerChildrenRelationshipYou" class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="lebel_title">Their address while you are in Australia: </label>
                                <input name="NameofSponsor" class="form-control" type="text" required>
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