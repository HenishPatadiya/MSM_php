<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bill</title>

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
  include_once('parts/navbar.php');
  include_once("parts/sidebar.php");
  extract($_GET);

  include_once('DB_Config.php');
  if (isset($_GET['id'])) {
      $sql = "SELECT * FROM products WHERE ID=$id";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
  }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><br>
    <div class="col-md-12">
      <div class="callout callout-danger">
         <i class="fas fa-file-invoice"></i>&nbsp; Bill
        </h3>
      </div>
      <?php
          if (isset($_SESSION['err'])) {
              ?>
              <b style="color: red">
                <?php echo ($_SESSION['err']) ?>
              </b>
              <?php unset($_SESSION['err']);
            } 
            elseif (isset($_SESSION['msg'])) {
            ?>
              <b style="color: green;">
                <?php echo ($_SESSION['msg']); ?>
              </b>
              <?php unset($_SESSION['msg']);
            } 
          ?>
      <div class="card-body">
        <div class="callout callout-success">
          <form action="con_Bill.php" method="post">
            <?php if(isset($_GET['id'])){ ?>
            <div class="form-group">
                  <label for="exampleInputEmail1" style="margin: 10px;">Brand Name :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="BrandName" style="width: 300px;"  value="<?php echo ($row['BrandName']); ?>">
                  </label>
              </div>
            
            <?php
              }
              if(isset($_GET['id'])){ ?>
            <div class="form-group">
                  <label for="exampleInputEmail1" style="margin: 10px;">Model Name :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ModelName" style="width: 300px;"  value="<?php echo ($row['ModelName']); ?>">
                  </label>
              </div>
            
            <?php
              }
              ?>
              <div class="form-group">
                  <label for="exampleInputEmail1" style="margin: 10px;">Date :
                      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Date" style="width: 300px;">
                  </label>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="margin: 10px;">Customer Name :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CustomerName" style="width: 300px;">
                  </label>
                
                  <label for="exampleInputEmail1" style="margin: 10px;">Mobile No. :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="MobileNo" style="width: 300px;">
                  </label>
                
                  <label for="exampleInputEmail1" style="margin: 10px;">Address :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Address" style="width: 300px;">
                  </label>
                </div>
                <?php if(isset($_GET['id'])){ ?>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="margin: 10px;">Price :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Price" style="width: 300px;" value="<?php echo ($row['Price']); ?>">
                  </label>
                </div>
                <?php }
                  else{ ?>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="margin: 10px;">Price :
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Price" style="width: 300px;">
                  </label>
                </div>
                <?php }?>
                <button style="margin: 10px;" type="submit" class="btn btn bg-gradient-secondary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>    
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