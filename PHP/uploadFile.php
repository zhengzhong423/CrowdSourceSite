<?php
session_start();
$description=$_POST['description'];
require "connect.php";
$res2=mysql_query("select customerID from customer where username='".$_SESSION['username']."'");
$row2=mysql_fetch_assoc($res2);
$customerID=$row2['customerID'];
if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "video/avi")
|| ($_FILES["file"]["type"] == "video/mpeg"))
&& ($_FILES["file"]["size"] < 200000000000))
  {

    {
    if (file_exists("../Upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		$res=mysql_query("select max(videoID) as maxVideoID from video");
		$extend = pathinfo($_FILES["file"]["name"]); 
		$extend = strtolower($extend["extension"]); 
		if($row=mysql_fetch_array($res))
		{
			$thisName=$row['maxVideoID']+1;
			move_uploaded_file($_FILES["file"]["tmp_name"],"../Upload/"."$thisName.".$extend);
			$res=mysql_query("insert into video(videoName, videoLocation, videoPublic, customerID, description) values ('".$_FILES["file"]["name"]."', '/Internship/Upload/"."$thisName.".$extend."' ,1 , ".$customerID.", '".$description."')");
			$_SESSION['uploadFile']=1;
		
			echo "<script>window.location.href='../myVideo.php'</script>";
		}
      }
    }
  }
else
  {
  echo "<script>alert('Invalid file');window.location.href='../upload.php'</script>";
  }
?>
