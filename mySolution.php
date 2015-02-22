<?php require 'header.php'; ?>
<div class="container">
	<div>
    	<h2>Editor</h2>
        <hr/>
	</div>
    <?php
					require "PHP/connect.php";
					$sql="select * from solution where customerID =". $_SESSION['customerID']." order by solutionID desc";
					$res = mysql_query($sql);
					while($row=mysql_fetch_assoc($res))
					{
						echo"	<div class='well'>
									<div class='row featurette'>
									<div class='col-md-5'>
									<div class='flex-video widescreen' style='margin: 0 auto;text-align:center;'>
									<video width='100%' height='auto'  src='".$row['solutionLocation']."' autostart='false'  controls=smallconsole></video>
									</div>
									</div>
									<div class='col-md-7'>
									 <h2>My Solution</h2>
									  <br/><br/>
									  <p class='lead'>This is the solution to <a href='videoDetail.php? id=".$row['videoID']."'> this video</a>.</p>
									</div>
									</div>
									</div>
									<hr/>
								";
					}
                ?>
</div>
<?php require "footer.php";?>