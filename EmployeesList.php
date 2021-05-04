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

<?php 
  include_once("parts/navbar.php");
  include_once("parts/sidebar.php");
?>
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><br>
        <div class="col-md-12">
              <div class="callout callout-info">
                  <i class="fas fa-user"></i>
                  &nbsp;Employees
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
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-warning">
                  <table class="table table-responsive table-hover">
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                       <th scope="col">Gender</th>
                       <th scope="col">Email</th>
                       <th scope="col">Mobile no.</th>
                       <th scope="col">Address</th>
                     <?php if(isset($_SESSION['Access'])){ ?>
                       <th scope="col">Salary</th>
                       <th scope="col">Edit</th>
                       <th scope="col">Delete</th>
                     <?php } ?>
                     </tr> 
                     <?php
                        include_once('DB_Config.php');
                        $sql = "select * from employee";
                        $result = mysqli_query($con, $sql);
                        
                        while($row = mysqli_fetch_assoc($result)){
                      ?>
                       <tr>
                         <td style="text-align: center;"><?php echo ($row['EmployeeID']) ?></td>
                         <td style="text-align: center;"><?php echo ($row['Name']) ?></td>
                         <td style="text-align: center;"><?php echo ($row['Gender']) ?></td>
                         <td style="text-align: center;"><?php echo ($row['Email']) ?></td>
                         <td style="text-align: center;"><?php echo ($row['MobileNo']) ?></td>
                         <td style="text-align: center;"><?php echo ($row['Address']) ?></td>
                        <?php if(isset($_SESSION['Access'])){ ?>
                         <td style="text-align: center;"><?php echo ($row['Salary']) ?></td>
                         <td style="text-align: center;"><a href="Edit_Employee?id=<?php echo ($row['EmployeeID']) ?>"><i class="fas fa-user-edit" style="color: black"></i></a></td>
                         <td style="text-align: center;"><a href="con_DeleteEmployee.php?id=<?php echo ($row['EmployeeID']) ?>" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash-alt" style="color: red"></i></a></td>
                        <?php } ?>
                       </tr>
                       <?php  
                        }
                       ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </table>
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