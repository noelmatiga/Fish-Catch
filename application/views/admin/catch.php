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
      td a.btn{
         font-size: 0.7rem;
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
               <a class="nav-link" data-widget="fullscreen" href="<?php echo base_url(''); ?>">
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
                     <h1 class="m-0"><img src="<?php echo base_url('assets'); ?>/img/fish.png" width="35"> Catch Record</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Catch Record</li>
                     </ol>
                  </div><br>
                  <a class="btn btn-sm btn-info elevation-4" href="#" data-toggle="modal" data-target="#add" style="margin-left: 7px;"><i
                        class="fa fa-plus-circle"></i>
                     Add New</a>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <br>
                  <div class="col-md-12">
                     
                     <table id="example1" class="table">
                        <thead class="btn-cancel">
                           <tr>
                              <th>Date | Time</th>
                              
                              <th>Fisherman</th>
                              <th>Vessel</th>
                              <th>Catch type</th>
                              <th>Kilogram</th>
                              <th>Price</th>
                              <th>Dispatch to</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach($catch as $row):?>
                           <tr>
                              <td><?=$row['catch_date'].' '.$row['catch_time'];?></td>
                              <td><?php
                                 $fisherman = $this->db->get_where('tbl_fisherman',['fisherman_id'=>$row['fisherman_id']])->row_array();
                                 echo $fisherman['fname'].' '.$fisherman['lname'];
                                 ?></td>

                              ?></td>
                              <td><?php 
                                 $vessel = $this->db->get_where('tbl_vessel',['vessel_id'=>$row['vessel_id']])->row_array();
                                 echo $vessel['vessel_name'];
                                 ?></td>
                              ?></td>
                              <td><?=$row['fish'] ?></td>
                              <td><?=$row['kilos']?></td>
                              <td><?=$row['price']?></td>
                              
                              <td>
                           <?php 
                              $vessel = $this->db->get_where('tbl_market',['market_id'=>$row['market_id']])->row_array();
                              echo $vessel['name'];
                           
                           ?>
                           </td>
                              <td class="text-center">
                                
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i> update</a>
                                 <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                       class="fa fa-trash-alt"></i> delete</a>
                              </td>
                           </tr>
                          <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="<?php echo base_url('assets'); ?>/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this Record?</h3>
               <div class="m-t-20">
                  <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="map" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form>
                           <div class="card-header">
                              <h5><img src="<?php echo base_url('assets'); ?>/img/boat.png" width="40"> Fishing Location</h5>
                           </div>
                  <div class="card-body">
                     <div class="mapouter"><div class="gmap_canvas"><iframe width="750" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=manila&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:700px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:700px;}</style></div></div>
                  </div>

                  <div class="card-footer">
                     <a href="#" class="btn btn-info" data-dismiss="modal">Close</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="edit" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="<?php echo base_url('assets'); ?>/img/fish.png" width="30"> Catch Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Date</label>
                                    <input type="date" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label class="float-left">Time</label>
                                    <input type="time" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="float-left">Fisherman Name</label>
                                    <input type="text" class="form-control" placeholder="Fisherman Name">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Vessel Name</label>
                                    <input type="text" class="form-control" placeholder="Vessel Name">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Fish Name</label>
                                    <input type="text" class="form-control" placeholder="Fish Name">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Catch in Kilogram</label>
                                    <input type="text" class="form-control" placeholder="Catch in Kilogram">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Fishing Location</label>
                                    <input type="text" class="form-control" placeholder="Fishing Location">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Dispatch to</label>
                                    <input type="text" class="form-control" placeholder="Fishing Market">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-info">Save Changes</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form method='post' action="<?php echo base_url('addcatch'); ?>">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="<?php echo base_url('assets'); ?>/img/fish.png" width="30"> Catch Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Date</label>
                                    <input type="date" name='cdate' class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Time</label>
                                    <input type="time" name='ctime' class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                 <label class="float-left">Fisherman: </label>
                                    <select name='cfisherman' class="form-control">
                                      <?php foreach($fishermen as $f): ?>
                                          <option value="<?php echo $f['fisherman_id']; ?>"><?php echo $f['fname'].' '.$f['lname']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                 <label class="float-left">Vessel: </label>
                                    <select name='cvessel' class="form-control">
                                      <?php foreach($vessels as $v): 
                                          
                                       ?>
                                       
                                          <option value="<?php echo $v['vessel_id']; ?>"><?php echo $v['vessel_name']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Catch Type:</label>
                                    <select name='cfish' class="form-control">
                                     
                                          <option value="Fish">Fish</option>
                                          <option value="Squid">Squid</option>
                                          <option value="Crab">Crab</option>
                                          <option value="Shells">Shells</option>
                                      
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Catch in Kilogram</label>
                                    <input type="text"  name="ckilos" class="form-control" placeholder="Catch in Kilogram">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Price : </label>
                                    <input type="text"  name="cprice" class="form-control" placeholder="Fixed Price">
                                 </div>
                              </div>
                            
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="float-left">Dispatch to</label>
                                    <select name='cmarket' class="form-control">
                                      <?php foreach($market as $r): ?>
                                          <option value="<?php echo $r['market_id']; ?>"><?php echo $r['name']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-info">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="<?php echo base_url('assets'); ?>/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/js/adminlte.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="<?php echo base_url('assets'); ?>/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
</body>

</html>