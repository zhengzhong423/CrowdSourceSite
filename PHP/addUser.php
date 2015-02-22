<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	require "connect.php";
	$res=mysql_query("insert into customer(username, password, email) values('$username',password('$password'),'$email')");
	if(!$res)
	{
		echo "<script>alert('Same Username');window.location.href='javascript:history.back()';</script>";
	}
	else 
	{
		$_SESSION['username']=$username;
		echo "<script>window.location.href='/Internship/boot.php';</script>";
	}
	mysql_close($con);
?>