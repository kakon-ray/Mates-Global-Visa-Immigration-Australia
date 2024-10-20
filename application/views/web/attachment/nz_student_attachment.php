<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title2.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h4 style="color: white">New Zealand Student Visa Attachment</h4>
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
            <label class="lebel_title">Diploma Certificate (If Applicable) :</label>
            <input class="form-control" type="file" name="DiplomaCertificate" id="formFile" >
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Diploma Mark Sheet (If Applicable) :</label>
            <input class="form-control" type="file" name="DiplomaMarkSheet" id="formFile" >
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Training Certificate (If Applicable) :</label>
            <input class="form-control" type="file" name="TrainingCertificate" id="formFile" >
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Skilled Certificate (If Applicable) :</label>
            <input class="form-control" type="file" name="SkilledCertificate" id="formFile" >
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">IELTS Certificate  :</label>
            <input class="form-control" type="file" name="IELTSCertificate" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Others English Language Certificate  :</label>
            <input class="form-control" type="file" name="EnglishCertificate" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">MOI Letter (If Applicable)  :</label>
            <input class="form-control" type="file" name="MOILetter" id="formFile">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Tuition fee Receipt Copy :</label>
            <input class="form-control" type="file" name="TuitionFeeReceipt" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Tuition Fee Confirmation Letter :</label>
            <input class="form-control" type="file" name="TuitionFeeConfirmation" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Last Bank Statement :</label>
            <input class="form-control" type="file" name="LastBankStatement" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Bank Solvency  :</label>
            <input class="form-control" type="file" name="BankSolvency" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">FDR Statement  :</label>
            <input class="form-control" type="file" name="FDRStatement" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">FDR Solvency  :</label>
            <input class="form-control" type="file" name="FDRSolvency" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Savings Account Statement  :</label>
            <input class="form-control" type="file" name="SavingsAccountStatement" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Savings Account Solvency :</label>
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
            <label class="lebel_title">Financial Statement :</label>
            <input class="form-control" type="file" name="FinancialStatement" id="formFile" required>
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
