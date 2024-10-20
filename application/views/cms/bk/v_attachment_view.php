<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="global connex">
    <meta name="author" content="Ashish Fouzder">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Global Connex Admin">
    <meta property="og:title" content="Global Connex Admin">
    <meta property="og:description" content="Global Connex Admin">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Global Connex | CMS</title>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url(); ?>others/cms/images/favicon.png" type="image/x-icon">
    <link href="<?php echo base_url(); ?>others/cms/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/vendor/tagify/dist/tagify.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/css/style.css" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="#" class="brand-logo">
        <svg class="logo-abbr" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <a href="#"><img src="<?php echo base_url(); ?>others/cms/images/logo.png" width="50" height="50" alt=""></a>
        </svg>
        <svg class="brand-title" width="47" height="16" viewBox="0 0 47 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.36 15.2C7.2933 15.2 6.3 15.0267 5.38 14.68C4.4733 14.32 3.68 13.82 3 13.18C2.3333 12.5267 1.8133 11.76 1.44 10.88C1.0667 9.99999 0.880005 9.03999 0.880005 7.99999C0.880005 6.95999 1.0667 5.99999 1.44 5.11999C1.8133 4.23999 2.34 3.47999 3.02 2.83999C3.7 2.18666 4.49331 1.68666 5.40001 1.33999C6.30671 0.979988 7.3 0.799988 8.38 0.799988C9.5267 0.799988 10.5733 0.999988 11.52 1.39999C12.4667 1.78666 13.2667 2.36666 13.92 3.13999L12.24 4.71999C11.7333 4.17332 11.1667 3.76666 10.54 3.49999C9.9133 3.21999 9.2333 3.07999 8.5 3.07999C7.7667 3.07999 7.0933 3.19999 6.48 3.43999C5.88 3.67999 5.35331 4.01999 4.90001 4.45999C4.46001 4.89999 4.1133 5.41999 3.86 6.01999C3.62 6.61999 3.5 7.27999 3.5 7.99999C3.5 8.71999 3.62 9.37999 3.86 9.97999C4.1133 10.58 4.46001 11.1 4.90001 11.54C5.35331 11.98 5.88 12.32 6.48 12.56C7.0933 12.8 7.7667 12.92 8.5 12.92C9.2333 12.92 9.9133 12.7867 10.54 12.52C11.1667 12.24 11.7333 11.82 12.24 11.26L13.92 12.86C13.2667 13.62 12.4667 14.2 11.52 14.6C10.5733 15 9.52 15.2 8.36 15.2ZM16.4113 15V0.999988H22.1713C23.4113 0.999988 24.4713 1.19999 25.3513 1.59999C26.2446 1.99999 26.9313 2.57332 27.4113 3.31999C27.8913 4.06666 28.1313 4.95332 28.1313 5.97999C28.1313 7.00669 27.8913 7.89329 27.4113 8.63999C26.9313 9.37329 26.2446 9.93999 25.3513 10.34C24.4713 10.7267 23.4113 10.92 22.1713 10.92H17.8513L19.0113 9.73999V15H16.4113ZM25.5713 15L22.0313 9.91999H24.8112L28.3713 15H25.5713ZM19.0113 10.02L17.8513 8.77999H22.0513C23.1979 8.77999 24.0579 8.53329 24.6312 8.03999C25.2179 7.54669 25.5113 6.85999 25.5113 5.97999C25.5113 5.08666 25.2179 4.39999 24.6312 3.91999C24.0579 3.43999 23.1979 3.19999 22.0513 3.19999H17.8513L19.0113 1.91999V10.02ZM31.0402 15V0.999988H33.1802L39.3002 11.22H38.1802L44.2002 0.999988H46.3402L46.3602 15H43.9002L43.8802 4.85999H44.4002L39.2802 13.4H38.1202L32.9202 4.85999H33.5202V15H31.0402Z" fill="black"/>
        </svg>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <form>
                        <div class="input-group search-area">
							<span class="input-group-text"><button class="bg-transparent border-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.5168 14.9447L17.7471 18.1667" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-fullscreen"  href="javascript:void(0);">
                            <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                            <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                        </a>
                    </li>
                    <li class="nav-item ps-3">
                        <div class="dropdown header-profile2">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="header-info2 d-flex align-items-center">
                                    <div class="header-media">
                                        <img src="<?php echo base_url(); ?>others/cms/images/tab/admin.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6>CMS ADMIN</h6>
                                        <p>info@globalconnex.com.au</p>
                                    </div>

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <div class="card border-0 mb-0">
                                    <div class="card-header py-2">
                                        <div class="products">
                                            <img src="<?php echo base_url(); ?>others/cms/images/tab/admin.png" class="avatar avatar-md" alt="">
                                            <div>
                                                <h6>CMS ADMIN</h6>
                                                <span>admin</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer px-0 py-2">
                                        <a href="#" class="dropdown-item ai-icon ">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <circle cx="12.175" cy="11.889" r="2.63616" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            <span class="ms-2">Settings </span>
                                        </a>
                                        <a href="<?php echo base_url(); ?>logout" class="dropdown-item ai-icon">
                                            <svg class="profle-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ms-2 text-danger">Logout </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<?php  $this->load->view('cms/v_side_menu', $this->data); ?>


<!--**********************************
    Sidebar end
***********************************-->

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
<!-- row -->
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Attachments</h5></li>
    </ol>
    <!--    <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>-->
</div>
<div class="container-fluid">
<div class="row">
<div class="col-xl-12">
<div class="card">
<div class="card-body p-0">
<div class="table-responsive active-projects style-1">
<div class="tbl-caption">
    <h4 class="heading mb-0">Attachments</h4>
    <div>
        <style>
            .active-projects.style-1 .dt-buttons .dt-button{
                display: none;
            }

            .popup,
            .pdf_popup {
                display: none;
                position: fixed;
                z-index: 1;
                left: 160px;
                top: 43px;
                width: 87%;
                height: 100%;
                overflow: hidden;
                background-color: rgba(0, 0, 0, 0.5);
                animation: fadeIn 0.2s ease-in-out;
            }

            .popup img {
                display: block;
                position: relative;
                max-width: 90%;
                max-height: 90%;
                margin: 45px auto;
            }

            .pdf_popup embed {
                display: block;
                position: relative;
                width: 65%;
                height: 90%;
                margin: 45px auto;
            }

            .close {
                color: #fff;
                position: absolute;
                top: 10px;
                right: 15px;
                font-size: 30px;
                cursor: pointer;
            }

            @keyframes fadeIn {
                from {
                    scale: 0;
                }

                to {
                    scale: 1;
                }
            }
        </style>
        <form action="#" method="GET">
            <input type="hidden" name="user_id" value="">
            <button type="submit"
                    class="btn btn-primary btn-sm">
                <i class="fa-solid fa-download"></i>
                <small>Download All</small>
            </button>
        </form>
    </div>
</div>


<div class="table-responsive">
<table class="table table-responsive-md">
<thead>
<tr>
    <th style="text-align: left;">SELECT</th>
    <th style="text-align: left;">NAME</th>
    <th style="text-align: left;">ATTACHMENT</th>
    <th style="text-align: left;">COUNTRY</th>
    <th style="text-align: center;">ACTION</th>
    <th></th>
</tr>
</thead>

<?php
foreach($Attachment as $AttachmentData)
{
    $attachment_id=$AttachmentData['id'];
    $user_basic_id=$AttachmentData['user_basic_id'];

    $cover_letter=$AttachmentData['cover_letter'];
    $file_letter_url=base_url().'others/upload/student_visa_attachment/'.$cover_letter;

    $path = parse_url($file_letter_url, PHP_URL_PATH);
    $extension = pathinfo($path, PATHINFO_EXTENSION);

    if( $extension == 'jpg' || $extension == 'jpeg' || $extension == 'png')
    {
        $cover_letter_file_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Cover Letter.".$extension;
    }
    elseif($extension == 'pdf')
    {
        $cover_letter_file_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Cover Letter.".$extension;
    }
    elseif($extension == 'doc' || $extension == 'docx')
    {
        $cover_letter_file_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Cover Letter.".$extension;
    }

    /*************CV***********/
    $cv=$AttachmentData['cv'];
    $file_letter_url_cv=base_url().'others/upload/student_visa_attachment/'.$cv;
    $path_cv = parse_url($file_letter_url_cv, PHP_URL_PATH);
    $extension_cv = pathinfo($path_cv, PATHINFO_EXTENSION);
    if( $extension_cv == 'jpg' || $extension_cv == 'jpeg' || $extension_cv == 'png')
    {
        $cv_file_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."cv.".$extension_cv;
    }
    elseif($extension_cv == 'pdf')
    {
        $cv_file_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."cv.".$extension_cv;
    }
    elseif($extension_cv == 'doc' || $extension_cv == 'docx')
    {
        $cv_file_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."cv.".$extension_cv;
    }
    /*************CV***********/

    /*************job_ex_letter***********/
    $job_ex_letter=$AttachmentData['job_ex_letter'];
    $file_letter_url_job_ex_letter=base_url().'others/upload/student_visa_attachment/'.$job_ex_letter;
    $path_job_ex_letter = parse_url($file_letter_url_job_ex_letter, PHP_URL_PATH);
    $extension_job_ex_letter = pathinfo($path_job_ex_letter, PATHINFO_EXTENSION);
    if( $extension_job_ex_letter == 'jpg' || $extension_job_ex_letter == 'jpeg' || $extension_job_ex_letter == 'png')
    {
        $job_ex_letter_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Job Experience Letter.".$extension_job_ex_letter;
    }
    elseif($extension_job_ex_letter == 'pdf')
    {
        $job_ex_letter_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Job Experience Letter.".$extension_job_ex_letter;
    }
    elseif($extension_cv == 'doc' || $extension_cv == 'docx')
    {
        $job_ex_letter_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Job Experience Letter.".$extension_job_ex_letter;
    }
    /*************job_ex_letter***********/

    /*************employment_letter***********/
    $employment_letter=$AttachmentData['employment_letter'];
    $file_url_employment_letter=base_url().'others/upload/student_visa_attachment/'.$employment_letter;
    $path_employment_letter = parse_url($file_url_employment_letter, PHP_URL_PATH);
    $extension_employment_letter = pathinfo($path_employment_letter, PATHINFO_EXTENSION);
    if( $extension_employment_letter == 'jpg' || $extension_employment_letter == 'jpeg' || $extension_employment_letter == 'png')
    {
        $employment_letter_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Employment Letter.".$extension_employment_letter;
    }
    elseif($extension_employment_letter == 'pdf')
    {
        $employment_letter_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Employment Letter.".$extension_employment_letter;
    }
    elseif($extension_employment_letter == 'doc' || $extension_employment_letter == 'docx')
    {
        $employment_letter_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Employment Letter.".$extension_employment_letter;
    }
    /*************employment_letter***********/

    /*************ielts_pte_certificate***********/
    $ielts_pte_certificate=$AttachmentData['ielts_pte_certificate'];
    $file_url_ielts_pte_certificate=base_url().'others/upload/student_visa_attachment/'.$ielts_pte_certificate;
    $path_ielts_pte_certificate = parse_url($file_url_ielts_pte_certificate, PHP_URL_PATH);
    $extension_ielts_pte_certificate = pathinfo($path_ielts_pte_certificate, PATHINFO_EXTENSION);
    if( $extension_ielts_pte_certificate == 'jpg' || $extension_ielts_pte_certificate == 'jpeg' || $extension_ielts_pte_certificate == 'png')
    {
        $ielts_pte_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."IELTS-PTE Certificate.".$extension_ielts_pte_certificate;
    }
    elseif($extension_ielts_pte_certificate == 'pdf')
    {
        $ielts_pte_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."IELTS-PTE Certificate.".$extension_ielts_pte_certificate;
    }
    elseif($extension_ielts_pte_certificate == 'doc' || $extension_ielts_pte_certificate == 'docx')
    {
        $ielts_pte_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."IELTS-PTE Certificate.".$extension_ielts_pte_certificate;
    }
    /*************ielts_pte_certificate***********/

    /*************masters_certificate***********/
    $masters_certificate=$AttachmentData['masters_certificate'];
    $file_url_masters_certificate=base_url().'others/upload/student_visa_attachment/'.$masters_certificate;
    $path_masters_certificate = parse_url($file_url_masters_certificate, PHP_URL_PATH);
    $extension_masters_certificate = pathinfo($path_masters_certificate, PATHINFO_EXTENSION);
    if( $extension_masters_certificate == 'jpg' || $extension_masters_certificate == 'jpeg' || $extension_masters_certificate == 'png')
    {
        $masters_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Masters Certificate.".$extension_masters_certificate;
    }
    elseif($extension_masters_certificate == 'pdf')
    {
        $masters_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Masters Certificate.".$extension_masters_certificate;
    }
    elseif($extension_masters_certificate == 'doc' || $extension_masters_certificate == 'docx')
    {
        $masters_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Masters Certificate.".$extension_masters_certificate;
    }
    /*************masters_certificate***********/

    /*************masters_mark_sheet***********/
    $masters_mark_sheet=$AttachmentData['masters_mark_sheet'];
    $file_url_masters_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$masters_mark_sheet;
    $path_masters_mark_sheet = parse_url($file_url_masters_mark_sheet, PHP_URL_PATH);
    $extension_masters_mark_sheet = pathinfo($path_masters_mark_sheet, PATHINFO_EXTENSION);
    if( $extension_masters_mark_sheet == 'jpg' || $extension_masters_mark_sheet == 'jpeg' || $extension_masters_mark_sheet == 'png')
    {
        $masters_mark_sheet_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Masters Mark Sheet.".$extension_masters_mark_sheet;
    }
    elseif($extension_masters_mark_sheet == 'pdf')
    {
        $masters_mark_sheet_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Masters Mark Sheet.".$extension_masters_mark_sheet;
    }
    elseif($extension_masters_mark_sheet == 'doc' || $extension_masters_mark_sheet == 'docx')
    {
        $masters_mark_sheet_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Masters Mark Sheet.".$extension_masters_mark_sheet;
    }
    /*************masters_mark_sheet***********/

    /*************graduate_certificate***********/
    $graduate_certificate=$AttachmentData['graduate_certificate'];
    $file_url_graduate_certificate=base_url().'others/upload/student_visa_attachment/'.$graduate_certificate;
    $path_graduate_certificate = parse_url($file_url_graduate_certificate, PHP_URL_PATH);
    $extension_graduate_certificate = pathinfo($path_graduate_certificate, PATHINFO_EXTENSION);
    if( $extension_graduate_certificate == 'jpg' || $extension_graduate_certificate == 'jpeg' || $extension_graduate_certificate == 'png')
    {
        $graduate_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Graduate Certificate.".$extension_graduate_certificate;
    }
    elseif($extension_graduate_certificate == 'pdf')
    {
        $graduate_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Graduate Certificate.".$extension_graduate_certificate;
    }
    elseif($extension_graduate_certificate == 'doc' || $extension_graduate_certificate == 'docx')
    {
        $graduate_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Graduate Certificate.".$extension_graduate_certificate;
    }
    /*************graduate_certificate***********/

    /*************graduate_mark_sheet***********/
    $graduate_mark_sheet=$AttachmentData['graduate_mark_sheet'];
    $file_url_graduate_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$graduate_mark_sheet;
    $path_graduate_mark_sheet = parse_url($file_url_graduate_mark_sheet, PHP_URL_PATH);
    $extension_graduate_mark_sheet = pathinfo($path_graduate_mark_sheet, PATHINFO_EXTENSION);
    if( $extension_graduate_mark_sheet == 'jpg' || $extension_graduate_mark_sheet == 'jpeg' || $extension_graduate_mark_sheet == 'png')
    {
        $graduate_mark_sheet_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Graduate Mark Sheet.".$extension_graduate_mark_sheet;
    }
    elseif($extension_graduate_mark_sheet == 'pdf')
    {
        $graduate_mark_sheet_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Graduate Mark Sheet.".$extension_graduate_mark_sheet;
    }
    elseif($extension_graduate_mark_sheet == 'doc' || $extension_graduate_mark_sheet == 'docx')
    {
        $graduate_mark_sheet_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Graduate Mark Sheet.".$extension_graduate_mark_sheet;
    }
    /*************graduate_mark_sheet***********/

    /*************diploma_certificate***********/
    $diploma_certificate=$AttachmentData['diploma_certificate'];
    $file_url_diploma_certificate=base_url().'others/upload/student_visa_attachment/'.$diploma_certificate;
    $path_diploma_certificate = parse_url($file_url_diploma_certificate, PHP_URL_PATH);
    $extension_diploma_certificate = pathinfo($path_diploma_certificate, PATHINFO_EXTENSION);
    if( $extension_diploma_certificate == 'jpg' || $extension_diploma_certificate == 'jpeg' || $extension_diploma_certificate == 'png')
    {
        $diploma_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Diploma Certificate.".$extension_diploma_certificate;
    }
    elseif($extension_diploma_certificate == 'pdf')
    {
        $diploma_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Diploma Certificate.".$extension_diploma_certificate;
    }
    elseif($extension_diploma_certificate == 'doc' || $extension_diploma_certificate == 'docx')
    {
        $diploma_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Diploma Certificate.".$extension_diploma_certificate;
    }
    /*************diploma_certificate***********/

    /*************diploma_mark_sheet***********/
    $diploma_mark_sheet=$AttachmentData['diploma_mark_sheet'];
    $file_url_diploma_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$diploma_mark_sheet;
    $path_diploma_mark_sheet = parse_url($file_url_diploma_mark_sheet, PHP_URL_PATH);
    $extension_diploma_mark_sheet = pathinfo($path_diploma_mark_sheet, PATHINFO_EXTENSION);
    if( $extension_diploma_mark_sheet == 'jpg' || $extension_diploma_mark_sheet == 'jpeg' || $extension_diploma_mark_sheet == 'png')
    {
        $diploma_mark_sheet_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Diploma Mark Sheet.".$extension_diploma_mark_sheet;
    }
    elseif($extension_diploma_mark_sheet == 'pdf')
    {
        $diploma_mark_sheet_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Diploma Mark Sheet.".$extension_diploma_mark_sheet;
    }
    elseif($extension_diploma_mark_sheet == 'doc' || $extension_diploma_mark_sheet == 'docx')
    {
        $diploma_mark_sheet_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Diploma Mark Sheet.".$extension_diploma_mark_sheet;
    }
    /*************diploma_mark_sheet***********/

    /*************skilled_certificate***********/
    $skilled_certificate=$AttachmentData['skilled_certificate'];
    $file_url_skilled_certificate=base_url().'others/upload/student_visa_attachment/'.$skilled_certificate;
    $path_skilled_certificate = parse_url($file_url_skilled_certificate, PHP_URL_PATH);
    $extension_skilled_certificate = pathinfo($path_skilled_certificate, PATHINFO_EXTENSION);
    if( $extension_skilled_certificate == 'jpg' || $extension_skilled_certificate == 'jpeg' || $extension_skilled_certificate == 'png')
    {
        $skilled_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Skilled Certificate.".$extension_skilled_certificate;
    }
    elseif($extension_skilled_certificate == 'pdf')
    {
        $skilled_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Skilled Certificate.".$extension_skilled_certificate;
    }
    elseif($extension_skilled_certificate == 'doc' || $extension_skilled_certificate == 'docx')
    {
        $skilled_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Skilled Certificate.".$extension_skilled_certificate;
    }
    /*************skilled_certificate***********/

    /*************hsc_certificate***********/
    $hsc_certificate=$AttachmentData['hsc_certificate'];
    $file_url_hsc_certificate=base_url().'others/upload/student_visa_attachment/'.$hsc_certificate;
    $path_hsc_certificate = parse_url($file_url_hsc_certificate, PHP_URL_PATH);
    $extension_hsc_certificate = pathinfo($path_hsc_certificate, PATHINFO_EXTENSION);
    if( $extension_hsc_certificate == 'jpg' || $extension_hsc_certificate == 'jpeg' || $extension_hsc_certificate == 'png')
    {
        $hsc_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."H.S.C Certificate.".$extension_hsc_certificate;
    }
    elseif($extension_hsc_certificate == 'pdf')
    {
        $hsc_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."H.S.C Certificate.".$extension_hsc_certificate;
    }
    elseif($extension_hsc_certificate == 'doc' || $extension_hsc_certificate == 'docx')
    {
        $hsc_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."H.S.C Certificate.".$extension_hsc_certificate;
    }
    /*************hsc_certificate***********/

    /*************hsc_mark_sheet***********/
    $hsc_mark_sheet=$AttachmentData['hsc_mark_sheet'];
    $file_url_hsc_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$hsc_mark_sheet;
    $path_hsc_mark_sheet = parse_url($file_url_hsc_mark_sheet, PHP_URL_PATH);
    $extension_hsc_mark_sheet = pathinfo($path_hsc_mark_sheet, PATHINFO_EXTENSION);
    if( $extension_hsc_mark_sheet == 'jpg' || $extension_hsc_mark_sheet == 'jpeg' || $extension_hsc_mark_sheet == 'png')
    {
        $hsc_mark_sheet_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."H.S.C Mark Sheet.".$extension_hsc_mark_sheet;
    }
    elseif($extension_hsc_mark_sheet == 'pdf')
    {
        $hsc_mark_sheet_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."H.S.C Mark Sheet.".$extension_hsc_mark_sheet;
    }
    elseif($extension_hsc_mark_sheet == 'doc' || $extension_hsc_mark_sheet == 'docx')
    {
        $hsc_mark_sheet_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."H.S.C Mark Sheet.".$extension_hsc_mark_sheet;
    }
    /*************hsc_mark_sheet***********/

    /*************ssc_certificate***********/
    $ssc_certificate=$AttachmentData['ssc_certificate'];
    $file_url_ssc_certificate=base_url().'others/upload/student_visa_attachment/'.$ssc_certificate;
    $path_ssc_certificate = parse_url($file_url_ssc_certificate, PHP_URL_PATH);
    $extension_ssc_certificate = pathinfo($path_ssc_certificate, PATHINFO_EXTENSION);
    if( $extension_ssc_certificate == 'jpg' || $extension_ssc_certificate == 'jpeg' || $extension_ssc_certificate == 'png')
    {
        $ssc_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."S.S.C Certificate.".$extension_ssc_certificate;
    }
    elseif($extension_ssc_certificate == 'pdf')
    {
        $ssc_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."S.S.C Certificate.".$extension_ssc_certificate;
    }
    elseif($extension_ssc_certificate == 'doc' || $extension_ssc_certificate == 'docx')
    {
        $ssc_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."S.S.C Certificate.".$extension_ssc_certificate;
    }
    /*************ssc_certificate***********/

    /*************ssc_mark_sheet***********/
    $ssc_mark_sheet=$AttachmentData['ssc_mark_sheet'];
    $file_url_ssc_mark_sheet=base_url().'others/upload/student_visa_attachment/'.$ssc_mark_sheet;
    $path_ssc_mark_sheet = parse_url($file_url_ssc_mark_sheet, PHP_URL_PATH);
    $extension_ssc_mark_sheet = pathinfo($path_ssc_mark_sheet, PATHINFO_EXTENSION);
    if( $extension_ssc_mark_sheet == 'jpg' || $extension_ssc_mark_sheet == 'jpeg' || $extension_ssc_mark_sheet == 'png')
    {
        $ssc_mark_sheet_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."S.S.C Mark Sheet.".$extension_ssc_mark_sheet;
    }
    elseif($extension_ssc_mark_sheet == 'pdf')
    {
        $ssc_mark_sheet_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."S.S.C Mark Sheet.".$extension_ssc_mark_sheet;
    }
    elseif($extension_ssc_mark_sheet == 'doc' || $extension_ssc_mark_sheet == 'docx')
    {
        $ssc_mark_sheet_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."S.S.C Mark Sheet.".$extension_ssc_mark_sheet;
    }
    /*************ssc_mark_sheet***********/

    /*************passport_copy***********/
    $passport_copy=$AttachmentData['passport_copy'];
    $file_url_passport_copy=base_url().'others/upload/student_visa_attachment/'.$passport_copy;
    $path_passport_copy = parse_url($file_url_passport_copy, PHP_URL_PATH);
    $extension_passport_copy = pathinfo($path_passport_copy, PATHINFO_EXTENSION);
    if( $extension_passport_copy == 'jpg' || $extension_passport_copy == 'jpeg' || $extension_passport_copy == 'png')
    {
        $passport_copy_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Passport Copy.".$extension_passport_copy;
    }
    elseif($extension_passport_copy == 'pdf')
    {
        $passport_copy_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Passport Copy.".$extension_passport_copy;
    }
    elseif($extension_passport_copy == 'doc' || $extension_passport_copy == 'docx')
    {
        $passport_copy_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Passport Copy.".$extension_passport_copy;
    }
    /*************passport_copy***********/

    /*************birth_certificate***********/
    $birth_certificate=$AttachmentData['birth_certificate'];
    $file_url_birth_certificate=base_url().'others/upload/student_visa_attachment/'.$birth_certificate;
    $path_birth_certificate = parse_url($file_url_birth_certificate, PHP_URL_PATH);
    $extension_birth_certificate = pathinfo($path_birth_certificate, PATHINFO_EXTENSION);
    if( $extension_birth_certificate == 'jpg' || $extension_birth_certificate == 'jpeg' || $extension_birth_certificate == 'png')
    {
        $birth_certificate_show="<i class=\"fa-regular fa-image\"></i>&nbsp;"."Birth Certificate.".$extension_birth_certificate;
    }
    elseif($extension_birth_certificate == 'pdf')
    {
        $birth_certificate_show="<i class=\"fa-solid fa-file-pdf\"></i>&nbsp;"."Birth Certificate.".$extension_birth_certificate;
    }
    elseif($extension_birth_certificate == 'doc' || $extension_birth_certificate == 'docx')
    {
        $birth_certificate_show="<i class=\"fa-regular fa-file-word\"></i>&nbsp;"."Birth Certificate.".$extension_birth_certificate;
    }
    /*************birth_certificate***********/

    /*************police_clearance_ov***********/
    $police_clearance_ov=$AttachmentData['police_clearance_ov'];
    /*************police_clearance_ov***********/

    $police_clearance_bd=$AttachmentData['police_clearance_bd'];
    $covid_certificate_ov=$AttachmentData['covid_certificate_ov'];
    $covid_certificate_bd=$AttachmentData['covid_certificate_bd'];
    $student_visa_country=$AttachmentData['student_visa_country'];
    $d_date=$AttachmentData['d_date'];
    $d_time=$AttachmentData['d_time'];
    $status=$AttachmentData['status'];

}
?>

<tbody>

<tr>
    <td>
        <input type="checkbox" class="form-check-input" name="cover_letter" value="<?php echo $cover_letter; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Cover Letter</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension; ?>', '<?php echo $file_letter_url; ?>')" href="#" class="text-body">

            <?php echo $cover_letter_file_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>

    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="cv" value="<?php echo $cv; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>CV</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_cv; ?>', '<?php echo $file_letter_url_cv; ?>')" href="#" class="text-body">

            <?php echo $cv_file_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="job_ex_letter" value="<?php echo $job_ex_letter; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Job Experience Letter</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_job_ex_letter; ?>', '<?php echo $file_letter_url_job_ex_letter; ?>')" href="#" class="text-body">

            <?php echo $job_ex_letter_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="employment_letter" value="<?php echo $employment_letter; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Employment Letter</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_employment_letter; ?>', '<?php echo $file_url_employment_letter; ?>')" href="#" class="text-body">

            <?php echo $employment_letter_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="ielts_pte_certificate" value="<?php echo $ielts_pte_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>IELTS / PTE Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_ielts_pte_certificate; ?>', '<?php echo $file_url_ielts_pte_certificate; ?>')" href="#" class="text-body">

            <?php echo $ielts_pte_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="masters_certificate" value="<?php echo $masters_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Masters Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_masters_certificate; ?>', '<?php echo $file_url_masters_certificate; ?>')" href="#" class="text-body">

            <?php echo $masters_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="masters_mark_sheet" value="<?php echo $masters_mark_sheet; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Masters Mark Sheet</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_masters_mark_sheet; ?>', '<?php echo $file_url_masters_mark_sheet; ?>')" href="#" class="text-body">

            <?php echo $masters_mark_sheet_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="graduate_certificate" value="<?php echo $graduate_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Graduate Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_graduate_certificate; ?>', '<?php echo $file_url_graduate_certificate; ?>')" href="#" class="text-body">

            <?php echo $graduate_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="graduate_mark_sheet" value="<?php echo $graduate_mark_sheet; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Graduate Mark Sheet</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_graduate_mark_sheet; ?>', '<?php echo $file_url_graduate_mark_sheet; ?>')" href="#" class="text-body">

            <?php echo $graduate_mark_sheet_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="diploma_certificate" value="<?php echo $diploma_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Diploma Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_diploma_certificate; ?>', '<?php echo $file_url_diploma_certificate; ?>')" href="#" class="text-body">

            <?php echo $diploma_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="diploma_mark_sheet" value="<?php echo $diploma_mark_sheet; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Diploma Mark Sheet</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_diploma_mark_sheet; ?>', '<?php echo $file_url_diploma_mark_sheet; ?>')" href="#" class="text-body">

            <?php echo $diploma_mark_sheet_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="skilled_certificate" value="<?php echo $skilled_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Skilled Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_skilled_certificate; ?>', '<?php echo $file_url_skilled_certificate; ?>')" href="#" class="text-body">

            <?php echo $skilled_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="hsc_certificate" value="<?php echo $hsc_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>H.S.C Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_hsc_certificate; ?>', '<?php echo $file_url_hsc_certificate; ?>')" href="#" class="text-body">

            <?php echo $hsc_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="hsc_mark_sheet" value="<?php echo $hsc_mark_sheet; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>H.S.C Mark Sheet</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_hsc_mark_sheet; ?>', '<?php echo $file_url_hsc_mark_sheet; ?>')" href="#" class="text-body">
            <?php echo $hsc_mark_sheet_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="ssc_certificate" value="<?php echo $ssc_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>S.S.C Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_ssc_certificate; ?>', '<?php echo $file_url_ssc_certificate; ?>')" href="#" class="text-body">
            <?php echo $ssc_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="ssc_mark_sheet" value="<?php echo $ssc_mark_sheet; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>S.S.C Mark Sheet</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_ssc_mark_sheet; ?>', '<?php echo $file_url_ssc_mark_sheet; ?>')" href="#" class="text-body">
            <?php echo $ssc_mark_sheet_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="passport_copy" value="<?php echo $passport_copy; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Passport Copy</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_passport_copy; ?>', '<?php echo $file_url_passport_copy; ?>')" href="#" class="text-body">
            <?php echo $passport_copy_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" class="form-check-input"  name="birth_certificate" value="<?php echo $birth_certificate; ?>" id="customCheckBox1" required>
    </td>
    <td>
        <span>Birth Certificate</span>
    </td>
    <td>
        <a onclick="togglePopup('<?php echo $extension_birth_certificate; ?>', '<?php echo $file_url_birth_certificate; ?>')" href="#" class="text-body">
            <?php echo $birth_certificate_show; ?>
        </a>
    </td>
    <td>
        <span><?php echo $student_visa_country; ?></span>
    </td>
    <td>

        <form action="#">
            <input type="hidden" value="">
            <button type="submit" class="badge badge-success light border-0"><i class="fa-solid fa-download"></i>&nbsp;Download</button>
        </form>
    </td>
</tr>

</tbody>
</table>
</div>


</div>
</div>
</div>
</div>
</div>

</div>
</div>

<!--**********************************
    Content body end
***********************************-->



<!--**********************************
    Footer start
***********************************-->
<div class="footer out-footer">
    <div class="copyright">
        <p>Copyright © Developed by <a href="http://globalconnex.com.au/" target="_blank">Global Connex</a> 2023</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->



<!--**********************************
   Support ticket button start
***********************************-->

<!--**********************************
   Support ticket button end
***********************************-->



<!-- popup to show requirements attachments -->
<div id="popup" class="popup">
    <span class="close" onclick="close_popup('image')"><i class="fa-solid fa-circle-xmark"></i></span>
    <img id="imageviewer" src="">
</div>

<div id="pdf_popup" class="pdf_popup">
    <span class="close" onclick="close_popup('pdf')"><i class="fa-solid fa-circle-xmark"></i></span>
    <embed id="pdfViewer" src="" type="application/pdf">
</div>

<div id="pdf_popup2" class="pdf_popup">
    <span class="close" onclick="close_popup('docx')"><i class="fa-solid fa-circle-xmark"></i></span>
    <embed id="pdfViewer2" src="" type="application/msword">
</div>
<div id="pdf_popup3" class="pdf_popup">
    <span class="close" onclick="close_popup('doc')"><i class="fa-solid fa-circle-xmark"></i></span>
    <embed id="pdfViewer3" src="" type="application/msword">
</div>



</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/global/global.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/page-error-404.html"></script>

<!-- Dashboard 1 -->

<script src="<?php echo base_url(); ?>others/cms/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/datatables/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/datatables/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/plugins-init/datatables.init.js"></script>

<!-- Apex Chart -->
<script src="<?php echo base_url(); ?>others/cms/js/custom.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/deznav-init.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/demo.js"></script>
<!--<script src="--><?php //echo base_url(); ?><!--others/cms/js/styleSwitcher.js"></script>-->

<!-- tagify -->
<script src="<?php echo base_url(); ?>others/cms/vendor/tagify/dist/tagify.js"></script>


<script>

    function togglePopup(type, src) {
        console.log(type, src);
        var popup = document.getElementById("popup");
        var pdf_popup = document.getElementById("pdf_popup");

        if (type == 'jpg' || type == 'jpeg' || type == 'png') {

            document.getElementById("imageviewer").src = src;
            popup.style.display = "block";

        }
        else if (type == 'pdf') {
            document.getElementById("pdfViewer").src = src;
            pdf_popup.style.display = "block";
        }
        else if (type == 'docx') {
            document.getElementById("pdfViewer2").src = src;
            pdf_popup.style.display = "block";
        }
        else if (type == 'doc') {
            document.getElementById("pdfViewer3").src = src;
            pdf_popup.style.display = "block";
        }
    }

    function close_popup(type) {
        if (type == 'pdf') {
            pdf_popup.style.display = "none";
        }
        if (type == 'image') {
            popup.style.display = "none";
        }
        if (type == 'docx') {
            pdf_popup2.style.display = "none";
        }
        if (type == 'doc') {
            pdf_popup3.style.display = "none";
        }
    }
</script>


</body>

</html>