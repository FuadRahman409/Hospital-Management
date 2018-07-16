<?php
	
	session_start();
	session_destroy();
	setcookie('pharmacist', '', time()-1, '/');
	header("location: LoginPage.php");
	
?>