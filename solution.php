<?php
	require 'header.php';
?>
<?php
$videoID=$_GET["id"];
	require "PHP/connect.php";
	$sql="select * from video where videoID =". $videoID.";";
	$res = mysql_query($sql);
	$row=mysql_fetch_assoc($res);
?>
<div class="container">
   <h2>My Solution</h2>
   <hr/>

    <div class='row featurette'>
		<div class='col-md-7'>
				<div class='flex-video widescreen' style='margin: 0 auto;text-align:center;'>
				<video width='100%' height='auto' src='<?php echo $row["videoLocation"];?>' autostart=false  controls=smallconsole></video>
				</div>
		</div>
        <div class='col-md-5'>
									 <h2><?php 
									 $ar = explode('.',$row['videoName']);
										$videoName = $ar['0'];
										echo $videoName; ?></h2>
									 <h2><span class='text-muted col-sm-2'>$20</span><span class='col-sm-2'></span>
									 </h2>
									  <br/><br/><br/><br/>
									  <p class='lead'><?php echo $row['description'];?></p>
		</div>
     </div>
<hr class='featurette-divider'>
<h2>Solutions</h2>
<hr/>
 <div class='row featurette'>
 <?php
			$sql="select * from solution where videoID =$videoID";
			$res = mysql_query($sql);
			while($row=mysql_fetch_assoc($res))
			{
				echo "
				<div class='well'>
				<div class='row featurette'>
				<div class='col-md-5'>
									 <h2>Video Name</h2>
									 <h2><span class='text-muted col-sm-2'>$20</span><span class='col-sm-2'></span>
									 <a class='btn btn-info btn-lg' href='choose.php? id=".$row['solutionID']."'>Choose it</a>
									 <span class='col-sm-1'></span>
									 </h2>
									  <p class='lead'>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodos,sdfiuo sdfijoewu, jidfojsfodjisjf oidfjio.</p>
									</div>
									<div class='col-md-7'>
									<div class='flex-video widescreen' style='margin: 0 auto;text-align:center;'>
									<video width='560' height='349'  src='".$row['solutionLocation']."' autostart='false'  controls=smallconsole></video>
									</div>
									</div>
				
				</div>
				</div>
				<hr/>";	
			}
        ?>
 </div>
</div>
<?php require 'footer.php'?>