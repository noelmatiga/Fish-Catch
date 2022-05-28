<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?=$title;?></title>

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo base_url('assets_front/'); ?>js/vendor/modernizr.min.js"></script>
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
                        <i class="gi gi-flash"></i> <strong>Fish Catch Monitoring System of Carigara Fishport</strong>
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
                                <a href="<?php echo base_url('admin_login'); ?>" class="btn btn-info">Admin Log In</a>
                            </li>
                             
                            
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

            <!-- Home Carousel -->
            <div id="home-carousel" class="carousel carousel-home slide" data-ride="carousel" data-interval="5000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="active item">
                        <section class="site-section site-section-light site-section-top themed-background-default">
                            <div class="container">
                                <h1 class="text-center animation-slideDown hidden-xs"><strong>A Complete Monitoring System</strong></h1>
                                <h2 class="text-center animation-slideUp push hidden-xs">FCMSCS - Fish Catch Monitoring System of Carigara Fishport</h2>
                               
                            </div>
                        </section>
                    </div>
                    
                  
                    
                </div>
                <!-- END Wrapper for slides -->

                <!-- Controls -->
                <a class="left carousel-control" href="#home-carousel" data-slide="prev">
                    <span>
                        <i class="fa fa-chevron-left"></i>
                    </span>
                </a>
                <a class="right carousel-control" href="#home-carousel" data-slide="next">
                    <span>
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
                <!-- END Controls -->
            </div>
            <!-- END Home Carousel -->

           

            

           

          
           

           

            

            <!-- Footer -->
            <footer class="site-footer site-section">
                <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        
                        <div class="col-sm-12 col-md-12 text-center">
                            <h4 class="footer-heading"><span>2022</span> &copy; <a href="#">FCMSCS | Fish Catch Monitoring System of Carigara Fishport</a></h4>
                            
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url('assets_front/'); ?>js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url('assets_front/'); ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets_front/'); ?>js/plugins.js"></script>
        <script src="<?php echo base_url('assets_front/'); ?>js/app.js"></script>
    </body>
</html>