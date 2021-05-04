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
<body>

<?php
  session_start();

  extract($_POST);
  include_once("DB_Config.php");
  $sql = "SELECT * FROM bill order by BillID desc";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-store"></i>
          <span class="brand-text font-weight-light" style="font-family: Aharoni;">Mobile Store</span>
          <small class="float-right">Date: <?php echo $row['Date']; ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Mobile Store</strong><br>
          Punit Nagar Society,<br>
          Satyam Pan Street, Morbi-363641<br>
          <span style="color: gray;">Phone: </span>07990564811<br>
          <span style="color: gray;">Email: </span>mobilestore@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?php echo $row['CustomerName']; ?></strong><br>
          <span style="color: gray;">Address: </span><?php echo $row['Address']; ?><br>
          <span style="color: gray;">Phone: </span><?php echo $row['MobileNo']; ?><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Bill #<?php echo $row['BillID']; ?></b><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Brand</th>
            <th>Product</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td><?php echo $row['BrandName']; ?></td>
            <td><?php echo $row['ModelName']; ?></td>
            <td>₹ <?php echo $row['Price']; ?></td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-12">
        <p class="lead">Amount Due <?php echo $row['Date']; ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>₹ <?php echo $row['Price']; ?></td>
            </tr>
            <!-- <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>$5.80</td>
            </tr> -->
            <tr>
              <th>Total:</th>
              <td>₹ <?php echo $row['Price']; ?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /container -->
  </section>
  <button style="margin: 10px;" class="btn btn bg-gradient-secondary" onclick="window.print();">Print</button>
  <a href="DASHBOARD"><button style="margin: 10px;" class="btn btn bg-gradient-success">Home</button></a>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  
</script>
</body>
</html>
