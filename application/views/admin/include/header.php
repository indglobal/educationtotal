<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url() ?>admin_resource/img/favicon.png">

    <title>Education Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url();?>admin_resource/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>admin_resource/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>admin_resource/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>admin_resource/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>admin_resource/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin_resource/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>admin_resource/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>
<body>

<!-- container section start -->
  <section id="container" class="">
      
		<header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="admin_home.php" class="logo">Education <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i>Change Password</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                       
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
		</header>      
      <!--header end-->