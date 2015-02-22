<?php
$videoID=$_GET["id"];
require 'header.php';
if(!isset($_SESSION['username']))
{
	$_SESSION['upload']=1;
	echo "<script>window.location.href='signin.php';</script>";
}
?>
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/fileinput.js" type="text/javascript"></script>
   <div class="container" style="">
   <h2>Raw Video</h2>
   <hr/>
    <div class='row featurette'>
		<div class='col-md-7'>
				<div class='flex-video widescreen' style='margin: 0 auto;text-align:center;'>
				<video width='560' height='349'  src='<?php 
				require "PHP/connect.php";
					$sql="select * from video where videoID =". $videoID.";";
					$res = mysql_query($sql);
					$row=mysql_fetch_assoc($res);
				echo $row["videoLocation"];?>' autostart=false  controls=smallconsole></video>
				</div>
		</div>
        <div class='col-md-5'>
									 <h2><?php 
									 $ar = explode('.',$row['videoName']);
										$videoName = $ar['0'];
										echo $videoName; ?></h2>
									 <h2><span class='text-muted col-sm-2'>$20</span><span class='col-sm-2'></span>
									 </h2>
									  <br/><br/> <br/><br/>
									  <p class='lead'><?php echo $row['description'];?></p>
									</div>
     </div>
<div><h1 class="row featurette"></h1></div>
<form action="PHP/uploadSo.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
<h2 class="form-signin-heading">Upload Solution</h2>
    <hr />
        <div class="form-group">
        <div class="col-sm-10">
        <input name="videoID" style="display:none" value="<?php echo $videoID;?>"/>
        <div class="col-sm-2"></div><input id="file-1a" type="file" name="file" multiple="false" class="file" data-preview-file-type="any" data-overwrite-initial="false"/>
         </div>
         </div>
         <div class="form-group">
         <div class="col-sm-4"></div><input type="submit" name="submit" value="Upload"  class="btn btn-primary col-sm-2"/>
         </div>
</form>
</div>
<?php require 'footer.php'; ?>
