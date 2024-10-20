<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mates Global</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others//bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others//bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/plugins/iCheck/square/blue.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="<?php echo base_url(); ?>others/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>Login</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            <?php if ( $this->session->flashdata( 'message' ) ) : ?>
                <?php echo $this->session->flashdata( 'message' ); ?>
            <?php endif; ?>
        </p>
        <form action="login" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="UserName" class="form-control" placeholder="Username" required="required">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="UserPassword" class="form-control" placeholder="Password" required="required">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url(); ?>others/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>others/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
