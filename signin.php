<?php
require 'header.php';
?>
    <?php
	if(isset($_SESSION['upload']))
	{
		echo "
		<div class='container'>
		<div class='alert alert-success'>
		<a class='close' data-dismiss='alert'>close</a> <strong>Sorry!</strong> You have to sign in if you want to upload your video.
		</div>
		</div>
		";
		unset($_SESSION['upload']);
	}
  ?>
  <?php
	if(isset($_SESSION['errorLogin']))
	{
		echo "
		<div class='container'>
		<div class='alert alert-info'>
		<a class='close' data-dismiss='alert'>close</a> <strong>Sorry!</strong> Invalid Login.
		</div>
		</div>
		";
		unset($_SESSION['errorLogin']);
	}
  ?>
<div class="container" >
  <form id="registrationForm" class="form-horizontal" method="post" action="PHP/login.php">
    <h1 class="form-signin-heading">Sign In</h1>
    <hr />
       <div class="form-group" style="font-size:20px">
        <label for="name" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
      </div>

      <div class="form-group" style="font-size:20px">
        <label for="pw1" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="submit1" class="btn btn-primary col-sm-3 btn-lg" style="margin-right:30px">Sign In</button><a class="btn btn-primary col-sm-3 btn-lg" href="boot.php">Go Back</a>
        </div>
      </div>
  </form>    
</div>
<script>
$(document).ready(function() {
    $('#registrationForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                }
            },
        }
    });
});
</script>
</body>
</html>
