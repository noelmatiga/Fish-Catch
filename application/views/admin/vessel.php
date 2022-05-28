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
                     <h1 class="m-0"><img src="<?php echo base_url('assets'); ?>/img/boat.png" width="35"> List of Vessel</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Vessel</li>
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
                              <th>Vessel Name</th>
                              <th>Description</th>
                              <th>Owner</th>
                              <th>Image</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($vessel as $v): ?>
                           <tr>
                              <td><?php echo $v['vessel_name']; ?></td>
                              <td><?php echo $v['vessel_desc']; ?></td>
                              <td><?php 
                                 $id = $v['fisherman_id'];
                                 $this->db->where('fisherman_id', $id);
                                 $query = $this->db->get('tbl_fisherman');
                                 $owner = $query->row_array();
                                 echo $owner['fname'].' '.$owner['lname'];
                                 ?></td>
                              <td><img src="<?php echo base_url('assets/uploads/vessels/'.$v['vessel_img']); ?>" width="100"></td>
                             
                              <td class="text-center">
                                 <a href="#" data-toggle="modal" data-target="#edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                 <a href="#" data-toggle="modal" data-target="#delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
               <h3>Are you sure want to delete this Vessel?</h3>
               <div class="m-t-20">
                  <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="edit" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="<?php echo base_url('assets'); ?>/img/boat.png" width="30"> Vessel Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Vessel Name</label>
                                    <input type="text" class="form-control" placeholder="Vessel Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Description</label>
                                    <textarea class="form-control" placeholder="Description"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">FIsherman Owner</label>
                                    <input type="text" class="form-control" placeholder="FIsherman Owner">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Choose Picture</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                       </div>
                                    </div>
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
      <div class="modal-dialog modal-dialog-centered modal-md">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form action='<?php echo base_url('addvessel');?>' method='post' enctype='multipart/form-data'>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="<?php echo base_url('assets'); ?>/img/boat.png" width="30"> Vessel Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Vessel Name</label>
                                    <input type="text" name='vname' class="form-control" placeholder="Vessel Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Description</label>
                                    <textarea class="form-control" name='vdesc' placeholder="Description"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                              <div class="form-group">
                                    <label class="float-left">Vessel Type: </label>
                                    <select name='vtype' class="form-control">
                                      
                                          <option value="Small Vessel">Small Vessel</option>
                                          <option value="Medium Vessel">Medium Vessel</option>
                                          <option value="Commercial Vessel">Commercial Vessel</option>
                                          <option value="Municipal Vessel">Municipal Vessel</option>
                                       
                                      
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                              <div class="form-group">
                                    <label class="float-left">Fishing Gear: </label>
                                    <select name='vtype' class="form-control">
                                      
                                          <option value="Surrounding Net">Surrounding Net</option>
                                          <option value="Seine Net">Seine Net</option>
                                          <option value="Trawl">Trawl</option>
                                          <option value="Gill Net">Gill Net</option>
                                          <option value="Scoop Net">Scoop Net</option>
                                          <option value="Lift Net">Lift Net</option>
                                          <option value="Falling Gear">Falling Gear</option>
                                          <option value="Trap">Trap</option>
                                          <option value="Hook and Line">Hook and Line</option>
                                          <option value="Drive in Net">Drive in Net</option>
                                          <option value="Dredge">Dredge</option>
                                          <option value="Miscellaeneous">Miscellaeneous</option>

                                       
                                      
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                              <div class="form-group">
                                    <label class="float-left">Fisherman: </label>
                                    <select name='vfisherman' class="form-control">
                                      <?php foreach($fisherman as $f): ?>
                                          <option value="<?php echo $f['fisherman_id']; ?>"><?php echo $f['fname'].' '.$f['lname']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Choose Picture</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" name='vpic' class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                       </div>
                                    </div>
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