<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POS | Inventory</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>others/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="<?php echo base_url(); ?>others/favicon.png" rel="icon">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>Mates</b>Global</span>

        <span class="logo-lg"><img src="<?php echo base_url(); ?>others/favicon.png" width="44" height="44"><b>Mates Global</b></span>
    </a>

    <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">



                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 1 notifications</li>
                        <li>

                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>



                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>others/favicon.png" class="user-image" alt="User Image">
                        <span class="hidden-xs">Mates Admin</span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="user-header">
                            <img src="<?php echo base_url(); ?>others/favicon.png" class="img-circle" alt="User Image">
                            <p>
                                Mates - Admin
                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url(); ?>/logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">

    <section class="sidebar">



        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
            </div>
        </form>

        <?php
        $SiteURLDashboard=site_url('admin');
        ?>
        <ul class="sidebar-menu" data-widget="tree">

            <li class="active">
                <a href="<?php echo $SiteURLDashboard; ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>Settings</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php
                        $SiteURLListCategories=site_url('admin/business_categories');
                        $SiteURLListLocation=site_url('admin/location');
                        $SiteURLListProductCategory=site_url('admin/product_category');
                        $SiteURLListProductSubCategory=site_url('admin/sub_category');
                    ?>
                    <li><a href="<?php echo $SiteURLListCategories; ?>"><i class="fa fa-circle-o"></i>Business Categories</a></li>
                    <li><a href="<?php echo $SiteURLListLocation; ?>"><i class="fa fa-circle-o"></i>Location</a></li>
                    <li><a href="<?php echo $SiteURLListProductCategory; ?>"><i class="fa fa-circle-o"></i>Product Category</a></li>
                    <li><a href="<?php echo $SiteURLListProductSubCategory; ?>"><i class="fa fa-circle-o"></i>Product Sub-Category</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Retailer</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
                        $SiteURLList=site_url('admin/retailer');
                        $SiteURLRegistration=site_url('admin/new_retailer');
                        $SiteURLBanner=site_url('admin/retailer_banner');
                        $SiteURLRetailerProduct=site_url('admin/retailer_product');
                        $SiteURLRetailerReport=site_url('admin/retailer_report');
                    ?>
                    <li><a href="<?php echo $SiteURLList; ?>"><i class="fa fa-circle-o"></i>Retailer List</a></li>
                    <li><a href="<?php echo $SiteURLRegistration; ?>"><i class="fa fa-circle-o"></i>Registration</a></li>
                    <li><a href="<?php echo $SiteURLBanner ?>"><i class="fa fa-circle-o"></i>Retailer Banner</a></li>
                    <li><a href="<?php echo $SiteURLRetailerProduct; ?>"><i class="fa fa-circle-o"></i>Retailer Product</a></li>
                    <li><a href="<?php echo $SiteURLRetailerReport; ?>"><i class="fa fa-circle-o"></i>Report</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-users"></i>
                    <span>Wholesaler</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
                    $SiteURLWholesaler=site_url('admin/wholesaler');
                    $SiteURLWholesalerRegistration=site_url('admin/new_wholesaler');
                    $SiteURLWholesalerBanner=site_url('admin/wholesaler_banner');
                    $SiteURLWholesalerProduct=site_url('admin/wholesaler_product');
                    $SiteURLWholesalerReport=site_url('admin/wholesaler_report');
                    ?>
                    <li><a href="<?php echo $SiteURLWholesaler; ?>"><i class="fa fa-circle-o"></i>Wholesaler List</a></li>
                    <li><a href="<?php echo $SiteURLWholesalerRegistration; ?>"><i class="fa fa-circle-o"></i>Registration</a></li>
                    <li><a href="<?php echo $SiteURLWholesalerBanner ?>"><i class="fa fa-circle-o"></i>Wholesaler Banner</a></li>
                    <li><a href="<?php echo $SiteURLWholesalerProduct ?>"><i class="fa fa-circle-o"></i>Product</a></li>
                    <li><a href="<?php echo $SiteURLWholesalerReport ?>"><i class="fa fa-circle-o"></i>Report</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Customers</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
                    $SiteURLCustomers=site_url('customers');
                    $SiteURLShopSlider=site_url('customers/slider');
                    $SiteURLReport=site_url('customers/report');
                    ?>
                    <li><a href="<?php echo $SiteURLCustomers; ?>"><i class="fa fa-circle-o"></i>Customers List</a></li>
                    <li><a href="<?php echo $SiteURLShopSlider; ?>"><i class="fa fa-circle-o"></i>Shop Slider Banner</a></li>
                    <li><a href="<?php echo $SiteURLReport ?>"><i class="fa fa-circle-o"></i>Report</a></li>

                </ul>
            </li>


            <li>
                <a href="#">
                    <i class="fa fa-fw fa-user-md"></i> <span>Employees</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Vendors</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Sub menu 1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sub menu 2</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sub menu 3</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Sub menu 4</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Agent</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Shop Partner</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Sales Information</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Purchase Information</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Payment Collection</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Sub menu 1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sub menu 2</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sub menu 3</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Sub menu 4</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Shop Details</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Statistics & Analytics</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Marketing</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Sub menu 1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sub menu 2</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sub menu 3</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Sub menu 4</a></li>
                </ul>
            </li>
        </ul>
    </section>

</aside>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
             Admin Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $TotalWholesaler; ?></h3>
                        <p>Total Wholesaler</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <?php
                    $SiteURLTotalWholesaler=site_url('admin/wholesaler');
                    ?>
                    <a href="<?php echo $SiteURLTotalWholesaler; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $TotalRetailer; ?></h3>
                        <p>Total Retailer</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <?php
                        $SiteURLRetailer=site_url('admin/retailer');
                    ?>
                    <a href="<?php echo $SiteURLRetailer; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Supplier</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>


            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $TotalWholesalerProduct; ?></h3>
                        <p>Wholesaler Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <?php
                    $SiteURLTotalWholesalerProduct=site_url('admin/wholesaler_product');
                    ?>
                    <a href="<?php echo $SiteURLTotalWholesalerProduct; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Retailer Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <?php
                    $SiteURLRetailerProduct=site_url('admin/retailer_product');
                    ?>
                    <a href="<?php echo $SiteURLRetailerProduct; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Purchase</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-balance-scale"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Sales</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-money"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <?php
                    $SiteURLTotalWholesalerProduct=site_url('admin/total_users');
                    ?>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $TotalCustomers; ?></h3>
                        <p>Total Customer</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-user"></i>
                    </div>
                    <?php
                    $SiteURLCustomers=site_url('customers');
                    ?>
                    <a href="<?php echo $SiteURLCustomers ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Employee</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-user-md"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Investor</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-user-secret"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>

    </section>

</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy; 2023 <a href="#">Global Connex Ltd</a>.</strong> All rights
    reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark" style="display: none;">

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                            <p><span class="__cf_email__" data-cfemail="c5abaab7a485a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</span></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>


        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>


        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                    <p>
                        Some information about this general settings option
                    </p>
                </div>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                    <p>
                        Other sets of options are available
                    </p>
                </div>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>

                <h3 class="control-sidebar-heading">Chat Settings</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>

            </form>
        </div>

    </div>
</aside>


<div class="control-sidebar-bg"></div>
</div>



<script src="<?php echo base_url(); ?>others/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url(); ?>others/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>othersbower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/morris.js/morris.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>others/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>others/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>others/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>others/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>others/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>others/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>others/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>others/ad.js"></script>
</body>
</html>
