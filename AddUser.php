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
<html>
<head>
  <title>Add User</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <img class="wave" src="img/wave.png">
  <div class="container">
    <div class="img">
      <img src="img/adduser.svg">
    </div>

    <div class="login-content">
      <form action="con_Register.php" method="post">
        <h2 class="title">Register New User</h2>

         <?php 
            if (isset($_SESSION['err'])) {
            ?>
               <span style="color: red">
                    <?php echo ($_SESSION['err']) ?>
                </span>
                <?php unset($_SESSION['err']);
            }
            elseif (isset($_SESSION['msg'])) {
            ?>
                <span style="color: green;">
                    <?php echo ($_SESSION['msg']); ?>
                </span>
                <?php unset($_SESSION['msg']);
            }
        ?>

        <div class="div">
        <h1 class="title" style="color: #F9A826">Who are you...?</h1>
            
                <input type="radio" name="Designation" value="Manager"><span style="color: #999999"> Manager</span><br>
                <input type="radio" name="Designation" value="Employee"><span style="color: #999999"> Employee</span><br><br>
         
                 <!--  <select class="btn">
                    <option value="manager" style="color: gray;">Manager</option>
                    <option value="employee" style="color: gray;">Employee</option>
                  </select> -->
            </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username</h5>
                    <input type="text" class="input" name="UserName" required>
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="Password" required>
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Re-Enter Password</h5>
                    <input type="password" class="input" name="RePassword" required>
                 </div>
              </div>
              
              <button type="submit" class="btn">Add User</button>
        </form>
      </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>