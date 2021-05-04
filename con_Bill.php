<?php

	session_start();
	extract($_POST);

	include_once('DB_Config.php');
	$sqlgetqty="select InStock from products where ModelName='$ModelName'";
	$resultgetqty = mysqli_query($con, $sqlgetqty);
	$rowgetqty = mysqli_fetch_assoc($resultgetqty);
	$qty=$rowgetqty['InStock'];

	$sql = "INSERT INTO bill (BillID, BrandName, ModelName, Price, Date, CustomerName, MobileNo, Address) VALUES (NULL, '$BrandName', '$ModelName', '$Price', '$Date', '$CustomerName', '$MobileNo', '$Address')";

	$result = mysqli_query($con, $sql);

	if($result>0)
	{
		$qty=$qty-1;
		$sqlupdate =  "UPDATE products SET InStock = '$qty' WHERE ModelName='$ModelName'";
		$resultupdate = mysqli_query($con, $sqlupdate);
	}

	if(mysqli_errno()){
		$_SESSION['err'] = "Something went wrong !";
		header("Location: Generate_Bill");
		die();
	}
	else{
		header("Location: Bill");
		die();
	}

?>