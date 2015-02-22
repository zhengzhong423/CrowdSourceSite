<?php
	require "header.php";
?>
<style>
#content article {
	float: left;
	margin-right: 4%;
	max-width: 236px;
	position: relative;
	width: 22%;
	margin-bottom: 3.5%;
}
#content article:nth-child(4n+4) {
	margin-right: 0;
}
.post-format-content {
	position: relative;
	background: #111;
}
.post-thumbnail {
	max-width: 100%;
	height: auto;
	overflow: hidden;
}
.content-wrap {
	padding: 0;
	position: absolute;
	text-align: center;
	width: 100%;
	top: 0;
	bottom: 0;
	display: table-cell;
	vertical-align: middle;
	overflow: hidden;
}
.content-wrap h1.entry-title {
	display: table;
	font-size: 110%;
	height: 100%;
	width: 100%;
	margin:0;
}
.edit-link {
	z-index: 2;
}
.featured-image {
	display: table-cell;
	position: relative;
	transition: opacity .25s ease-in-out, background .25s ease-in-out;
	-moz-transition: opacity .25s ease-in-out, background .25s ease-in-out;
	-webkit-transition: opacity .25s ease-in-out, background .25s ease-in-out;
	vertical-align: middle;
	z-index: 1;
	color: #fff;
	text-decoration: none;
	opacity: 0;
	padding: 10%;
}
.featured-image:hover {
	opacity: 0.9;
	color: #fff;
	background: rgba(0,0,0,0.8);
}
.post-thumbnail img {
	display: block;
}
img {
	max-width: 100%;
	height: auto;
}

</style>
<div class="container" style="position:relative; top:30px">
  

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <h1 align="center" style="font-family:Tahoma, Geneva, sans-serif, monospace; font-size:60px"> Welcome to join us! </h1>
	<div style="height:0px"></div>
    <hr/>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-6">
          <div class="well">
          <article  class="post-152 post type-post status-publish format-standard hentry category-people category-photos">
  <div class="post-format-content">
    <div class="post-thumbnail"> <img src="image/surfing.jpg" class="attachment-thumbnail wp-post-image"> </div>
    <div class="content-wrap">
      <h1 class="entry-title"><a href="upload.php" class="featured-image" title="amp; Fashion" rel="bookmark"><h2>RIPPER</h2>
          <p style="height:80px; font-size:20px">Upload your RAW footage</p></a></h1>
    </div>
  </div>
</article>
          
          <p><a class="btn btn-info btn-lg btn-block" href="upload.php" role="button">I am a contributor &raquo;</a></p>
         </div>
         </div>
      
        <div class="col-lg-6">
          <div class="well">
          <article  class="post-152 post type-post status-publish format-standard hentry category-people category-photos">
          <div class="post-format-content">
            <div class="post-thumbnail"> <img src="image/christopher-nolan-on-set.jpg" class="attachment-thumbnail wp-post-image"> </div>
            <div class="content-wrap">
              <h1 class="entry-title"><a href="displayPublic.php" class="featured-image" title="amp; Fashion" rel="bookmark"><h2>EDITOR</h2>
                  <p style="height:80px; font-size:20px">Starting editing footage</p></a></h1>
            </div>
          </div>
        </article>
        <p><a class="btn btn-success btn-lg btn-block" href="displayPublic.php" role="button">I am an editor &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        </div>
      </div><!-- /.row -->
      
      <!-- FOOTER -->
</div><!-- /.container -->
<div class="back">
</div>

<?php
require "footer.php"
?>
    
  </body>
</html>
