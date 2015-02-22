<?php require 'header.php';
?>
    <div class="container">
    	<h2>My Video</h2>
        <?php
		if(isset($_SESSION['uploadFile']))
		{
			echo "
			<div class='container'>
			<div class='alert alert-success'>
			<a class='close' data-dismiss='alert'>close</a> <strong>Congratulations!</strong> Your video will be edited soon.
			</div>
			</div>
			";
			unset($_SESSION['uploadFile']);
		}
  ?>
        	<hr/>
            	<?php
					require "PHP/connect.php";
					$res2=mysql_query("select customerID from customer where username='".$_SESSION['username']."'");
					$row2=mysql_fetch_assoc($res2);
					$customerID=$row2['customerID'];
					$sql="select * from video where customerID =". $customerID." order by videoID desc";
					$res = mysql_query($sql);
					while($row=mysql_fetch_assoc($res))
					{
						$sql3="select count(*) as num from solution where videoID =".$row['videoID']."";
						$res3 = mysql_query($sql3);
						$row3=mysql_fetch_assoc($res3);
						$ar = explode('.',$row['videoName']);
						$videoName = $ar['0'];
						echo"	<div class='well'>
									<div class='row featurette'>
									
									<div class='col-md-7'>
									
									 <a href='videoDetail.php? id=".$row['videoID']."'><h2>".$videoName."</h2></a>
									 <span class='text-muted col-sm-3' style='line-height: 50px;font-size:20px'>".$row3['num']." Solution(s)</span><span class='col-sm-4'></span>
									 <a class='btn btn-warning btn-lg col-sm-2' href='solution.php? id=".$row['videoID']."'>Solution</a>
									 <span class='col-sm-1'></span>
									 <a class='btn btn-danger btn-lg col-sm-2' href='PHP/deleteVideo.php? id=".$row['videoID']."'>Delete</a>
									
									  <br/><br/><br/>
									  <div>
									  <p class='lead'>".$row['description']."</p>
									  </div>
									</div>
									<div class='col-md-5'>
									<div class='flex-video widescreen' style='margin: 0 auto;text-align:center;'>
									<video width='100%' height='auto'  src='".$row['videoLocation']."' autostart='false'  controls=smallconsole></video>
									</div>
									</div>
									</div>
									</div>
									<hr/>
								";
					}
                ?>
            	
                
     </div>
<?php require 'footer.php'?>