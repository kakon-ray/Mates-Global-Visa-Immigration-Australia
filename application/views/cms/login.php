<!DOCTYPE html>
<html lang="en" class="h-100">
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
    <link rel="icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <link href="<?php echo base_url(); ?>others/cms/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/cms/css/style.css" rel="stylesheet">

    <style>
        .infoMessageError{
            color: #F00;
            text-align: center;
        }
        .infoMessage{
            color: #090;
            text-align: center;
        }
    </style>
</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                <div class="login-form">
                    <div class="text-center">
                        <h3 class="title">Sign In</h3>
                        <p>Sign in to your account </p>
                        <p class="login-box-msg">
                            <?php if ( $this->session->flashdata( 'message' ) ) : ?>
                                <?php echo $this->session->flashdata( 'message' ); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                        <form action="cms" method="post">
                        <div class="mb-4">
                            <label class="mb-1 text-dark">Username</label>
                            <input type="text" name="UserName" class="form-control form-control" required="required">
                        </div>
                        <div class="mb-4 position-relative">
                            <label class="mb-1 text-dark">Password</label>
                            <input type="password" name="UserPassword" id="dz-password" class="form-control" required="required">
								<span class="show-pass eye">
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								</span>
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="mb-4">
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox1">
                                    <label class="form-check-label" for="customCheckBox1">Remember my preference</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <a href="#" class="btn-link text-primary">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <h6 class="login-title"><span>Or continue with</span></h6>

                        <div class="mb-3">
                            <ul class="d-flex align-self-center justify-content-center">
                                <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                                <li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
                                <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="pages-left h-100">
                    <div class="login-content">
                        <a href="#"><img src="<?php echo base_url(); ?>others/cms/images/favicon.png" class="mb-3 logo-dark" alt=""></a>
                        <a href="#"><img src="<?php echo base_url(); ?>others/cms/images/favicon.png" class="mb-3 logo-light" alt=""></a>
                    </div>
                    <div class="login-media text-center">
                        <img src="<?php echo base_url(); ?>others/cms/images/login.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="<?php echo base_url(); ?>others/cms/vendor/global/global.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/deznav-init.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/demo.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/custom.js"></script>
<script src="<?php echo base_url(); ?>others/cms/js/styleSwitcher.js"></script>

</body>
</html>