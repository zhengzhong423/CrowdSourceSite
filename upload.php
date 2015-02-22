<?php
require 'header.php';
if(!isset($_SESSION['username']))
{
	$_SESSION['upload']=1;
	echo "<script>window.location.href='signin.php';</script>";
}
?>
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/fileinput.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/bootstrap-tagsinput.css">
<script src="js/bootstrap-tagsinput-angular.js"></script>
<script src="js/bootstrap-tagsinput.js"></script>

<div class="container" style="position:relative; top:100px">
<form action="PHP/uploadFile.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
<h1 class="form-signin-heading">Upload Videos</h1>
    <hr />
        <div class="form-group">
        <div class="col-sm-10">
        <div class="col-sm-2"></div><input id="file-1a" type="file" name="file" multiple="false" class="file" data-preview-file-type="any" data-overwrite-initial="false"/>
         </div>
         </div>
<style>
span.tag.label.label-info
{
	font-size:20px;
}
div.bootstrap-tagsinput
{
	width: 100%;
	line-height: 40px;
}
input[type="text"]
{
	font-size:20px;
	line-height: 40px;
}
</style>
		<br/>
        <h3>Give your video some tags</h3>
         <input type="text" value="GoPro, Surfing, Highlight" data-role="tagsinput" placeholder="        "/>
         <br/>
         <h3>Description</h3>
         <textarea name="description" placeholder="why not write some description?" class="form-control" rows="10" style=" font-size:20px;"></textarea>
         
         <div class="col-sm-5"></div><div style="position:relative; top:20px"><input type="submit" name="submit" value="Submit"  class="btn btn-primary col-sm-2"/>
         </div>
</form>
</div>
<?php
require "footer.php";
?>