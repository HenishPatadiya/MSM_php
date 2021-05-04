 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products</title>

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
  extract($_GET);

  include_once('DB_Config.php');

  if (isset($_GET['id'])) {
      $sql = "SELECT * FROM products where ID=$id";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
  }
?>
    <div class="content-wrapper"><br>
        <div class="col-md-12">
              <div class="callout callout-danger">
                  <?php if(isset($_GET['id'])){ ?><i class="fas fa-pencil-alt"></i><?php } else{ ?><i class="fas fa-cart-plus"></i><?php } ?>
                  &nbsp;<?php if(isset($_GET['id'])){ echo("Update"); } else{ echo ("Add"); } ?> Product
                </h3>
              </div>

              <div class="card-body">
                <div class="callout callout-success">
                  <form action="con_AddEditProduct.php" method="post" enctype="multipart/form-data">
                        <?php if(isset($_GET['id'])){?>
                            <input type="hidden" value="<?php echo ($row['ID']) ?>" name="ID" style="width: 300px;">
                            <?php }?>

                         <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Brand Name :
                                    <select name="BrandName" id="" class="form-control" style="width: 300px;">
                                        <?php
                                        include_once('DBConfig.php');
                                        $sql1 = "SELECT * FROM brands";
                                        $result1 = mysqli_query($con, $sql1);
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                        ?>
                                            <option value="<?php echo ($row1['BrandName']) ?>"><?php echo ($row1['BrandName']) ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </label>
                            </div>

                        	<div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Model Name :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ModelName" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['ModelName']) ?>" <?php } ?>>
                                </label>
                            
                                <label for="exampleInputEmail1" style="margin: 10px;">RAM_ROM :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="RAM_ROM" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['RAM_ROM']) ?>" <?php } ?>>
                                </label>
                            
                                <label for="exampleInputEmail1" style="margin: 10px;">Camera :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Camera" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Camera']) ?>" <?php } ?>>
                                </label>
                            </div>

                             <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Processor :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Processor" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Processor']) ?>" <?php } ?>>
                                </label>
                            
                                <label for="exampleInputEmail1" style="margin: 10px;">Colour :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Colour" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Colour']) ?>" <?php } ?>>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Display Size :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DisplaySize" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['DisplaySize']) ?>" <?php } ?>>
                                </label>
                            
                                <label for="exampleInputEmail1" style="margin: 10px;">Display Type :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DisplayType" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['DisplayType']) ?>" <?php } ?>>
                                </label>

                                <label for="exampleInputEmail1" style="margin: 10px;">Resolution :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Resolution" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Resolution']) ?>" <?php } ?>>
                                </label>
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Battery :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Battery" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Battery']) ?>" <?php } ?>>
                                </label>
                            
                                <label for="exampleInputEmail1" style="margin: 10px;">Fingerprint Sensor :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="FingerprintSensor" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['FingerprintSensor']) ?>" <?php } ?>>
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">OS :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="OS" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['OS']) ?>" <?php } ?>>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">Price :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Price" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['Price']) ?>" <?php } ?>>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="margin: 10px;">In Stock :
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="InStock" style="width: 300px;" <?php if(isset($_GET['id'])) { ?> value="<?php echo ($row['InStock']) ?>" <?php } ?>>
                                </label>
                            </div>
                        
                        <?php if (isset($_GET['id'])) { ?>
                                <button type="submit" class="btn btn bg-gradient-info" style="margin: 10px;">Update</button>
                            <?php } 
                            else { ?>
                                <button type="submit" class="btn btn bg-gradient-success" style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn bg-gradient-danger" style="margin: 10px;">Reset</button>
                           <?php } ?>
                  </div>
              </div>
            </form>
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