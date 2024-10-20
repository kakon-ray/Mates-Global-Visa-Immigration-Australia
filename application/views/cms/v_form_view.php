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
    <title>Global Connex | CMS</title>
    <link rel="icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/css/style.css" rel="stylesheet">
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
            font-size: 14px;
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
                    <path d="M8.36 15.2C7.2933 15.2 6.3 15.0267 5.38 14.68C4.4733 14.32 3.68 13.82 3 13.18C2.3333 12.5267 1.8133 11.76 1.44 10.88C1.0667 9.99999 0.880005 9.03999 0.880005 7.99999C0.880005 6.95999 1.0667 5.99999 1.44 5.11999C1.8133 4.23999 2.34 3.47999 3.02 2.83999C3.7 2.18666 4.49331 1.68666 5.40001 1.33999C6.30671 0.979988 7.3 0.799988 8.38 0.799988C9.5267 0.799988 10.5733 0.999988 11.52 1.39999C12.4667 1.78666 13.2667 2.36666 13.92 3.13999L12.24 4.71999C11.7333 4.17332 11.1667 3.76666 10.54 3.49999C9.9133 3.21999 9.2333 3.07999 8.5 3.07999C7.7667 3.07999 7.0933 3.19999 6.48 3.43999C5.88 3.67999 5.35331 4.01999 4.90001 4.45999C4.46001 4.89999 4.1133 5.41999 3.86 6.01999C3.62 6.61999 3.5 7.27999 3.5 7.99999C3.5 8.71999 3.62 9.37999 3.86 9.97999C4.1133 10.58 4.46001 11.1 4.90001 11.54C5.35331 11.98 5.88 12.32 6.48 12.56C7.0933 12.8 7.7667 12.92 8.5 12.92C9.2333 12.92 9.9133 12.7867 10.54 12.52C11.1667 12.24 11.7333 11.82 12.24 11.26L13.92 12.86C13.2667 13.62 12.4667 14.2 11.52 14.6C10.5733 15 9.52 15.2 8.36 15.2ZM16.4113 15V0.999988H22.1713C23.4113 0.999988 24.4713 1.19999 25.3513 1.59999C26.2446 1.99999 26.9313 2.57332 27.4113 3.31999C27.8913 4.06666 28.1313 4.95332 28.1313 5.97999C28.1313 7.00669 27.8913 7.89329 27.4113 8.63999C26.9313 9.37329 26.2446 9.93999 25.3513 10.34C24.4713 10.7267 23.4113 10.92 22.1713 10.92H17.8513L19.0113 9.73999V15H16.4113ZM25.5713 15L22.0313 9.91999H24.8112L28.3713 15H25.5713ZM19.0113 10.02L17.8513 8.77999H22.0513C23.1979 8.77999 24.0579 8.53329 24.6312 8.03999C25.2179 7.54669 25.5113 6.85999 25.5113 5.97999C25.5113 5.08666 25.2179 4.39999 24.6312 3.91999C24.0579 3.43999 23.1979 3.19999 22.0513 3.19999H17.8513L19.0113 1.91999V10.02ZM31.0402 15V0.999988H33.1802L39.3002 11.22H38.1802L44.2002 0.999988H46.3402L46.3602 15H43.9002L43.8802 4.85999H44.4002L39.2802 13.4H38.1202L32.9202 4.85999H33.5202V15H31.0402Z" fill="black" />
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
                                                <circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.5168 14.9447L17.7471 18.1667" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
                                    <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                                    </svg>
                                    <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize">
                                        <path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                                    </svg>
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
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <circle cx="12.175" cy="11.889" r="2.63616" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <span class="ms-2">Settings </span>
                                                </a>
                                                <a href="<?php echo base_url(); ?>logout" class="dropdown-item ai-icon">
                                                    <svg class="profle-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                                    </svg>
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
        <?php $this->load->view('cms/v_side_menu', $this->data); ?>
        <!--**********************************
    Sidebar end
***********************************-->

        <!--**********************************
    Content body start
***********************************-->
        <div class="content-body">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li>
                        <h5 class="bc-title">Form View</h5>
                    </li>
                </ol>
            </div>
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $fullname; ?> Form Data</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <p class="mb-1">ID :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['id']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <p class="mb-1">Full Name :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['full_name']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Date of Birth :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['date_of_birth']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Gender :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['gender']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Religion :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['religion']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Martial Status :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['martial_status']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Nationality :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['nationality']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">National Id No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['national_id_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Birth Certificate No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['birth_certificate_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Driving License No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['driving_license_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Passport No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['passport_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Passport Issue Date :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['passport_issue_date']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Passport Expiry Date :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['passport_expiry_date']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Primary Contact No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['primary_contact_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Secondary Contact No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['secondary_contact_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Emergency Contact No :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['emergency_contact_no']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Primary Email :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['primary_email']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Secondary Email :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['secondary_email']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Father Name :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['father_name']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Mother Name :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['mother_name']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Present Address :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['present_address']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Permanent Address :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['permanent_address']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred City :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_city']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred Country :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_country']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred Institute :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_institute']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred Degree :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_degree']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred course1 :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_course1']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred Course2 :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_course2']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Preferred Session :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['preferred_session']; ?>" readonly>
                                        </div>
                                    </div>


                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Status :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['status'] == 0 ? "False" : "True"; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <p class="mb-1">Date :</p>
                                            <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['d_date']; ?>" readonly>
                                        </div>
                                    </div>
                                    <?php
                                    $x = 1;
                                    $y = 1;
                                    $z = 1;
                                    $a = 1;
                                    $b = 1;
                                    $c = 1;
                                    $d  = 1;
                                    $e  = 1;
                                    foreach ($FormDataDetails as $index => $TodayApplyData) {
                                    ?>

                                        <?php if ($TodayApplyData['form_section'] == 'education_section_' . $x) { ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/graduate.png" width="25" height="25" alt="Personal Details">&nbsp;Education / Skilled Details Academic <?php echo $x ?> :</h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Institute Name : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Exam/Degree Name : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Major In : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Result : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">CGPA : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>


                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Year of Passing : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_6']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Course Duration : </p>
                                                        <input class="form-control" type="text" name="daterange" value="<?php echo $TodayApplyData['field_7']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php $x++;
                                        }
                                        ?>

                                        <?php if ($TodayApplyData['form_section'] ==  'slill_section_' . $y) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp;Skills Summery : <?php echo $y ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Institute Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Course Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Completion Date : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Duration of the Course : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Start From : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>


                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">End To : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_6']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Country : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_7']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php $y++;
                                        } ?>

                                        <?php if ($TodayApplyData['form_section'] ==  'professional_certificate_' . $z) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp;Professional Certificate Summery : <?php echo $z ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Institute Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Certificate Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Start From : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">End To : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Country : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>


                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Institute Address : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_6']; ?>" readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php $z++;
                                        } ?>

                                        <?php if ($TodayApplyData['form_section'] ==  'employment_history_' . $d) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp;Employment History Experience : <?php echo $d ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Company Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Designation : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Department : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Employment Duration : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Company Address : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php $d++;
                                        } ?>

                                        <?php if ($TodayApplyData['form_section'] ==  'english_proficiency_certificate_' . $e) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp;English Proficiency Certificate : <?php echo $e ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Institute Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Certificate Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Skills Breakdown : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Overall Score : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Test Date : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Valid Date : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php $e++;
                                        } ?>

                                        <?php if ($TodayApplyData['form_section'] ==  'sponsor_saving_' . $a) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp; Sponsor Financial Details (Saving Account ) Summery : <?php echo $a ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Company Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Designation : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Department : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Employment Duration : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Company Address : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php $a++;
                                        } ?>

                                        <?php if ($TodayApplyData['form_section'] ==  'sponsor_fdr_' . $b) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp; Sponsor Financial Details (FDR Account) Summery : <?php echo $b ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Institute Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Certificate Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Skills Breakdown : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Overall Score : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Test Date : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Valid Date : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_6']; ?>" readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php $b++;
                                        } ?>


                                        <?php if ($TodayApplyData['form_section'] ==  'child_details_' . $c) {  ?>
                                            <div class="three d-flex align-items-center gap-2 pt-4">
                                                <div style="width: 98%;">
                                                    <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp; Child Details : <?php echo $c ?></h1>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Sponsor Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_1']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Relation with Applicant : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_2']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Does the sponsor have a saving account : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_3']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">sponsor’s account valid for more than 6 months : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_4']; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Available in the sponsor’s account how much : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_5']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="example">
                                                        <p class="mb-1">Bank Name : </p>
                                                        <input class="form-control" type="text" value="<?php echo $TodayApplyData['field_6']; ?>" readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php $c++;
                                        } ?>


                                    <?php

                                    }

                                    ?>


<div class="three d-flex align-items-center gap-2 pt-4">
                                            <div style="width: 98%;">
                                                <h1><img src="<?php echo base_url(); ?>others/images/skill.png" width="25" height="25" alt="Personal Details">&nbsp; Spouse Details :</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Name Spouse :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['name_spouse']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spose Date Of Birth :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spose_date_of_birth']; ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Religion :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_religion']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Nationality :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_nationality']; ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Occupation :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_occupation']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Nid Number :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_nid_number']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Birth Certificate Number :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_birth_certificate_number']; ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Passport Number :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_passport_number']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Passport Issue Date :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_passport_issue_date']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Spouse Passport Expiry Date :</p>
                                                    <input class="form-control" type="text" name="daterange" value="<?php echo $FormData['spouse_passport_expiry_date']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>



                                </div>
                                <br>
                                <?php
                                $SiteURLFormDownload = site_url('cms/form_download/' . $form_id);
                                $SiteURLEligibility = site_url('cms/eligibility/' . $form_id);
                                $SiteURLTodayApply = site_url('cms/total_apply');
                                ?>
                                <a href="<?php echo $SiteURLFormDownload; ?>" target="_blank" class="badge light badge-success">Download Form</a>
                                <a href="<?php echo $SiteURLEligibility; ?>" class="badge light badge-warning">Eligible</a>
                                <a href="<?php echo $SiteURLTodayApply; ?>" class="badge light badge-secondary">Back</a>
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


    </div>
    <!--**********************************
    Main wrapper end
***********************************-->

    <!--**********************************
    Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>others/cms/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>others/cms/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>others/cms/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>others/cms/js/deznav-init.js"></script>
    <script src="<?php echo base_url(); ?>others/cms/js/demo.js"></script>
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>

</body>

</html>