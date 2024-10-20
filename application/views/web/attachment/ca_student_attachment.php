<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title3.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h4 style="color: white">Attachment List for Canada Student Visa</h4>
        </div>
    </div>
</section>


<!--Attachment Details Start-->
<section class="team-contact-form">
<div class="container pb-100">
<div class="row justify-content-center">
<div class="col-lg-12">
<script>
    function show_field(str)
    {
        if (str=="")
        {
            document.getElementById("txtHint").innerHTML="";
            return;
        }
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","<?php echo base_url(); ?>web/martial_status?q="+str,true);
        xmlhttp.send();
    }
</script>

<script>
    function show_field_children(str)
    {
        if (str=="")
        {
            document.getElementById("ChildrenField").innerHTML="";
            return;
        }
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("ChildrenField").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","<?php echo base_url(); ?>web/children_form?q="+str,true);
        xmlhttp.send();
    }
</script>

<!-- Contact Form -->
<form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>web_operation/attachment_request" method="post">
    <div class="sec-title text-center">
        <span class="sub-title">Applicant Identity Documents</span>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">CV / Bio Data (PDF) :</label>
                <input class="form-control" type="file" name="Cv" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Passport Full Scan Copy (JPG) :</label>
                <input class="form-control" type="file" name="Passport" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Photographs (4.5cm X 3.5cm) :</label>
                <input class="form-control" type="file" name="Photographs" id="formFile" required>
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
                <label class="lebel_title">NID Copy :</label>
                <input class="form-control" type="file" name="NIDCopy" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">S.S.C Certificate :</label>
                <input class="form-control" type="file" name="SSCCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">S.S.C Mark Sheet :</label>
                <input class="form-control" type="file" name="SSCMarkSheet" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">H.S.C Certificate :</label>
                <input class="form-control" type="file" name="HSCCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">H.S.C Mark Sheet :</label>
                <input class="form-control" type="file" name="HSCMarkSheet" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Degree Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="DegreeCertificate" id="formFile" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Degree Mark Sheet (If Applicable) :</label>
                <input class="form-control" type="file" name="DegreeMarkSheet" id="formFile" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Master or MBA Certificate (If Applicable) :</label>
                <input class="form-control" type="file" name="MBACertificate" id="formFile" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Masters or MBA Mark Sheet (If Applicable) :</label>
                <input class="form-control" type="file" name="MBAMarkSheet" id="formFile" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">IELTS Certificate :</label>
                <input class="form-control" type="file" name="IELTSCertificate" id="formFile" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">English Language Certificate(If Applicable) :</label>
                <input class="form-control" type="file" name="DiplomaMarkSheet" id="formFile" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Bank Statement :</label>
                <input class="form-control" type="file" name="BankStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">FDR Statement :</label>
                <input class="form-control" type="file" name="FDRStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">FDR Solvency :</label>
                <input class="form-control" type="file" name="FDRSolvency" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Bank Solvency  :</label>
                <input class="form-control" type="file" name="BankSolvency" id="formFile" required >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Savings Account Statement :</label>
                <input class="form-control" type="file" name="SavingsAccountStatement" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Savings Account Solvency  :</label>
                <input class="form-control" type="file" name="SavingsAccountSolvency" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Source of Fund :</label>
                <input class="form-control" type="file" name="SourceFund" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Asset Valuation :</label>
                <input class="form-control" type="file" name="AssetValuation" id="formFile" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">CA Evaluation Report :</label>
                <input class="form-control" type="file" name="CAEvaluationReport" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Tex Return Certificate :</label>
                <input class="form-control" type="file" name="TexReturnCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">TIN Certificate:</label>
                <input class="form-control" type="file" name="TINCertificate" id="formFile" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Police Clearance Certificate :</label>
                <input class="form-control" type="file" name="PoliceClearanceCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">SOP ( Statement of Purpose) :</label>
                <input class="form-control" type="file" name="SOPStatementPurpose" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Any Prior Visa Refusal Letter (If Applicable) :</label>
                <input class="form-control" type="file" name="PriorVisaRefusalLetter" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Letter from University :</label>
                <input class="form-control" type="file" name="LetterUniversity" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Letter from College :</label>
                <input class="form-control" type="file" name="LetterCollege" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Sponsor Birth Certificate :</label>
                <input class="form-control" type="file" name="SponsorBirthCertificate" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Sponsor Relationship Documents :</label>
                <input class="form-control" type="file" name="LetterCollegeUniversity" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Form 1294  :</label>
                <input class="form-control" type="file" name="Form1294" id="formFile" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="lebel_title">Form 5604 (If applicable) :</label>
                <input class="form-control" type="file" name="Form 5604" id="formFile">
            </div>
        </div>

    </div>

    <div class="mb-3 text-center">
        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
    </div>
</form>
<!-- Attachment Form Validation-->
</div>
</div>
</div>
</section>
<!--Contact Details End-->
