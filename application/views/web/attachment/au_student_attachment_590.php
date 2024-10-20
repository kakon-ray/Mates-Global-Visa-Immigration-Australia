<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h4 style="color: white">Australia Schooling Visa (Subclass 590) Attachment</h4>
        </div>
    </div>
</section>


<!--Contact Details Start-->
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
            <label class="lebel_title">Passport Full Scan Copy (JPG) :</label>
            <input class="form-control" type="file" name="Passport" id="formFile" required>
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
            <label class="lebel_title">NID Copy (if applicable) :</label>
            <input class="form-control" type="file" name="NID" id="formFile">
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
            <label class="lebel_title">Police Clearance Certificate(if applicable) :</label>
            <input class="form-control" type="file" name="PoliceClearance" id="formFile">
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
            <label class="lebel_title">Last Academic Result  :</label>
            <input class="form-control" type="file" name="AcademicResult" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Last Academic Certificate (if applicable) :</label>
            <input class="form-control" type="file" name="AcademicCertificate" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Last Academic Mark Sheet (if applicable) :</label>
            <input class="form-control" type="file" name="AcademicMarkSheet" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">IELTS Certificate (if applicable)t :</label>
            <input class="form-control" type="file" name="IELTSCertificate" id="formFile" required>
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
            <label class="lebel_title">Health Insurance Documents  :</label>
            <input class="form-control" type="file" name="SponsorHealthInsurance" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Form 157A  :</label>
            <input class="form-control" type="file" name="SponsorForm157A" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">All Dead of Agreement Copy :</label>
            <input class="form-control" type="file" name="DeadAgreementCopy" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Trade License (If applicable) :</label>
            <input class="form-control" type="file" name="TradeLicense" id="formFile">
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
