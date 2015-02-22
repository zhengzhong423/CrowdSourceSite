<?php 
	require 'header.php';
?>
<?php
	require 'PHP/connect.php';
	$sql="select avg(stars) as avgStars from comments, solution where comments.solutionID=solution.solutionID and solution.customerID=".$_SESSION['customerID'].";";
	$res=mysql_query($sql);
	if($res)
		$row=mysql_fetch_assoc($res);
?>
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="js/star-rating.js" type="text/javascript"></script>
<div class='container'>
	<h2>Feedback</h2>
	<hr class='divider'>
    <div class='well'>
    <p>Your Average Rating: </p><input class="rating-input" type="number" value="<?php echo round($row['avgStars'],2);?>" />
     </div>
     <hr class='divider'>
     <?php
			$sql="select * from comments, solution where comments.solutionID=solution.solutionID and solution.customerID=".$_SESSION['customerID'].";";
			$res=mysql_query($sql);
			$times=0;
			if($res)
			while($row=mysql_fetch_assoc($res))
			{
				$sql2="select * from customer where customerID=".$row['fromCustomerID'].";";
				$res2=mysql_query($sql2);
				$row2=mysql_fetch_assoc($res2);
				if($times++%2==0)
					echo"<div class='alert alert-info'>";
				else
					echo"<div class='alert alert-warning'>";
						echo "  <p>For your solution: ".$row['solutionName']."</p><br/>
									<input class='rating-input' type='number' value='".$row['stars']."'/>
									<p><strong>".$row2['username']."</strong> said:</p>";
									if($row['comments']!='')
										echo"<div class='col-md-offset-1'>'<i> ".$row['comments']." </i>'</div>";
									else
										echo"<div class='col-md-offset-1'>'<i> (None) </i>'</div>";
					echo "</div>";
			} 
	 ?>
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
</div>
<?php 
	require 'footer.php';
?>