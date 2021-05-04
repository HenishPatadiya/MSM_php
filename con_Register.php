<?php
	
	session_start();

	extract($_POST);

	if($Password!=$RePassword){
		$_SESSION['err']="Password does not match !";
		header("Location: AddUser.php");
		die();
	}

	include_once('DB_Config.php');

	$sqlfind = "SELECT UserName FROM user WHERE UserName LIKE '$UserName'";
    $resultfind= mysqli_query($con,$sqlfind);
    
    if (mysqli_num_rows($resultfind)>0) 
    {
        $_SESSION['err']="User Already Exist !";
        header("Location: Add_User");
        die();
    }

	else{
		$sql ="INSERT INTO user (UserID, UserName, Password, Designation) VALUES (NULL, '$UserName', '$Password', '$Designation')";

		$result = mysqli_query($con, $sql);

		if(mysqli_errno($con)) {
			$_SESSION['err']= "Something went wrong !";
			header("Location: Add_User");
			die();
		}
		else{
			header("Location: DASHBOARD");
			$_SESSION['msg']= "Register Successfully...";
			die();	
		}
	}
?>