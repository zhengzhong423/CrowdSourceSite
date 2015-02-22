<?php session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
        <title>Ripitvids</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="holder.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../docs-assets/js/html5shiv.js"></script>
      <script src="../../docs-assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style>
	
		li
		{
		font-size: 20px;
		}
		nav
		{
			font-family:"Arial Black", Gadget, sans-serif;
		}
		
		.well{
		background-image:none;
		background-color: rgba(245, 245, 245, 0.4);
		}
		
		.text
		{
			color:#FFF;
		}
		.back {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background:url(image/Surfing-at-sunset.jpg) no-repeat center center;
		background-size:cover; 
		opacity: 0.25;
		z-index:-1;
		}
	</style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="boot.php"><span class='text' style="font-size:30px">Ripitvids</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php 
		if(!isset($_SESSION['customerID']))
		{
			echo "
			<form class='navbar-form navbar-right' role='form'>
            <a class='btn btn-primary btn-lg' href='signup.php'>Sign up</a>
            <a class='btn btn-default btn-lg' href='signin.php'>Sign in</a>
          </form>
		  ";
		}
		else
		{
			echo "
			<div class='navbar-right'>
			<ul class='nav navbar-nav navbar-right'>
			
            <li><a href='myVideo.php'><span class='text'>My&nbsp;Videos</span></a></li>
			<li><a href='mySolution.php'><span class='text'>My&nbsp;Solution</span></a></li>
            <li><a href='profile.php'><span class='text'>Profile</span></a></li>
            <li><a href='http://ripitvids.com'><span class='text'>Contact&nbsp;Us</span></a></li>
			<li><a href='PHP/logout.php'><span class='text'>LogOut</span></a></li> 
			
          </ul>
			</div>
			";	
		}
		  ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div style="height:70px"></div>