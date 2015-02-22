<?php
	session_start();
	require "connect.php";
	$videoID=$_GET["id"];
	$sql="delete from video where videoID=".$videoID;
	$res=mysql_query($sql);
?>