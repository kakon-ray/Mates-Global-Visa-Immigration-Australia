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
          <?php
            foreach($UserAttachment as $UserAttachmentData)
            {
                $student_visa_attachment_id=$UserAttachmentData['id'];
                /**************cover_letter*************/
                $cover_letter=$UserAttachmentData['cover_letter'];
                $file_cover_letter=base_url().'others/upload/student_visa_attachment/'.$cover_letter;
                $path_cover_letter = parse_url($file_cover_letter, PHP_URL_PATH);
                $extension_cover_letter = pathinfo($path_cover_letter, PATHINFO_EXTENSION);
                if( $extension_cover_letter == 'jpg' || $extension_cover_letter == 'jpeg' || $extension_cover_letter == 'png')
                {
                    $cover_letter_file_title="1 File Selected";
                    $cover_letter_file_show=base_url().'others/upload/student_visa_attachment/'.$cover_letter;
                }
                elseif($extension_cover_letter == 'pdf')
                {
                    $cover_letter_file_title="1 File Selected";
                    $cover_letter_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_cover_letter == 'doc' || $extension_cover_letter == 'docx')
                {
                    $cover_letter_file_title="1 File Selected";
                    $cover_letter_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $cover_letter_file_title="No File Chosen";
                    $cover_letter_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';

                }
                /**************cover_letter*************/

                /**************cv*************/
                $cv=$UserAttachmentData['cv'];
                $file_cv=base_url().'others/upload/student_visa_attachment/'.$cv;
                $path_cv = parse_url($file_cv, PHP_URL_PATH);
                $extension_cv = pathinfo($path_cv, PATHINFO_EXTENSION);
                if( $extension_cv == 'jpg' || $extension_cv == 'jpeg' || $extension_cv == 'png')
                {
                    $cv_file_title="1 File Selected";
                    $cv_file_show=base_url().'others/upload/student_visa_attachment/'.$cv;
                }
                elseif($extension_cv == 'pdf')
                {
                    $cv_file_title="1 File Selected";
                    $cv_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_cv == 'doc' || $extension_cv == 'docx')
                {
                    $cv_file_title="1 File Selected";
                    $cv_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $cv_file_title="No File Chosen";
                    $cv_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************cv*************/

                /**************job_ex_letter*************/
                $job_ex_letter=$UserAttachmentData['job_ex_letter'];
                $file_job_ex_letter=base_url().'others/upload/student_visa_attachment/'.$job_ex_letter;
                $path_job_ex_letter = parse_url($file_job_ex_letter, PHP_URL_PATH);
                $extension_job_ex_letter = pathinfo($path_job_ex_letter, PATHINFO_EXTENSION);
                if( $extension_job_ex_letter == 'jpg' || $extension_job_ex_letter == 'jpeg' || $extension_job_ex_letter == 'png')
                {
                    $job_ex_letter_file_title="1 File Selected";
                    $job_ex_letter_file_show=base_url().'others/upload/student_visa_attachment/'.$job_ex_letter;
                }
                elseif($extension_job_ex_letter == 'pdf')
                {
                    $job_ex_letter_file_title="1 File Selected";
                    $job_ex_letter_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_job_ex_letter == 'doc' || $extension_job_ex_letter == 'docx')
                {
                    $job_ex_letter_file_title="1 File Selected";
                    $job_ex_letter_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $job_ex_letter_file_title="No File Chosen";
                    $job_ex_letter_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************job_ex_letter*************/

                /**************employment_letter*************/
                $employment_letter=$UserAttachmentData['employment_letter'];
                $file_employment_letter=base_url().'others/upload/student_visa_attachment/'.$employment_letter;
                $path_employment_letter = parse_url($file_employment_letter, PHP_URL_PATH);
                $extension_employment_letter = pathinfo($path_employment_letter, PATHINFO_EXTENSION);
                if( $extension_employment_letter == 'jpg' || $extension_employment_letter == 'jpeg' || $extension_employment_letter == 'png')
                {
                    $employment_letter_file_title="1 File Selected";
                    $employment_letter_file_show=base_url().'others/upload/student_visa_attachment/'.$employment_letter;
                }
                elseif($extension_employment_letter == 'pdf')
                {
                    $employment_letter_file_title="1 File Selected";
                    $employment_letter_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_employment_letter == 'doc' || $extension_employment_letter == 'docx')
                {
                    $employment_letter_file_title="1 File Selected";
                    $employment_letter_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $employment_letter_file_title="No File Chosen";
                    $employment_letter_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************employment_letter*************/

                /**************ielts_pte_certificate*************/
                $ielts_pte_certificate=$UserAttachmentData['ielts_pte_certificate'];
                $file_ielts_pte_certificate=base_url().'others/upload/student_visa_attachment/'.$ielts_pte_certificate;
                $path_ielts_pte_certificate = parse_url($file_ielts_pte_certificate, PHP_URL_PATH);
                $extension_ielts_pte_certificate = pathinfo($path_ielts_pte_certificate, PATHINFO_EXTENSION);
                if( $extension_ielts_pte_certificate == 'jpg' || $extension_ielts_pte_certificate == 'jpeg' || $extension_ielts_pte_certificate == 'png')
                {
                    $ielts_pte_certificate_file_title="1 File Selected";
                    $ielts_pte_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$ielts_pte_certificate;
                }
                elseif($extension_ielts_pte_certificate == 'pdf')
                {
                    $ielts_pte_certificate_file_title="1 File Selected";
                    $ielts_pte_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_ielts_pte_certificate == 'doc' || $extension_ielts_pte_certificate == 'docx')
                {
                    $ielts_pte_certificate_file_title="1 File Selected";
                    $ielts_pte_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $ielts_pte_certificate_file_title="No File Chosen";
                    $ielts_pte_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************ielts_pte_certificate*************/

                /**************masters_certificate*************/
                $masters_certificate=$UserAttachmentData['masters_certificate'];
                $file_masters_certificate=base_url().'others/upload/student_visa_attachment/'.$masters_certificate;
                $path_masters_certificate = parse_url($file_masters_certificate, PHP_URL_PATH);
                $extension_masters_certificate = pathinfo($path_masters_certificate, PATHINFO_EXTENSION);
                if( $extension_masters_certificate == 'jpg' || $extension_masters_certificate == 'jpeg' || $extension_masters_certificate == 'png')
                {
                    $masters_certificate_file_title="1 File Selected";
                    $masters_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$masters_certificate;
                }
                elseif($extension_masters_certificate == 'pdf')
                {
                    $masters_certificate_file_title="1 File Selected";
                    $masters_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_masters_certificate == 'doc' || $extension_masters_certificate == 'docx')
                {
                    $masters_certificate_file_title="1 File Selected";
                    $masters_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $masters_certificate_file_title="No File Chosen";
                    $masters_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************masters_certificate*************/

                /**************masters_mark_sheet*************/
                $masters_mark_sheet=$UserAttachmentData['masters_mark_sheet'];
                $file_masters_mark_sheete=base_url().'others/upload/student_visa_attachment/'.$masters_mark_sheet;
                $path_masters_mark_sheet = parse_url($file_masters_mark_sheete, PHP_URL_PATH);
                $extension_masters_mark_sheet = pathinfo($path_masters_mark_sheet, PATHINFO_EXTENSION);
                if( $extension_masters_mark_sheet == 'jpg' || $extension_masters_mark_sheet == 'jpeg' || $extension_masters_mark_sheet == 'png')
                {
                    $masters_mark_sheet_file_title="1 File Selected";
                    $masters_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/'.$masters_mark_sheet;
                }
                elseif($extension_masters_mark_sheet == 'pdf')
                {
                    $masters_mark_sheet_file_title="1 File Selected";
                    $masters_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_masters_mark_sheet == 'doc' || $extension_masters_mark_sheet == 'docx')
                {
                    $masters_mark_sheet_file_title="1 File Selected";
                    $masters_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $masters_mark_sheet_file_title="No File Chosen";
                    $masters_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************masters_mark_sheet*************/

                /**************graduate_certificate*************/
                $graduate_certificate=$UserAttachmentData['graduate_certificate'];
                $file_graduate_certificate=base_url().'others/upload/student_visa_attachment/'.$graduate_certificate;
                $path_graduate_certificate = parse_url($file_graduate_certificate, PHP_URL_PATH);
                $extension_graduate_certificate = pathinfo($path_graduate_certificate, PATHINFO_EXTENSION);
                if( $extension_graduate_certificate == 'jpg' || $extension_graduate_certificate == 'jpeg' || $extension_graduate_certificate == 'png')
                {
                    $graduate_certificate_file_title="1 File Selected";
                    $graduate_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$graduate_certificate;
                }
                elseif($extension_graduate_certificate == 'pdf')
                {
                    $graduate_certificate_file_title="1 File Selected";
                    $graduate_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_graduate_certificate == 'doc' || $extension_graduate_certificate == 'docx')
                {
                    $graduate_certificate_file_title="1 File Selected";
                    $graduate_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $graduate_certificate_file_title="No File Chosen";
                    $graduate_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************graduate_certificate*************/

                /**************graduate_mark_sheet*************/
                $graduate_mark_sheet=$UserAttachmentData['graduate_mark_sheet'];
                $file_graduate_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$graduate_mark_sheet;
                $path_graduate_mark_sheet = parse_url($file_graduate_mark_sheet, PHP_URL_PATH);
                $extension_graduate_mark_sheet = pathinfo($path_graduate_mark_sheet, PATHINFO_EXTENSION);
                if( $extension_graduate_mark_sheet == 'jpg' || $extension_graduate_mark_sheet == 'jpeg' || $extension_graduate_mark_sheet == 'png')
                {
                    $graduate_mark_sheet_file_title="1 File Selected";
                    $graduate_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/'.$graduate_mark_sheet;
                }
                elseif($extension_graduate_mark_sheet == 'pdf')
                {
                    $graduate_mark_sheet_file_title="1 File Selected";
                    $graduate_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_graduate_mark_sheet == 'doc' || $extension_graduate_mark_sheet == 'docx')
                {
                    $graduate_mark_sheet_file_title="1 File Selected";
                    $graduate_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $graduate_mark_sheet_file_title="No File Chosen";
                    $graduate_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************graduate_mark_sheet*************/

                /**************diploma_certificate*************/
                $diploma_certificate=$UserAttachmentData['diploma_certificate'];
                $file_diploma_certificate=base_url().'others/upload/student_visa_attachment/'.$diploma_certificate;
                $path_diploma_certificate = parse_url($file_diploma_certificate, PHP_URL_PATH);
                $extension_diploma_certificate = pathinfo($path_diploma_certificate, PATHINFO_EXTENSION);
                if( $extension_diploma_certificate == 'jpg' || $extension_diploma_certificate == 'jpeg' || $extension_diploma_certificate == 'png')
                {
                    $diploma_certificate_file_title="1 File Selected";
                    $diploma_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$diploma_certificate;
                }
                elseif($extension_diploma_certificate == 'pdf')
                {
                    $diploma_certificate_file_title="1 File Selected";
                    $diploma_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_diploma_certificate == 'doc' || $extension_diploma_certificate == 'docx')
                {
                    $diploma_certificate_file_title="1 File Selected";
                    $diploma_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $diploma_certificate_file_title="No File Chosen";
                    $diploma_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************diploma_certificate*************/

                /**************diploma_mark_sheet*************/
                $diploma_mark_sheet=$UserAttachmentData['diploma_mark_sheet'];
                $file_diploma_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$diploma_mark_sheet;
                $path_diploma_mark_sheet = parse_url($file_diploma_mark_sheet, PHP_URL_PATH);
                $extension_diploma_mark_sheet = pathinfo($path_diploma_mark_sheet, PATHINFO_EXTENSION);
                if( $extension_diploma_mark_sheet == 'jpg' || $extension_diploma_mark_sheet == 'jpeg' || $extension_diploma_mark_sheet == 'png')
                {
                    $diploma_mark_sheet_file_title="1 File Selected";
                    $diploma_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/'.$diploma_mark_sheet;
                }
                elseif($extension_diploma_mark_sheet == 'pdf')
                {
                    $diploma_mark_sheet_file_title="1 File Selected";
                    $diploma_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_diploma_mark_sheet == 'doc' || $extension_diploma_mark_sheet == 'docx')
                {
                    $diploma_mark_sheet_file_title="1 File Selected";
                    $diploma_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $diploma_mark_sheet_file_title="No File Chosen";
                    $diploma_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************diploma_mark_sheet*************/

                /**************skilled_certificate*************/
                $skilled_certificate=$UserAttachmentData['skilled_certificate'];
                $file_skilled_certificate=base_url().'others/upload/student_visa_attachment/'.$skilled_certificate;
                $path_skilled_certificate = parse_url($file_skilled_certificate, PHP_URL_PATH);
                $extension_skilled_certificate = pathinfo($path_skilled_certificate, PATHINFO_EXTENSION);
                if( $extension_skilled_certificate == 'jpg' || $extension_skilled_certificate == 'jpeg' || $extension_skilled_certificate == 'png')
                {
                    $skilled_certificate_file_title="1 File Selected";
                    $skilled_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$skilled_certificate;
                }
                elseif($extension_skilled_certificate == 'pdf')
                {
                    $skilled_certificate_file_title="1 File Selected";
                    $skilled_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_skilled_certificate == 'doc' || $extension_skilled_certificate == 'docx')
                {
                    $skilled_certificate_file_title="1 File Selected";
                    $skilled_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $skilled_certificate_file_title="No File Chosen";
                    $skilled_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************skilled_certificate*************/

                /**************hsc_certificate*************/
                $hsc_certificate=$UserAttachmentData['hsc_certificate'];
                $file_hsc_certificate=base_url().'others/upload/student_visa_attachment/'.$hsc_certificate;
                $path_hsc_certificate = parse_url($file_hsc_certificate, PHP_URL_PATH);
                $extension_hsc_certificate = pathinfo($path_hsc_certificate, PATHINFO_EXTENSION);
                if( $extension_hsc_certificate == 'jpg' || $extension_hsc_certificate == 'jpeg' || $extension_hsc_certificate == 'png')
                {
                    $hsc_certificate_file_title="1 File Selected";
                    $hsc_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$hsc_certificate;
                }
                elseif($extension_hsc_certificate == 'pdf')
                {
                    $hsc_certificate_file_title="1 File Selected";
                    $hsc_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_hsc_certificate == 'doc' || $extension_hsc_certificate == 'docx')
                {
                    $hsc_certificate_file_title="1 File Selected";
                    $hsc_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $hsc_certificate_file_title="No File Chosen";
                    $hsc_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************hsc_certificate*************/

                /**************hsc_mark_sheet*************/
                $hsc_mark_sheet=$UserAttachmentData['hsc_mark_sheet'];
                $file_hsc_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$hsc_mark_sheet;
                $path_hsc_mark_sheet = parse_url($file_hsc_mark_sheet, PHP_URL_PATH);
                $extension_hsc_mark_sheet = pathinfo($path_hsc_mark_sheet, PATHINFO_EXTENSION);
                if( $extension_hsc_mark_sheet == 'jpg' || $extension_hsc_mark_sheet == 'jpeg' || $extension_hsc_mark_sheet == 'png')
                {
                    $hsc_mark_sheet_file_title="1 File Selected";
                    $hsc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/'.$hsc_mark_sheet;
                }
                elseif($extension_hsc_mark_sheet == 'pdf')
                {
                    $hsc_mark_sheet_file_title="1 File Selected";
                    $hsc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_hsc_mark_sheet == 'doc' || $extension_hsc_mark_sheet == 'docx')
                {
                    $hsc_mark_sheet_file_title="1 File Selected";
                    $hsc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $hsc_mark_sheet_file_title="No File Chosen";
                    $hsc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************hsc_mark_sheet*************/

                /**************ssc_certificate*************/
                $ssc_certificate=$UserAttachmentData['ssc_certificate'];
                $file_ssc_certificate=base_url().'others/upload/student_visa_attachment/'.$ssc_certificate;
                $path_ssc_certificate = parse_url($file_ssc_certificate, PHP_URL_PATH);
                $extension_ssc_certificate = pathinfo($path_ssc_certificate, PATHINFO_EXTENSION);
                if( $extension_ssc_certificate == 'jpg' || $extension_ssc_certificate == 'jpeg' || $extension_ssc_certificate == 'png')
                {
                    $ssc_certificate_file_title="1 File Selected";
                    $ssc_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$ssc_certificate;
                }
                elseif($extension_ssc_certificate == 'pdf')
                {
                    $ssc_certificate_file_title="1 File Selected";
                    $ssc_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_ssc_certificate == 'doc' || $extension_ssc_certificate == 'docx')
                {
                    $ssc_certificate_file_title="1 File Selected";
                    $ssc_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $ssc_certificate_file_title="No File Chosen";
                    $ssc_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************ssc_certificate*************/

                /**************ssc_mark_sheet*************/
                $ssc_mark_sheet=$UserAttachmentData['ssc_mark_sheet'];
                $file_ssc_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$ssc_mark_sheet;
                $path_ssc_mark_sheet = parse_url($file_ssc_mark_sheet, PHP_URL_PATH);
                $extension_ssc_mark_sheet = pathinfo($path_ssc_mark_sheet, PATHINFO_EXTENSION);
                if( $extension_ssc_mark_sheet == 'jpg' || $extension_ssc_mark_sheet == 'jpeg' || $extension_ssc_mark_sheet == 'png')
                {
                    $ssc_mark_sheet_file_title="1 File Selected";
                    $ssc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/'.$ssc_mark_sheet;
                }
                elseif($extension_ssc_mark_sheet == 'pdf')
                {
                    $ssc_mark_sheet_file_title="1 File Selected";
                    $ssc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_ssc_mark_sheet == 'doc' || $extension_ssc_mark_sheet == 'docx')
                {
                    $ssc_mark_sheet_file_title="1 File Selected";
                    $ssc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $ssc_mark_sheet_file_title="No File Chosen";
                    $ssc_mark_sheet_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************ssc_mark_sheet*************/

                /**************passport_copy*************/
                $passport_copy=$UserAttachmentData['passport_copy'];
                $file_passport_copy=base_url().'others/upload/student_visa_attachment/'.$passport_copy;
                $path_passport_copy = parse_url($file_passport_copy, PHP_URL_PATH);
                $extension_passport_copy = pathinfo($path_passport_copy, PATHINFO_EXTENSION);
                if( $extension_passport_copy == 'jpg' || $extension_passport_copy == 'jpeg' || $extension_passport_copy == 'png')
                {
                    $passport_copy_file_title="1 File Selected";
                    $passport_copy_file_show=base_url().'others/upload/student_visa_attachment/'.$passport_copy;
                }
                elseif($extension_passport_copy == 'pdf')
                {
                    $passport_copy_file_title="1 File Selected";
                    $passport_copy_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_passport_copy == 'doc' || $extension_passport_copy == 'docx')
                {
                    $passport_copy_file_title="1 File Selected";
                    $passport_copy_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $passport_copy_file_title="No File Chosen";
                    $passport_copy_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************passport_copy*************/

                /**************birth_certificate*************/
                $birth_certificate=$UserAttachmentData['birth_certificate'];
                $file_birth_certificate=base_url().'others/upload/student_visa_attachment/'.$birth_certificate;
                $path_birth_certificate = parse_url($file_birth_certificate, PHP_URL_PATH);
                $extension_birth_certificate = pathinfo($path_birth_certificate, PATHINFO_EXTENSION);
                if( $extension_birth_certificate == 'jpg' || $extension_birth_certificate == 'jpeg' || $extension_birth_certificate == 'png')
                {
                    $birth_certificate_file_title="1 File Selected";
                    $birth_certificate_file_show=base_url().'others/upload/student_visa_attachment/'.$birth_certificate;
                }
                elseif($extension_birth_certificate == 'pdf')
                {
                    $birth_certificate_file_title="1 File Selected";
                    $birth_certificate_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_birth_certificate == 'doc' || $extension_birth_certificate == 'docx')
                {
                    $birth_certificate_file_title="1 File Selected";
                    $birth_certificate_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $birth_certificate_file_title="No File Chosen";
                    $birth_certificate_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************birth_certificate*************/

                /**************police_clearance_ov*************/
                $police_clearance_ov=$UserAttachmentData['police_clearance_ov'];
                $file_police_clearance_ov=base_url().'others/upload/student_visa_attachment/'.$police_clearance_ov;
                $path_police_clearance_ov = parse_url($file_police_clearance_ov, PHP_URL_PATH);
                $extension_police_clearance_ov = pathinfo($path_police_clearance_ov, PATHINFO_EXTENSION);
                if( $extension_police_clearance_ov == 'jpg' || $extension_police_clearance_ov == 'jpeg' || $extension_police_clearance_ov == 'png')
                {
                    $police_clearance_ov_file_title="1 File Selected";
                    $police_clearance_ov_file_show=base_url().'others/upload/student_visa_attachment/'.$police_clearance_ov;
                }
                elseif($extension_police_clearance_ov == 'pdf')
                {
                    $police_clearance_ov_file_title="1 File Selected";
                    $police_clearance_ov_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_police_clearance_ov == 'doc' || $extension_police_clearance_ov == 'docx')
                {
                    $police_clearance_ov_file_title="1 File Selected";
                    $police_clearance_ov_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $police_clearance_ov_file_title="No File Chosen";
                    $police_clearance_ov_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************police_clearance_ov*************/

                /**************police_clearance_bd*************/
                $police_clearance_bd=$UserAttachmentData['police_clearance_bd'];
                $file_police_clearance_bd=base_url().'others/upload/student_visa_attachment/'.$police_clearance_bd;
                $path_police_clearance_bd = parse_url($file_police_clearance_bd, PHP_URL_PATH);
                $extension_police_clearance_bd = pathinfo($path_police_clearance_bd, PATHINFO_EXTENSION);
                if( $extension_police_clearance_bd == 'jpg' || $extension_police_clearance_bd == 'jpeg' || $extension_police_clearance_bd == 'png')
                {
                    $police_clearance_bd_file_title="1 File Selected";
                    $police_clearance_bd_file_show=base_url().'others/upload/student_visa_attachment/'.$police_clearance_bd;
                }
                elseif($extension_police_clearance_bd == 'pdf')
                {
                    $police_clearance_bd_file_title="1 File Selected";
                    $police_clearance_bd_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_police_clearance_bd == 'doc' || $extension_police_clearance_bd == 'docx')
                {
                    $police_clearance_bd_file_title="1 File Selected";
                    $police_clearance_bd_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $police_clearance_bd_file_title="No File Chosen";
                    $police_clearance_bd_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************police_clearance_bd*************/

                /**************covid_certificate_ov*************/
                $covid_certificate_ov=$UserAttachmentData['covid_certificate_ov'];
                $file_covid_certificate_ov=base_url().'others/upload/student_visa_attachment/'.$covid_certificate_ov;
                $path_covid_certificate_ov = parse_url($file_covid_certificate_ov, PHP_URL_PATH);
                $extension_covid_certificate_ov = pathinfo($path_covid_certificate_ov, PATHINFO_EXTENSION);
                if( $extension_covid_certificate_ov == 'jpg' || $extension_covid_certificate_ov == 'jpeg' || $extension_covid_certificate_ov == 'png')
                {
                    $covid_certificate_ov_file_title="1 File Selected";
                    $covid_certificate_ov_file_show=base_url().'others/upload/student_visa_attachment/'.$covid_certificate_ov;
                }
                elseif($extension_covid_certificate_ov == 'pdf')
                {
                    $covid_certificate_ov_file_title="1 File Selected";
                    $covid_certificate_ov_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_covid_certificate_ov == 'doc' || $extension_covid_certificate_ov == 'docx')
                {
                    $covid_certificate_ov_file_title="1 File Selected";
                    $covid_certificate_ov_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $covid_certificate_ov_file_title="No File Chosen";
                    $covid_certificate_ov_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************covid_certificate_ov*************/

                /**************covid_certificate_bd*************/
                $covid_certificate_bd=$UserAttachmentData['covid_certificate_bd'];
                $file_covid_certificate_bd=base_url().'others/upload/student_visa_attachment/'.$covid_certificate_bd;
                $path_covid_certificate_bd = parse_url($file_covid_certificate_bd, PHP_URL_PATH);
                $extension_covid_certificate_bd = pathinfo($path_covid_certificate_bd, PATHINFO_EXTENSION);
                if( $extension_covid_certificate_bd == 'jpg' || $extension_covid_certificate_bd == 'jpeg' || $extension_covid_certificate_bd == 'png')
                {
                    $covid_certificate_bd_file_title="1 File Selected";
                    $covid_certificate_bd_file_show=base_url().'others/upload/student_visa_attachment/'.$covid_certificate_bd;
                }
                elseif($extension_covid_certificate_bd == 'pdf')
                {
                    $covid_certificate_bd_file_title="1 File Selected";
                    $covid_certificate_bd_file_show=base_url().'others/upload/student_visa_attachment/pdf.png';
                }
                elseif($extension_covid_certificate_bd == 'doc' || $extension_covid_certificate_bd == 'docx')
                {
                    $covid_certificate_bd_file_title="1 File Selected";
                    $covid_certificate_bd_file_show=base_url().'others/upload/student_visa_attachment/word.png';
                }
                else
                {
                    $covid_certificate_bd_file_title="No File Chosen";
                    $covid_certificate_bd_file_show=base_url().'others/upload/student_visa_attachment/no_file.png';
                }
                /**************covid_certificate_bd*************/

            }
          ?>


            <div class="basic-form">
                <form class="form-valide-with-icon needs-validation" action="<?php echo base_url(); ?>user/attachment_update" method="post" enctype="multipart/form-data">
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
                                                <span class="btcd-f-title"><?php echo $cover_letter_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="CoverLetter" value="<?php echo $cover_letter; ?>" id="">
                                                <input type="hidden" name="CoverLetter" value="<?php echo $cover_letter; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $cover_letter_file_show; ?>" alt="img" title="<?php echo $cover_letter; ?>">
                                                    <div>
                                                        <span title="<?php echo $cover_letter; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $cv_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="Cv" value="<?php echo $cv ;?>" id="">
                                                <input type="hidden" name="Cv" value="<?php echo $cv; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $cv_file_show; ?>" alt="img" title="<?php echo $cv; ?>">
                                                    <div>
                                                        <span title="<?php echo $cv; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $job_ex_letter_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="JobExperienceLetter" value="<?php echo $job_ex_letter; ?>" id="">
                                                <input type="hidden" name="JobExperienceLetter" value="<?php echo $job_ex_letter; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $job_ex_letter_file_show; ?>" alt="img" title="<?php echo $job_ex_letter; ?>">
                                                    <div>
                                                        <span title="<?php echo $job_ex_letter; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $employment_letter_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="EmploymentLetter" value="<?php echo $employment_letter; ?>" id="">
                                                <input type="hidden" name="EmploymentLetter" value="<?php echo $employment_letter; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $employment_letter_file_show; ?>" alt="img" title="<?php echo $employment_letter; ?>">
                                                    <div>
                                                        <span title="<?php echo $employment_letter; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <span>Attach File</span>
                                                </button>
                                                <span class="btcd-f-title"><?php echo $ielts_pte_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="IeltsPteCertificate" value="<?php echo $ielts_pte_certificate; ?>" id="">
                                                <input type="hidden" name="IeltsPteCertificate" value="<?php echo $ielts_pte_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $ielts_pte_certificate_file_show; ?>" alt="img" title="<?php echo $ielts_pte_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $ielts_pte_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $masters_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="MastersCertificate" value="<?php echo $masters_certificate; ?>" id="">
                                                <input type="hidden" name="MastersCertificate" value="<?php echo $masters_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $masters_certificate_file_show; ?>" alt="img" title="<?php echo $masters_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $masters_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $masters_mark_sheet_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="MastersMarkSheet" value="<?php echo $masters_mark_sheet; ?>" id="">
                                                <input type="hidden" name="MastersMarkSheet" value="<?php echo $masters_mark_sheet; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $masters_mark_sheet_file_show; ?>" alt="img" title="<?php echo $masters_mark_sheet; ?>">
                                                    <div>
                                                        <span title="<?php echo $masters_mark_sheet; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $graduate_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="GraduateCertificate" value="<?php echo $graduate_certificate; ?>" id="">
                                                <input type="hidden" name="GraduateCertificate" value="<?php echo $graduate_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $graduate_certificate_file_show; ?>" alt="img" title="<?php echo $graduate_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $graduate_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $graduate_mark_sheet_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="GraduateMarkSheet" value="<?php echo $graduate_mark_sheet; ?>" id="">
                                                <input type="hidden" name="GraduateMarkSheet" value="<?php echo $graduate_mark_sheet; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $graduate_mark_sheet_file_show; ?>" alt="img" title="<?php echo $graduate_mark_sheet; ?>">
                                                    <div>
                                                        <span title="<?php echo $graduate_mark_sheet; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $diploma_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="DiplomaCertificate" value="<?php echo $diploma_certificate; ?>" id="">
                                                <input type="hidden" name="DiplomaCertificate" value="<?php echo $diploma_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $diploma_certificate_file_show; ?>" alt="img" title="<?php echo $diploma_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $diploma_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $diploma_mark_sheet_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="DiplomaMarkSheet" value="<?php echo $diploma_mark_sheet; ?>" id="">
                                                <input type="hidden" name="DiplomaMarkSheet" value="<?php echo $diploma_mark_sheet; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $diploma_mark_sheet_file_show; ?>" alt="img" title="<?php echo $diploma_mark_sheet; ?>">
                                                    <div>
                                                        <span title="<?php echo $diploma_mark_sheet; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $skilled_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="SkilledCertificate" value="<?php echo $skilled_certificate; ?>" id="">
                                                <input type="hidden" name="SkilledCertificate" value="<?php echo $skilled_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $skilled_certificate_file_show; ?>" alt="img" title="<?php echo $skilled_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $skilled_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $hsc_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="HscCertificate" value="<?php echo $hsc_certificate; ?>" id="">
                                                <input type="hidden" name="HscCertificate" value="<?php echo $hsc_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $hsc_certificate_file_show; ?>" alt="img" title="<?php echo $hsc_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $hsc_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $hsc_mark_sheet_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="HscMarkSheet" value="<?php echo $hsc_mark_sheet; ?>" id="">
                                                <input type="hidden" name="HscMarkSheet" value="<?php echo $hsc_mark_sheet; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $hsc_mark_sheet_file_show; ?>" alt="img" title="<?php echo $hsc_mark_sheet; ?>">
                                                    <div>
                                                        <span title="<?php echo $hsc_mark_sheet; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $ssc_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="SscCertificate" value="<?php echo $ssc_certificate; ?>" id="">
                                                <input type="hidden" name="SscCertificate" value="<?php echo $ssc_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $ssc_certificate_file_show; ?>" alt="img" title="<?php echo $ssc_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $ssc_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $ssc_mark_sheet_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="SscMarkSheet" value="<?php echo $ssc_mark_sheet; ?>" id="">
                                                <input type="hidden" name="SscMarkSheet" value="<?php echo $ssc_mark_sheet; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $ssc_mark_sheet_file_show; ?>" alt="img" title="<?php echo $ssc_mark_sheet; ?>">
                                                    <div>
                                                        <span title="<?php echo $ssc_mark_sheet; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $passport_copy_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="PassportCopy" value="<?php echo $passport_copy; ?>" id="">
                                                <input type="hidden" name="PassportCopy" value="<?php echo $passport_copy; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $passport_copy_file_show; ?>" alt="img" title="<?php echo $passport_copy; ?>">
                                                    <div>
                                                        <span title="<?php echo $passport_copy; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $birth_certificate_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="BirthCertificate" value="<?php echo $birth_certificate; ?>" id="">
                                                <input type="hidden" name="BirthCertificate" value="<?php echo $birth_certificate; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $birth_certificate_file_show; ?>" alt="img" title="<?php echo $birth_certificate; ?>">
                                                    <div>
                                                        <span title="<?php echo $birth_certificate; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $police_clearance_ov_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="PoliceClearanceCertificateOverseas" value="<?php echo $police_clearance_ov; ?>" id="">
                                                <input type="hidden" name="PoliceClearanceCertificateOverseas" value="<?php echo $police_clearance_ov; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $police_clearance_ov_file_show; ?>" alt="img" title="<?php echo $police_clearance_ov; ?>">
                                                    <div>
                                                        <span title="<?php echo $police_clearance_ov; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $police_clearance_bd_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="PoliceClearanceCertificateBd" value="<?php echo $police_clearance_bd; ?>" id="">
                                                <input type="hidden" name="PoliceClearanceCertificateBd" value="<?php echo $police_clearance_bd; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $police_clearance_bd_file_show; ?>" alt="img" title="<?php echo $police_clearance_bd; ?>">
                                                    <div>
                                                        <span title="<?php echo $police_clearance_bd; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 mb-3">
                                <div class="example">
                                    <label class="text-secondary font-w500">Covid Certificate (Overseas)<span class="text-success">*</span></label>
                                    <div class="form-control-attachment" style="margin-top: 0px;">
                                        <div class="btcd-f-input">
                                            <div class="btcd-f-wrp">
                                                <button class="btcd-inpBtn" type="button">
                                                    <img src="" alt="">
                                                    <span>Attach File</span>
                                                </button>
                                                <span class="btcd-f-title"><?php echo $covid_certificate_ov_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="CovidCertificateOverseas" value="<?php echo $covid_certificate_ov; ?>">
                                                <input type="hidden" name="CovidCertificateOverseas" value="<?php echo $covid_certificate_ov; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $covid_certificate_ov_file_show; ?>" alt="img" title="<?php echo $covid_certificate_ov; ?>">
                                                    <div>
                                                        <span title="<?php echo $covid_certificate_ov; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <span class="btcd-f-title"><?php echo $covid_certificate_bd_file_title; ?></span>
                                                <small class="f-max"></small>
                                                <input type="file" name="CovidCertificateBd" value="<?php echo $covid_certificate_bd; ?>" id="">
                                                <input type="hidden" name="CovidCertificateBd" value="<?php echo $covid_certificate_bd; ?>">
                                            </div>
                                            <div class="btcd-files">
                                                <div>
                                                    <img src="<?php echo $covid_certificate_bd_file_show; ?>" alt="img" title="<?php echo $covid_certificate_bd; ?>">
                                                    <div>
                                                        <span title="<?php echo $covid_certificate_bd; ?>"></span><br><small></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="StudentVisaCountry" value="Australia">
                    <input type="hidden" name="StudentVisaAttachmentId" value="<?php echo $student_visa_attachment_id; ?>">
                    <button type="submit" class="btn me-2 btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
