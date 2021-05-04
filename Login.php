<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="con_Login.php" method="post">
				
				<h2 class="title">Login</h2>

         <?php 
          session_start();
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

        <div class="div">
        <h1 class="title" style="color: #F9A826">Who are you...?</h1>
            
                <input type="radio" name="Designation" value="Manager"><span style="color: #999999"> Manager</span>
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
            	
            	<button type="submit" class="btn" value="Login">Login</button>
        </form>
      </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
