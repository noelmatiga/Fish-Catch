<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Fish Catch Monitoring System of Carigara Fishport</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/adminlte.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/style.css">
   <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: rgb(2, 142, 230);">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#" role="button">
                  <img src="<?php echo base_url('assets'); ?>/img/avatar.png" class="img-circle" alt="User Image" width="40" style="margin-top: -8px;">
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="<?php echo base_url('flogout'); ?>">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
         <img src="<?php echo base_url('assets'); ?>/img/logo.png" alt="DSMS Logo" width="200" style="margin-top:-30px;margin-bottom: -30px;">
         </a>
         <div class="sidebar">
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="<?php echo base_url('fdashboard'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/dashboard.png" width="30">
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                 
                 
               </ul>
            </nav>
         </div>
      </aside>
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0"><img src="<?php echo base_url('assets'); ?>/img/dashboard.png" width="40"> Dashboard <small class="text-danger">Fisherman</small></h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-sm-12 col-md-12">
                     <div class="info-box">
                        <span class="info-box-icon text-success elevation-4"><img src="<?php echo base_url('assets'); ?>/img/fish.png" width="50"></span>

                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5><strong>Total Catch in Kilogram</strong></h5>
                           </span>
                           <span class="info-box-number">
                              <h2><?=$total_catch;?></h2>
                           </span>
                        </div>
                     </div>
                  </div>
                  

               </div>
            </div>
         </section>
      </div>
   </div>
   <!-- jQuery -->
   <script src="<?php echo base_url('assets'); ?>/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/js/adminlte.js"></script>
</body>

</html>