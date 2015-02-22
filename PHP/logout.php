<?php 
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['customerID']);
	echo "<script>window.location.href='/Internship/boot.php';</script>";	
?>