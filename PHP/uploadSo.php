<?php
session_start();
$videoID=$_POST["videoID"];
require "connect.php";
$res2=mysql_query("select customerID from customer where username='".$_SESSION['username']."'");
$row2=mysql_fetch_assoc($res2);
$customerID=$row2['customerID'];
if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "video/avi")
|| ($_FILES["file"]["type"] == "video/mpeg"))
&& ($_FILES["file"]["size"] < 200000000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
    }
  else
    {
    if (file_exists("../Solution/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		$res=mysql_query("select max(solutionID) as maxSolutionID from solution");
		$extend = pathinfo($_FILES["file"]["name"]); 
		$extend = strtolower($extend["extension"]); 
		if($row=mysql_fetch_array($res))
		{
			$thisName=$row["maxSolutionID"]+1;
			move_uploaded_file($_FILES["file"]["tmp_name"],"../Solution/"."$thisName.".$extend);
			$res=mysql_query("insert into solution(solutionName, solutionLocation, videoID, customerID) values ('".$_FILES["file"]["name"]."', '/Internship/Solution/"."$thisName.".$extend."' , $videoID, ".$customerID.")");
			echo "<script>window.location.href='../mySolution.php'</script>";
		}
      }
    }
  }
else
  {
  echo "<script>alert('Invalid file');window.location.href='../uploadSolution.php'</script>";
  }
?>
