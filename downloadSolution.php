<?php
	require "header.php";
?>
<?php
	require "PHP/connect.php";
	$stars=$_POST['stars'];
	$comment=$_POST['comment'];
	$solutionID=$_POST['solutionID'];
	$customerID=$_SESSION['customerID'];
	$sql2="insert into comments(stars, comments, solutionID, fromCustomerID) values ($stars, '$comment', $solutionID, $customerID)";
	$res2 = mysql_query($sql2);
	$sql = "select * from solution where solutionID=$solutionID;";
	$res = mysql_query($sql);
	$row=mysql_fetch_assoc($res);
?>
<div class='container'>
			<h2>Download</h2>
            <hr/>
                <div class='container'>
                <div class='alert alert-success' style="font-size:20px">
                <strong>Thank you!</strong> You can download this solution now.
                </div>
                
                <div class='alert alert-warning'>
                <span style="font-size:20px"><a href="<?php echo $row['solutionLocation'];?>"><?php echo $row['solutionName']?></a></span>
                </div>
                <div class='alert alert-default'>
               <a class='btn btn-primary btn-lg' href='myVideo.php'>Back</a>
                </div>
            </div>    
</div>
<?php
	require "footer.php";
?>