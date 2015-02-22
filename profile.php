<?php require 'header.php'?>
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="js/star-rating.js" type="text/javascript"></script>
<script>
        jQuery(document).ready(function () {
            $('.rating-input').rating({
                  min: 0,
                  max: 5,
                  rtl: false,
                  showCaption: true,
                  showClear: false,
                  size: 'sm',
				  hoverEnabled:false,
               });
        });
</script>

<div class="container">
<div>
	<h2>My Profile</h2>
</div>
<hr/>

<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">General Information</a></li>
  <li role="presentation"><a href="#upload" role="tab" data-toggle="tab">My Upload Videos</a></li>
  <li role="presentation"><a href="#solution" role="tab" data-toggle="tab">My Edited Videos</a></li>
  <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
  	<?php 
		require 'PHP/connect.php';
		$username=$_SESSION['username'];
		$res=mysql_query("select * from customer where username='$username'");
		if($row=mysql_fetch_array($res))
		{
			echo "
			<hr/>
			<div class='well'>
			<div class='row featurette'>
				<h4><span class='col-sm-2'><strong>Username: </strong></span>".$row['username']."</h4>
				<br/>
				<h4><span class='col-sm-2'><strong>Email: </strong></span>".$row['email']."</h4>
				<br/>
			</div>
			</div>";
		}
	?>
  </div>
  <div role="tabpanel" class="tab-pane" id="upload">
  <?php
  				$sql2="select count(videoID) as num from video where customerID = ". $_SESSION['customerID'].";";
				$res2 = mysql_query($sql2);
				if($res2)
				{
					$row2=mysql_fetch_assoc($res2);	
					echo "<hr/>
								<div class='well'>
									<div class='col-sm-offset-1'>
										<h2>You have uploaded ".$row2['num']." videos.</h2>
									</div>
								</div>
								<hr/>
								";
				}
				$sql="select * from video where customerID =". $_SESSION['customerID']." order by videoID desc";
				$res = mysql_query($sql);
				while($row=mysql_fetch_assoc($res))
				{
					$ar = explode('.',$row['videoName']);
						$videoName = $ar['0'];
						echo"	<hr/>
									<div class='well'>
									<div class='row featurette'>	
									<div class='col-md-7'>	
									 <h2>".$videoName."</h2>
									 <h2><span class='text-muted col-sm-2'>$20</span><span class='col-sm-3'></span>
									 <a class='btn btn-warning col-sm-2' href='solution.php? id=".$row['videoID']."'>Solution</a>
									 <span class='col-sm-1'></span>
									 <a class='btn btn-danger col-sm-2' href='PHP/deleteVideo.php? id=".$row['videoID']."'>Delete</a>
									 </h2>
									  <br/><br/><br/><br/>
									  <p class='lead'>".$row['description']."</p>
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
  <div role="tabpanel" class="tab-pane" id="solution">
  	<hr/>
  	<?php
		$sql2="select count(solutionID) as num from solution where customerID = ". $_SESSION['customerID'].";";
				$res2 = mysql_query($sql2);
				if($res2)
				{
					$row2=mysql_fetch_assoc($res2);	
					echo "
								<div class='well'>
									<div class='col-sm-offset-1'>
										<h2>You have edited ".$row2['num']." videos.</h2>
									</div>
								</div>
								<hr/>
								";
				}
		$sql2="select avg(stars) as avgStars from comments, solution where comments.solutionID=solution.solutionID and solution.customerID=".$_SESSION['customerID'].";";
		$res2=mysql_query($sql2);
		$row2=mysql_fetch_assoc($res2);
    	echo "
			<div class='well'>
			<div class='row featurette'>
					<h4><span class='col-sm-2' style='position:relative; top:10px;'><strong>Average Rating: </strong></span>
					<span class='col-sm-6'><input class='rating-input' type='number' value='".round($row2['avgStars'],2)."'/></span>
					<a href='myFeedback.php' style='position:relative; top:10px;'>See detail</a></h4>
				<br/>
			</div>
			</div>";
	?>
  </div>
  <div role="tabpanel" class="tab-pane" id="settings"></div>
</div>

<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>
</div>
<?php require 'footer.php'?>