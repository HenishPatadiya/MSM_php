<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Detail</title>

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
  
  include_once('DB_Config.php');
  extract($_GET);
  $sql = "select * from products where ID=$id";
  
  $result = mysqli_query($con, $sql);
                        
  while($row = mysqli_fetch_assoc($result)){
?>
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><br>
        <div class="col-md-12">
              <div class="callout callout-secondary">
                <div class="row">
                  <div class="col-md-12">
                    <h3><b><?php echo $row['BrandName']; ?></b></h3>
                    <h4><?php echo $row['ModelName']; ?></h4>
                    <span style="color: gray">In Stock : </span><?php echo $row['InStock']; ?>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">RAM / ROM : </span><?php echo $row['RAM_ROM']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">Camera : </span><?php echo $row['Camera']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">Colour : </span><?php echo $row['Colour']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">DisplaySize : </span><?php echo $row['DisplaySize']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">DisplayType : </span><?php echo $row['DisplayType']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">Processor : </span><?php echo $row['Processor']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">Battery : </span><?php echo $row['Battery']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">FingerprintSensor : </span><?php echo $row['FingerprintSensor']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">Resolution : </span><?php echo $row['Resolution']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">OS : </span><?php echo $row['OS']; ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <span style="color: gray">Price : </span><?php echo $row['Price']; ?>
                  </div>
                </div><hr>
                <a href="Generate_Bill?id=<?php echo ($row['ID']) ?>"><button type="submit" class="btn btn bg-gradient-secondary">Generate Bill</button></a>
              </div>
            </div>
        </div>
    </div>
  <?php } ?>
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