<?php require 'header.php'
?>
    <div class="container">
    	<h2>Public Videos Plaza</h2>
        	<hr/>
            	<?php
					require "PHP/connect.php";
					$sql="select * from video where videoPublic = 1 order by videoID desc";
					$res = mysql_query($sql);
					
					while($row=mysql_fetch_assoc($res))
					{
						$sql3="select count(*) as num from solution where videoID =".$row['videoID']."";
						$res3 = mysql_query($sql3);
						$row3=mysql_fetch_assoc($res3);
			
						$ar = explode('.',$row['videoName']);
						$videoName = $ar['0'];
						echo"
									<div class='well'>
									<div class='row featurette'>
									<div class='col-md-7'>
									<div class='flex-video widescreen' style='margin: 0 auto;text-align:center;'>
									<video width='100%' height='auto'  src='".$row['videoLocation']."' autostart=false  controls=smallconsole></video>
									</div>
									</div>
									<div class='col-lg-5'>
									 <a href='videoDetail.php? id=".$row['videoID']."'><h2>".$videoName."</h2></a>
									 <h2><span class='text-muted col-sm-2'>$20</span><span class='col-sm-2'></span>
									 <a class='btn btn-info col-lg-3' href='".$row['videoLocation']."'>Download</a>
									 <span class='col-sm-1'></span>
									 <a class='btn btn-success col-lg-4' href='uploadSolution.php? id=".$row['videoID']."'>Upload solution</a>
									 </h2>
									  <br/><br/><br/><br/>
									  <p class='lead'>".$row["description"]."</p>
									</div>
									</div>
									</div>
								";
					}
                ?>
            	
                
     </div>
<?php require 'footer.php'
?>