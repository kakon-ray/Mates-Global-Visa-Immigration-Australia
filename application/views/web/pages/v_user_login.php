<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Global Connex | Visa & Immigrations</title>
    <!-- Stylesheets -->
    <link href="<?php echo base_url(); ?>others/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>others/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>others/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>others/js/respond.js"></script>
    <meta name="description" content="At Global Conex Pty Ltd, we are a leading immigration consultancy firm that specializes in helping students and professionals obtain student and work visas for Australia, Canada, New Zealand, Sweden, and Malaysia.">
    <meta name="keywords" content="Scholarship, Financial Aid, Educational Grant, International Student Scholarship, First-Generation College Student Scholarship, Healthcare Scholarship, Engineering Scholarship, Environmental Science Scholarship, Work Visa, Student Visa, Business Visa, Immigration Visa, Visa Requirements, Visa Application Form, Visa Interview, Visa Processing Time, Visa Fees, Immigration Process, Green Card, Permanent Residency, Naturalization, Passport Requirements, Visa Supporting Documents, Proof of Funds, Proof of Accommodation, Visa Policy, Visa Waiver Program, Visa-Free Entry, Visa on Arrival, Immigration Law, Visa Compliance, Visa Regulations, Employment Support, Job Placement Services, Career Placement Assistance, Career Counseling, Professional Development, Career Guidance">
    <meta name="author" content="Global Conex Pty Ltd">
</head>

<body>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }
    .form .register-form {
        display: none;
    }
    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }
    .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
    }
    .container .info {
        margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa {
        color: #EF3B3A;
    }
    body {
        background: #76b852; /* fallback for old browsers */
        background: rgb(141,194,111);
        background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .infoMessageError{
        text-align: center;
        color: #ff0000;
        font-size: 12px;
        width: 100%;
    }
    .infoMessage{
         text-align: center;
         color: #3db502;
         font-size: 12px;
         width: 100%;
     }

</style>

<div class="login-page">
    <div class="form">

        <center><a href="#" title=""><img src="<?php echo base_url(); ?>others/images/logo.png" width="60" height="60" alt="globalconnex" title="globalconnex"></a></center>
        <?php if ( $this->session->flashdata( 'message' ) ) : ?>
            <?php echo $this->session->flashdata( 'message' ); ?>
        <?php endif; ?>

        <form class="register-form" action="<?php echo base_url(); ?>web/sign_up" method="post" enctype="multipart/form-data">
            <div class="sec-title">
                <span class="sub-title">sign up</span>
            </div>
            <input type="text" name="username" placeholder="name" required/>
            <input type="password" name="userpassword" placeholder="password" required/>
            <input type="email" name="useremail" placeholder="email address" required/>
            <button type="submit">create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="<?php echo base_url(); ?>user_panel" method="post" enctype="multipart/form-data">
            <div class="sec-title">
                <span class="sub-title">Login</span>
            </div>
            <input type="text" name="UserName" placeholder="username / email" required/>
            <input type="password" name="UserPassword" placeholder="password" required/>
            <button type="submit">login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="<?php echo base_url(); ?>others/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>others/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>others/js/wow.js"></script>
<script src="<?php echo base_url(); ?>others/js/appear.js"></script>
<script src="<?php echo base_url(); ?>others/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/owl.js"></script>
<script src="<?php echo base_url(); ?>others/js/script.js"></script>



<!-- form submit -->
<script src="<?php echo base_url(); ?>others/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>others/js/jquery.form.min.js"></script>

<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="https://unpkg.com/create-file-list@1.0.1/dist/create-file-list.min.js"></script>


<script>
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>



</body>
</html>