<?php
	require "header.php";
?>

<?php
	require "PHP/connect.php";
	$videoID=$_GET["id"];
	$sql="select * from video where videoID =". $videoID.";";
	$res = mysql_query($sql);
	$row=mysql_fetch_assoc($res);
	$ar = explode('.',$row['videoName']);
	$videoName = $ar['0'];
	echo "
	
	<div class='container'>
			<h2>".$videoName."</h2>
			<hr/>
			<div class='col-md-12'>
				<div align='center'>
				<div class='well'>
					<video width='100%' height='80%' src='".$row['videoLocation']."' autostart='false' controls='bigconsol'></video>
				</div>
			</div>
			<div class='well'>
				<div></div>
				<div><h2>Description:</h2>
					<h3>".$row['description']."</h3>
				</div>
		
				<div style='margin-top:20px'>
    			<a class='btn btn-primary btn-lg' href='javascript:window.history.back();'>Back</a>
				</div>
		</div>
		</div>
	</div>
	";
?>
<?php
	require "footer.php";
?>