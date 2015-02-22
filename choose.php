<?php
	require "header.php";
?>
    <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="js/star-rating.js" type="text/javascript"></script>

<?php
	require "PHP/connect.php";
	$solutionID=$_GET["id"];
	$sql="select * from solution where solutionID =". $solutionID.";";
	$res = mysql_query($sql);
	$row=mysql_fetch_assoc($res);
	echo "
	<div class='container'>
			<h2>Solution</h2>
			<hr class='divider'>
			
			<div class='col-md-12'>
				<div align='center'>
				<div class='well'>
					<video width='100%' height='80%' src='".$row['solutionLocation']."' autostart='false' controls='smallconsole'></video>
				</div>
			</div>
		<span class='divider'>&nbsp;</span> 
		
				<h2 class='col-lg-4'>Solution Name</h2>
				
				<p class='col-lg-12' style='font-size: 18px'>Solution description</p>
			
				<form class='form-horizontal' action='downloadSolution.php' method='post'>
				<h2 class='col-lg-4'>Comment</h2>
				<p style='font-size: 18px' class='col-lg-12'>If you want to download this video, please leave your comment</p>
				<div class='col-lg-12'>
				 <input id='rating-input' name='stars' type='number' min=0 max=5 step=0.5 data-size='md'>
				</div>
				
				<div class='col-lg-12'>
				<h2>Reason: </h2>
				<textarea style=' font-size:20px;' class='form-control' rows='8' name='comment'></textarea>
				</div>
				<div class='col-lg-12' style='margin-top:40px'>
				<input name='solutionID' type='text' value='".$solutionID."' style='display:none'/>
				<button type='submit' class='btn btn-primary btn-lg'>Submit</button>
    			<a class='btn btn-default btn-lg' href='javascript:window.history.back();'>Back</a>
				</div>
				</form>
			</div>
		
	</div>
	";
?>
<script>
        jQuery(document).ready(function () {
            $('#rating-input').rating({
                  min: 0,
                  max: 5,
                  rtl: false,
                  showCaption: true,
                  showClear: false,
                  size: 'md'
               });
        });
    </script>
<?php
	require "footer.php";
?>