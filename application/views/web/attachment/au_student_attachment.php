<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }



    .card h3 {
        font-size: 22px;
        font-weight: 600;

    }

    .drop_box {
        margin: 10px 0;
        padding: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border: 3px dotted #a3a3a3;
        border-radius: 5px;
    }

    .drop_box h4 {
        font-size: 16px;
        font-weight: 400;
        color: #2e2e2e;
    }

    .drop_box p {
        margin-top: 10px;
        margin-bottom: 20px;
        font-size: 12px;
        color: #a3a3a3;
    }

    .btn {
        text-decoration: none;
        background-color: #005af0;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        outline: none;
        transition: 0.3s;
    }

    .btn:hover{
        text-decoration: none;
        background-color: #ffffff;
        color: #005af0;
        padding: 10px 20px;
        border: none;
        outline: 1px solid #010101;
    }
    .form input {
        margin: 10px 0;
        width: 100%;
        background-color: #e2e2e2;
        border: none;
        outline: none;
        padding: 12px 20px;
        border-radius: 4px;
    }

    /******************Start*******************/
    .btcd-f-input {
        display: inline-block;
        width: 250px;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .btcd-f-input > div > input::-webkit-file-upload-button {
        cursor: pointer;
    }

    .btcd-f-wrp {
        cursor: pointer;
    }

    .btcd-f-wrp > small {
        color: gray;
    }

    .btcd-f-wrp > button {
        cursor: pointer;
        background: #f3f3f3;
        padding: 5px;
        display: inline-block;
        border-radius: 9px;
        border: none;
        margin-right: 8px;
        height: 35px;
    }

    .btcd-f-wrp > button > img {
        width: 24px;
    }

    .btcd-f-wrp > button > span,
    .btcd-f-wrp > span,
    .btcd-f-wrp > small {
        vertical-align: super;
    }

    .btcd-f-input > .btcd-f-wrp > input {
        z-index: 100;
        width: 100%;
        position: absolute;
        opacity: 0;
        left: 0;
        height: 37px;
        cursor: pointer;
    }

    .btcd-f-wrp:hover {
        background: #fafafa;
        border-radius: 10px;
    }

    .btcd-files > div {
        display: flex;
        align-items: center;
        background: #f8f8f8;
        border-radius: 10px;
       /* margin-left: 30px; */
        width: 91%;
        margin-top: 10px;
        height: 40px;
    }

    .btcd-files > div > div {
        display: inline-block;
        width: 73%;
    }

    .btcd-files > div > div > small {
        color: gray;
    }

    .btcd-files > div > img {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        border-radius: 10px;
    }

    .btcd-files > div > div > span {
        display: inline-block;
        width: 100%;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    .btcd-files > div > button {
        background: #e8e8e8;
        border: none;
        border-radius: 50px;
        width: 25px;
        height: 25px;
        font-size: 20px;
        margin-right: 6px;
        padding: 0;
    }

    .btcd-files > div > button:hover {
        background: #bbbbbb;
    }

</style>


<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h4 style="color: white">Australia Student Visa (Subclass 500) Attachment</h4>
        </div>
    </div>
</section>


<!--Contact Details Start-->
<section class="team-contact-form">
<div class="container pb-100">
<div class="row justify-content-center">
<div class="col-lg-12">

<!-- Contact Form -->
<form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>web_operation/attachment_request" method="post">
    <div class="sec-title text-center">
        <span class="sub-title">Applicant Identity Documents</span>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">

<!--                <input class="form-control" type="file" name="Cv" id="formFile" required>-->
<!--                <input type="file" id="myfile" name="myfile">-->
                <div class="drop_box">
                    <header>
                        <h4>CV / Bio Data</h4>
                    </header>
                    <p>Files Supported: PDF, DOC, JPG</p>

                    <div class="btcd-f-input">
                        <small>Single Upload</small>
                        <div class="btcd-f-wrp">
                            <button class="btcd-inpBtn" type="button">
                                <img src="" alt="">
                                <span> Attach File</span>
                            </button>
                            <span class="btcd-f-title">No File Chosen</span>
                            <small class="f-max">(Max 2 MB)</small>
                            <input type="file" name="single" id="">
                        </div>
                        <div class="btcd-files"></div>
                    </div>


                </div>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
<!--                <input class="form-control" type="file" name="Passport" id="formFile" required>-->
                <label class="lebel_title" style="text-align: center;">Passport Full Scan Copy</label>
                <div class="drop_box">
                    <header>
                        <h4>Select File here</h4>
                    </header>
                    <p>Files Supported: PDF, DOC, JPG</p>
                    <input type="file" hidden accept=".doc,.docx,.pdf,.jpg" id="fileID" name="Passport" style="display:none;">
                    <button class="btn">Choose File</button>
                </div>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Photographs (45mm x 35mm) :</label>
                <input class="form-control" type="file" name="Photographs" id="formFile" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Previous Passport Full Scan Copy:</label>
                <input class="form-control" type="file" name="PreviousPassport" id="formFile" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">NID English Translate Copy :</label>
                <input class="form-control" type="file" name="Nid" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Birth Certificate :</label>
                <input class="form-control" type="file" name="BirthCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Police Clearance Certificate :</label>
                <input class="form-control" type="file" name="PoliceClearance" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Covid Vaccine Certificate :</label>
                <input class="form-control" type="file" name="CovidCertificate" id="formFile" required>
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Academic Documents</span>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">S.SC Certificate :</label>
                <input class="form-control" type="file" name="SscCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">S.S.C Mark sheet :</label>
                <input class="form-control" type="file" name="SscMarkSheet" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">H.S.C Certificate :</label>
                <input class="form-control" type="file" name="HscCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">H.S.C Mark sheet :</label>
                <input class="form-control" type="file" name="HscMarkSheet" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Bachelor Certificate(if applicable) :</label>
                <input class="form-control" type="file" name="BachelorCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Bachelor Mark Sheet(if applicable) :</label>
                <input class="form-control" type="file" name="BachelorMarkSheet" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Masters Certificate(if applicable) :</label>
                <input class="form-control" type="file" name="MastersCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Masters Mark sheet(if applicable) :</label>
                <input class="form-control" type="file" name="MastersMarkSheet" id="formFile">
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Others Academic Documents</span>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Diploma Certificate-1 :</label>
                <input class="form-control" type="file" name="DiplomaCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Diploma mark sheet- 1  :</label>
                <input class="form-control" type="file" name="DiplomaMarkSheet" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Diploma Certificate-2  :</label>
                <input class="form-control" type="file" name="DiplomaCertificate2" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Diploma mark sheet- 2  :</label>
                <input class="form-control" type="file" name="DiplomaMarkSheet2" id="formFile">
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Training and Skilled Documents</span>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Training Certificate -1 :</label>
                <input class="form-control" type="file" name="TrainingCertificate1" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Training Certificate -2  :</label>
                <input class="form-control" type="file" name="TrainingCertificate2" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Skilled Certificate -1  :</label>
                <input class="form-control" type="file" name="SkilledCertificate1" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Skilled Certificate -2  :</label>
                <input class="form-control" type="file" name="SkilledCertificate2" id="formFile">
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">English Proficiency Certificate</span>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">IELTS Certificate :</label>
                <input class="form-control" type="file" name="IELTSCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">PTE Certificate(if applicable) :</label>
                <input class="form-control" type="file" name="PTECertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">TOFEL Certificate(if applicable) :</label>
                <input class="form-control" type="file" name="TOFELCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">MOI Letter(if applicable) :</label>
                <input class="form-control" type="file" name="MOILetter" id="formFile">
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Letter</span>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Job Experience Letter  :</label>
                <input class="form-control" type="file" name="JobExperienceLetter" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Job Experience Letter (if applicable) :</label>
                <input class="form-control" type="file" name="JobExperienceLetter" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Reference Letter :</label>
                <input class="form-control" type="file" name="ReferenceLetter" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">SOP Letter  :</label>
                <input class="form-control" type="file" name="SOPLetter" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Recommendation Letter form College  :</label>
                <input class="form-control" type="file" name="RecommendationLetterCollege" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Recommendation Letter from University :</label>
                <input class="form-control" type="file" name="RecommendationLetterUniversity" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Recommendation Letter form Employer :</label>
                <input class="form-control" type="file" name="SOPLetter" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Job Experience Letter(If applicable) :</label>
                <input class="form-control" type="file" name="JobExperience" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">SOP(Statement of purpose) Letter :</label>
                <input class="form-control" type="file" name="SOPLetter" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">GTE Clearance Letter :</label>
                <input class="form-control" type="file" name="GTEClearanceLetter" id="formFile" required>
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Sponsor Documents</span>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">NID English Translate Copy :</label>
                <input class="form-control" type="file" name="SponsorNid" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Birth Certificate :</label>
                <input class="form-control" type="file" name="SponsorBirthCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">FDR Account Statement :</label>
                <input class="form-control" type="file" name="SponsorFDRAccountStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">FDR Account Solvency   :</label>
                <input class="form-control" type="file" name="SponsorFDRAccountSolvency" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Saving Account Statement :</label>
                <input class="form-control" type="file" name="SponsorSavingAccountStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Saving Account Solvency :</label>
                <input class="form-control" type="file" name="SponsorSavingAccountStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Current Account Statement (if applicable) :</label>
                <input class="form-control" type="file" name="SponsorCurrentAccountStatement" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Current Account Solvency  (if applicable) :</label>
                <input class="form-control" type="file" name="SponsorCurrentAccountSolvency" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Asset Valuation Documents :</label>
                <input class="form-control" type="file" name="SponsorAssetValuationDocuments" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">CA Evaluation Report :</label>
                <input class="form-control" type="file" name="SponsorCAEvaluationReport" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Tex Return Certificate :</label>
                <input class="form-control" type="file" name="SponsorTexReturnCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">TIN Certificate :</label>
                <input class="form-control" type="file" name="SponsorTINCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Source of Income Statement  :</label>
                <input class="form-control" type="file" name="SponsorSourceIncomeStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Financial Statement  :</label>
                <input class="form-control" type="file" name="SponsorFinancialStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">All dead of agreement copy  :</label>
                <input class="form-control" type="file" name="DeadAgreement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Trade License (If applicable)  :</label>
                <input class="form-control" type="file" name="TradeLicense" id="formFile">
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Spouse Documents</span>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Passport Full Scan Copy  :</label>
                <input class="form-control" type="file" name="SpousePassport" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">NID English Translate Copy :</label>
                <input class="form-control" type="file" name="SpouseNID" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Birth Certificate  :</label>
                <input class="form-control" type="file" name="SpouseBirthCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Photo (45mmx35mm) :</label>
                <input class="form-control" type="file" name="SpousePhoto" id="formFile">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Police Clearance Certificate:</label>
                <input class="form-control" type="file" name="SpousePoliceClearance" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Police Clearance Certificate:</label>
                <input class="form-control" type="file" name="SpousePoliceClearance" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Covid Certificate (If applicable):</label>
                <input class="form-control" type="file" name="SpouseCovidCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Joint Bank Account Statement:</label>
                <input class="form-control" type="file" name="JointAccountStatement" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Marriage Certificate:</label>
                <input class="form-control" type="file" name="MarriageCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Affidavit Marriage Documents:</label>
                <input class="form-control" type="file" name="AffidavitMarriageDocuments" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Marriage Picture:</label>
                <input class="form-control" type="file" name="MarriagePicture" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Pictures of both :</label>
                <input class="form-control" type="file" name="PicturesBoth" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Last 6 month both of chatting report :</label>
                <input class="form-control" type="file" name="chattingReport" id="formFile">
            </div>
        </div>
    </div>


    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Child Documents (Under 18 Age)</span>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Passport Full Scan Copy  :</label>
                <input class="form-control" type="file" name="ChildPassport" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Birth Certificate  :</label>
                <input class="form-control" type="file" name="ChildBirthCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Photo (45mmx35mm) :</label>
                <input class="form-control" type="file" name="ChildPhoto" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Covid Certificate (If applicable):</label>
                <input class="form-control" type="file" name="SpouseCovidCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">All Academic Transcript (If applicable):</label>
                <input class="form-control" type="file" name="AcademicTranscript" id="formFile">
            </div>
        </div>
    </div>

    <hr>
    <div class="sec-title text-center">
        <span class="sub-title">Child Documents (Above 18 age)</span>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Passport Full Scan Copy  :</label>
                <input class="form-control" type="file" name="ChildPassport" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Photo (45mm x 35mm)  :</label>
                <input class="form-control" type="file" name="Photo" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Birth Certificate  :</label>
                <input class="form-control" type="file" name="ChildBirthCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">NID Translate  Copy :</label>
                <input class="form-control" type="file" name="NID" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Police Clearance Certificate:</label>
                <input class="form-control" type="file" name="PoliceClearance" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Covid Vaccine Certificate:</label>
                <input class="form-control" type="file" name="CovidVaccineCertificate" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">All Academic Transcript:</label>
                <input class="form-control" type="file" name="AcademicTranscript" id="formFile">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">English Proficiency Certificate (If applicable):</label>
                <input class="form-control" type="file" name="EnglishProficiencyCertificate" id="formFile">
            </div>
        </div>
    </div>


    <div class="mb-3 text-center">
        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
    </div>
</form>
<!-- Contact Form Validation-->
</div>
</div>
</div>
</section>
<!--Contact Details End-->


