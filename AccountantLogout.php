<?php
	
	session_start();
	session_destroy();
	setcookie('accountant', '', time()-1, '/');
	header("location: LoginPage.php");
	
?>