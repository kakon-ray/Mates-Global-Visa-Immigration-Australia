<!--End Main Header -->
<section class="page-title" style="background-image: url(<?php echo base_url(); ?>others/images/background/page-title6.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h4 style="color: white">Attachment List for Malaysia Student Visa</h4>
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
            <label class="lebel_title">Photographs (3.5cm X 3.5cm) :</label>
            <input class="form-control" type="file" name="Photographs" id="formFile" required>
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
            <label class="lebel_title">Vaccine Certificate :</label>
            <input class="form-control" type="file" name="VaccineCertificate" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Acceptance Letter :</label>
            <input class="form-control" type="file" name="AcceptanceLetter" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Offer Letter :</label>
            <input class="form-control" type="file" name="OfferLetter" id="formFile" required>
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
            <label class="lebel_title">Degree Certificate :</label>
            <input class="form-control" type="file" name="DegreeCertificate" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Degree Mark Sheet :</label>
            <input class="form-control" type="file" name="DegreeMarkSheet" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Master or MBA Certificate :</label>
            <input class="form-control" type="file" name="MBACertificate" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Masters or MBA Mark Sheet :</label>
            <input class="form-control" type="file" name="MBAMarkSheet" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">IELTS Certificate :</label>
            <input class="form-control" type="file" name="IELTSCertificate" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Others English Language Certificate:</label>
            <input class="form-control" type="file" name="OthersEnglishLanguageCertificate" id="formFile" required>
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
            <label class="lebel_title">Bank Solvency :</label>
            <input class="form-control" type="file" name="BankSolvency" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Medical Exam Report  :</label>
            <input class="form-control" type="file" name="MedicalExamReport" id="formFile" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Health Insurance :</label>
            <input class="form-control" type="file" name="HealthInsurance" id="formFile" required>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Declaration Form :</label>
            <input class="form-control" type="file" name="DeclarationForm" id="formFile">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="mb-3">
            <label class="lebel_title">Application Form (Imm.14):</label>
            <input class="form-control" type="file" name="ApplicationFormImm14" id="formFile">
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


