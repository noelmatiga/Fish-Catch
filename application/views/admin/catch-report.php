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
                     <a href="<?php echo base_url('users'); ?>" class="nav-link">
                        <img src="<?php echo base_url('assets'); ?>/img/user.png" width="30">
                        <p>
                           Users
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
                        <li class="nav-item">
                           <a href="<?php echo base_url('catch_report'); ?>" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Fish Catch</p>
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
                     <h1 class="m-0"><img src="../asset/img/report.png" width="40"> Reports</h1>
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
                  <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                     <div class="card">
                        <div class="card-body">
                           <div class="chart-title">
                              <h4>Catch Report by Fish</h4>
                           </div>
                           <table class="table table-bordered mytable">
                              <thead>
                                 <th></th>
                                 <th>Danggit</th>
                                 <th>Maya-maya</th>
                                 <th>Sapsap</th>
                                 <th>Lapu-Lapu</th>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>January</td>
                                    <td>50</td>
                                    <td>40</td>
                                    <td>65</td>
                                    <td>55</td>
                                 </tr>
                                 <tr>
                                    <td>February</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>March</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>April</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>May</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>June</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                 </tr>
                                 <tr>
                                    <td>July</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>August</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>September</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>October</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>November</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td>December</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-7 col-lg-7 col-xl-7">
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
   <script src="../asset/jquery/jquery.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
   <script src="../asset/js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
            datasets: [{
               label: 'Danggit',
               backgroundColor: 'red',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [500,650,700,500,600,550,800,4500,8000,7500,6000,12000]
            },{
               label: 'Maya-maya',
               backgroundColor: 'green',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [500,650,700,500,600,550,800,4500,8000,7500,6000,12000]
            },{
               label: 'Sapsap',
               backgroundColor: 'blue',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [500,650,700,500,600,550,800,4500,8000,7500,6000,12000]
            },{
               label: 'Lapu-lapu',
               backgroundColor: 'indigo',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [500,650,700,500,600,550,800,4500,8000,7500,6000,12000]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: true,
               }
            }
         });

      });
   </script>
</body>

</html>