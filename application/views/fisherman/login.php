<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Fisherman Login- CFCMS</title>

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets_front/') ?>img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/') ?>css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/') ?>css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/') ?>css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/') ?>css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo base_url('assets_front/') ?>js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href="index.html" class="site-logo">
                        <i class="gi gi-flash"></i> <strong>Carigara Fish Catch Monitoring System </strong>
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                            <li>
                                <a href="<?php echo base_url('mainpage'); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin_login'); ?>" class="btn btn-info">Admin Log In</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url('fisherman_login'); ?>" class="btn btn-success">Fisherman Log In</a>
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

            <!-- Intro -->
            <div class="media-container">
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Fisherman Log In</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Connect to your dashboard!</h2>
                </div>
            </section>
            <img src="<?php echo base_url('assets_front/'); ?>img/landingpage/header2.jpg" alt="" class="media-image animation-pulseSlow">
        </div>
            <!-- END Intro -->

            <!-- Log In -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                            <!-- Log In Form -->
                            <form action="<?php echo base_url('fcheck_login') ?>" method="post" id="form-log-in" class="form-horizontal">
                                <?php if($this->session->flashdata('error')){ ?>
                                     <div class="alert alert-danger">
                                      <button class="close" data-close="alert"></button>
                                       <span><?php echo $this->session->flashdata('error'); ?></span>
                                     </div>
                                 <?php }?>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="login-user" name="login-user" class="form-control input-lg" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-lock"></i></span>
                                            <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="fa fa-arrow-right"></i> Log In</button>
                                    </div>
                                </div>
                                <div class="form-group">

                                </div>
                            </form>
                           
                            <!-- END Log In Form -->
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Log In -->

            

            <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        
                        <div class="col-sm-12 col-md-12 text-center">
                            <h4 class="footer-heading"><span>2022</span> &copy; <a href="#">>CFCMS | Carigara Fish Catch Monitoring System</a></h4>
                            
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url('assets_front/') ?>js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url('assets_front/') ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets_front/') ?>js/plugins.js"></script>
        <script src="<?php echo base_url('assets_front/') ?>js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url('assets_front/') ?>js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>