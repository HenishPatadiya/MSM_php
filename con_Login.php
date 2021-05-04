<?php
	
	session_start();
	extract($_POST);
	include_once("DB_Config.php");
	$sql = "select * from User where UserName='$UserName' and Password='$Password' and Designation='$Designation'";

	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_assoc($result);
	
	if($row){
		$_SESSION['UN'] = $_POST['UserName'];
		if($row['Designation']=='Manager'){
			$_SESSION['Access'] = $_POST['Designation'];
			header("Location: DASHBOARD");
			die();
		}
		else{
			header("Location: DASHBOARD");
			die();
		}				
	}
	else{
		$_SESSION['err']="Username / Password are incorrect !";
		header("Location: LOGIN");
		die();
	}

?>