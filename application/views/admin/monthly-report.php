<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Fish Catch Monitoring System of Carigara Fishport</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <style type="text/css">
      table tr td {
         padding: 0.3rem !important;
      }
   </style>
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
               <a class="nav-link"  href="<?php echo base_url(''); ?>">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
            <img src="<?php echo base_url('assets'); ?>/img/logo.jpg" " width="180" style="margin-top:-20px;margin-bottom: -30px;">
        </a>
         <div class="sidebar">
         <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/dashboard.png" width="30">
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                
                  <li class="nav-item">
                     <a href="<?php echo base_url('market'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/market.png" width="30">
                        <p>
                           Market
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo base_url('fisherman'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/fisherman.png" width="30">
                        <p>
                           Fisherman
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo base_url('vessel'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/boat.png" width="30">
                        <p>
                           Fisherman Vessel 
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo base_url('catch'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/fish.png" width="30">
                        <p>
                           Catch Record
                        </p>
                     </a>
                  </li>
                 
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/report.png" width="30">
                        <p>
                        Reports
                        </p>
                        <i class="right fas fa-angle-left"></i>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="<?php echo base_url('monthly_report'); ?>" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Monthly Catch</p>
                           </a>
                        </li>
                        
                     </ul>
                  </li>
                 
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
                     <h1 class="m-0"><img src="<?php echo base_url('assets'); ?>/img/report.png" width="40"> Reports</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Reports</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="chart-title">
                              <h4>Catch Report by Month</h4>
                           </div>
                           <table class="table table-bordered mytable">
                              <thead>
                                 <th>Month</th>
                                 
                                 <th>Fish</th>
                                 <th>Squid</th>
                                 <th>Crab</th>
                                 <th>Shells</th>


                              </thead>
                              <tbody>
                                 <tr>
                                    <td>January</td>
                                    <td>500</td>
                                    <td>650</td>
                                    <td>650</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>February</td>
                                    <td>650</td>
                                    <td>500</td>
                                    <td>650</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>March</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>April</td>
                                    <td>500</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>May</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>June</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>July</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>August</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>September</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>October</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>November</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                                 <tr>
                                    <td>December</td>
                                    <td>0</td>
                                    <td>700</td>
                                    <td>500</td>
                                    <td>650</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                     <div class="card">
                        <div class="card-body">
                           <div class="chart-title">
                              <h4>Graphical Representation Monthly Report</h4><br>
                           </div>
                           <canvas id="bargraph"></canvas>
                        </div>
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
   <script src="<?php echo base_url('assets'); ?>/js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
            datasets: [{
               label: 'Number of Catch in Kg',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [100,200,50,130,0,0,0,0,0,0,0,0]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: false,
               },
               plugins : {
                  tooltip :{
                     enabled : true
                  }
               }
            }
         });

      });
   </script>
</body>

</html>