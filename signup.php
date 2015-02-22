<?php 
require "header.php";
?>
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<div class="container">
  <form id="registrationForm" class="form-horizontal" method="post" action="PHP/addUser.php">
    <h1 class="form-signin-heading">Sign Up</h1>
    <hr />
    
    <div class="form-group"  style="font-size:20px">
        <label for="mail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="email" placeholder="xxxx@xxx.com">
        </div>
      </div>
       <div class="form-group"  style="font-size:20px">
        <label for="name" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
      </div>

      <div class="form-group"  style="font-size:20px">
        <label for="pw1" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" name="password" placeholder="Password" minlength="6">
        </div>
      </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="submit1" class="btn btn-primary col-sm-3 btn-lg" style="margin-right:30px">Sign Up</button><a class="btn btn-primary col-sm-3 btn-lg" href="boot.php">Go Back</a>
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
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    },
                    stringLength: {
                        min: 8,
                        message: 'The password must have at least 8 characters'
                    }
                }
            },
        }
    });
});
</script>
</body>
</html>
