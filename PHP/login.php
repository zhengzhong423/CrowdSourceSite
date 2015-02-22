<?php 
session_start();
require "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$res=mysql_query("select * from customer where username='$username' and password=password('$password')");
if($row=mysql_fetch_array($res))
{
	$_SESSION['username']=$username;
	$_SESSION['customerID']=$row['customerID'];
	echo "<script>window.location.href='/Internship/boot.php';</script>";	
}
else
{
	$_SESSION['errorLogin']=1;
	echo "<script>window.location.href='/Internship/signin.php';</script>";	
}