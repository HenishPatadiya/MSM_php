<?php
    session_start();
    
    extract($_GET);
	
	include_once('DB_Config.php');
	
	$sql= "DELETE FROM products where ID='$id'";
	
	$result = mysqli_query($con, $sql);

	if(mysqli_errno($con)) {
    	$_SESSION['err'] = "Somthing went wrong !";
    	header("Location: AllProductList.php");
    	die();
	} 
	else {
    	$_SESSION['msg'] = "Deleted successfully.";
    	header("Location: AllProductList.php");
    	die();
	}
?>