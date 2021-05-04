<?php 
session_start();
  if(!isset($_SESSION['Access'])){
    $_SESSION['err'] = "Please login as Manager First...!";
     header("Location: Login.php");
     die();
  }
  if(!isset($_SESSION['UN'])) {
    $_SESSION['err'] = "Login First...!";
    header("Location: Login.php");
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employees</title>

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

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="con_Logout.php" onclick="return confirm('Are you sure want to Logout ?');">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->
<?php 
  /*include_once("parts/navbar.php");*/
  include_once("parts/sidebar.php");
  extract($_GET);

  include_once('DB_Config.php');

  if (isset($_GET['id'])) {
      $sql = "SELECT * FROM employee where EmployeeID=$id";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
  }
?>
    <div class="content-wrapper"><br>
        <div class="col-md-12">
              <div class="callout callout-danger">
                  <?php if(isset($_GET['id'])){ ?><i class="far fa-address-card"></i><?php } else{ ?><i class="nav-icon fas fa-user-plus"></i><?php } ?>
                  &nbsp;<?php if(isset($_GET['id'])){ echo("Update"); } else{ echo ("Add"); } ?> Employee
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
                  <form action="con_AddEditEmployee.php" method="post" enctype="multipart/form-data">
                        <?php if(isset($_GET['id'])){?>
                            <input type="hidden" value="<?php echo ($row['EmployeeID']) ?>" name="EmployeeID" style="width: 300px;">
                            <?php }?>
                        <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Employee Name :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Name']) ?>" <?php } ?>>
                                </label>
                            </div>
                        <div class="form-group">
                                <label style="margin: 10px;">Gender :<br>
                                      <input type="radio" name="Gender" value="Male" <?php if(isset($row) && $row['Gender']=='Male') { echo "checked"; } ?>> Male
                                      <input type="radio" name="Gender" value="Female" <?php if(isset($row) && $row['Gender']=='Female') { echo "checked"; } ?>> Female
                                      <input type="radio" name="Gender" value="Other" <?php if(isset($row) && $row['Gender']=='Other') { echo "checked"; } ?>> Other
                                </label>
                            </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Email :
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Email']) ?>" <?php } ?>>
                                </label>
                            </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Mobile Number :
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="MobileNo" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['MobileNo']) ?>" <?php } ?>>
                                </label>
                            </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Address :
                                  <textarea class="form-control" name="Address" >
                                    <?php if(isset($_GET['id'])){ echo ($row['Address']); } ?>
                                  </textarea>
                                </label>
                            </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Salary :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Salary" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Salary']) ?>" <?php } ?>>
                                </label>
                            </div>
                        <?php if (isset($_GET['id'])) { ?>
                                <button type="submit" class="btn btn bg-gradient-info" style="margin: 10px;">Update</button>
                            <?php } 
                            else { ?>
                                <button type="submit" class="btn btn bg-gradient-success" style="margin: 10px;">Add</button>
                                <button type="submit" class="btn btn bg-gradient-danger" style="margin: 10px;">Reset</button>
                           <?php } ?>
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