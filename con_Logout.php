<?php
	
	session_start();
	// session_destroy();
	unset($_SESSION['UN']);
	unset($_SESSION['Access']);
  	$_SESSION['msg']="Logout Successfully.";
	header("Location: LOGIN");

?>