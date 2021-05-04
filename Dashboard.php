<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php 
  include_once("parts/navbar.php");
  include_once("parts/sidebar.php");
  include("DB_Config.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-primary">
              <div class="inner">
                <h3>Samsung</h3>
                  <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='Samsung'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
              
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=Samsung" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3>Apple</h3>
                 <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='Apple'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
                
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=Apple" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>realme</h3>
                 <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='realme'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
                
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=realme" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>ONEPLUS</h3>
                 <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='ONEPLUS'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
                 
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=ONEPLUS" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
         <div class="row">
          
           <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>micromax</h3>
                
                <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='micromax'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
              
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=micromax" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Google</h3>

                <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='Google'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
              
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=Google" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box badge-primary">
              <div class="inner">
                <h3>vivo</h3>

                <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='vivo'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
              
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=vivo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>Xiaomi</h3>
                
                <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='Xiaomi'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>
              
              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=Xiaomi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
        <!-- /.row -->
        <div class="row">
         <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-success">
              <div class="inner">
                <h3>oppo</h3>

                <?php   
                      $sql = "SELECT SUM(InStock) AS stock FROM products WHERE BrandName='oppo'";
                      $result=mysqli_query($con,$sql);
                      $row=mysqli_fetch_assoc($result);
                      $count=$row['stock'];
                    ?>
                <h4><?php echo $count; ?></h4>

              </div>
              <div class="icon">
                <i class="fas fa-mobile"></i>
              </div>
              <a href="Product_List?name=oppo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        </div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div> --><!-- /.card-header -->
              <!-- <div class="card-body">
                <div class="tab-content p-0"> -->
                  <!-- Morris chart - Sales -->
                  <!-- <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div> --><!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <!-- <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3> -->
                <!-- card tools -->
                <!-- <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div> -->
                <!-- /.card-tools -->
              <!-- </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div> -->
              <!-- /.card-body-->
              <!-- <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div> -->
                  <!-- ./col -->
                  <!-- <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div> -->
                  <!-- ./col -->
                  <!-- <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div> -->
                  <!-- ./col -->
                <!-- </div> -->
                <!-- /.row -->
             <!--  </div>
            </div> -->
            <!-- /.card -->

            <!-- solid sales graph -->
           <!--  <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div> -->
              <!-- /.card-body -->
              <!-- <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div> -->
                  <!-- ./col -->
                  <!-- <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div> -->
                  <!-- ./col -->
                 <!--  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div> -->
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
           <!--  <div class="card bg-gradient-danger">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3> -->
                <!-- tools card -->
                <!-- <div class="card-tools">
                  <button type="button" class="btn bg-danger btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> -->
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <!-- <div class="card-body pt-0"> -->
                <!--The calendar -->
                <!-- <div id="calendar" style="width: 100%"></div>
              </div> -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
  include_once("parts/footer.php");
?>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
