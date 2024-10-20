<style>
    .btcd-f-input {
        display: inline-block;
        width: 100%;
        position: relative;
        overflow: hidden;
        margin-top: 9px;
        margin-left: -11px;
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
        padding: 12px;
        display: inline-block;
        border-radius: 9px;
        border: none;
        margin-right: 0px;
        height: 45px;
    }

    .btcd-f-wrp > button > img {
        width: 24px;
        margin-top: -13px;
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
        margin-left: 242px;
        width: 47%;
        margin-top: -49px;
        height: 46px;
    }

    .btcd-files > div > div {
        display: inline-block;
        width: 100%;
    }

    .btcd-files > div > div > small {
        color: gray;
    }

    .btcd-files > div > img {
        position: absolute;
        width: 60px;
        height: 60px;
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
    .form-control-attachment{
        font-size: 15px;
        height: 62px;
        border: none;
        outline: none;
        padding-left: 20px;
        border-radius: 8px;
        -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

</style>


<div class="content-body">
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Attachment</a></li>
        <!--        <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>-->
    </ol>
</div>
<div class="container-fluid">

<!-- row -->
<div class="row">
<div class="col-lg-12">
<?php if ( $this->session->flashdata( 'message' ) ) : ?>
    <?php echo $this->session->flashdata( 'message' ); ?>
<?php endif; ?>
<div class="card">
<div class="card-header">
    <h4 class="card-title">APPLICANT IDENTITY DOCUMENTS</h4>
</div>
<div class="card-body">
<div class="basic-form">
<form class="form-valide-with-icon needs-validation" action="<?php echo base_url(); ?>user/attachment_submit" method="post" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Cover Letter<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span> Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="CoverLetter" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">CV<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="Cv" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Job Experience Letter<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span> Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="JobExperienceLetter" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Employment Letter<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="EmploymentLetter" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">IELTS / PTE Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span> Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="IeltsPteCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Masters Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="MastersCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Masters Mark Sheet<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="MastersMarkSheet" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Graduate Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="GraduateCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Graduate Mark Sheet<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="GraduateMarkSheet" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Diploma Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="DiplomaCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Diploma Mark Sheet<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span> Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="DiplomaMarkSheet" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Skilled Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="SkilledCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">H.S.C Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="HscCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">H.S.C Mark Sheet<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="HscMarkSheet" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">S.S.C Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="SscCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">S.S.C Mark Sheet<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span> Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="SscMarkSheet" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Passport Copy<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="PassportCopy" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Birth Certificate<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="BirthCertificate" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Police Clearance Certificate (Overseas)<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="PoliceClearanceCertificateOverseas" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Police Clearance Certificate (BD)<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="PoliceClearanceCertificateBd" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Covid Certificate ( Overseas)<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="CovidCertificateOverseas">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 mb-3">
    <div class="example">
        <label class="text-secondary font-w500">Covid Certificate (BD)<span class="text-success">*</span></label>
        <div class="form-control-attachment" style="margin-top: 0px;">
            <div class="btcd-f-input">
                <div class="btcd-f-wrp">
                    <button class="btcd-inpBtn" type="button">
                        <img src="" alt="">
                        <span>Attach File</span>
                    </button>
                    <span class="btcd-f-title">No File Chosen</span>
                    <small class="f-max"></small>
                    <input type="file" name="CovidCertificateBd" id="">
                </div>
                <div class="btcd-files"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<input type="hidden" name="StudentVisaCountry" value="Australia">
<button type="submit" class="btn me-2 btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
