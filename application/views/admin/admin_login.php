<?php //echo base_url();die(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()?>admin_resource/img/favicon.png">

    <title>Education Total</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()?>admin_resource/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()?>admin_resource/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>admin_resource/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>admin_resource/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>admin_resource/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>admin_resource/css/style-responsive.css" rel="stylesheet" />

     <style>
      .error
      {
        color: red; 
      }
      #login_error
      {
        color: red;
        padding: 40px;
        font-size: 17px;
      }
    </style>
</head>
	
	<body class="login-img3-body">
		
		<div class="container">
		<h1 class="login-heading">Educationtotal Admin</h1>
		
		  <form class="login-form" action="">        
			<div class="login-wrap">
				<!-- <p class="login-img"><i class="icon_lock_alt"></i></p> -->
				<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Username">
				  <br><span class="error" id="email_error"></span>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					<br><span class="error" id="password_error"></span>
				</div>
				<label class="checkbox">
					<input type="checkbox" value="remember-me"> Remember me
					<span class="pull-right"> <a href="#"> Forgot Password?</a></span>
				</label>
				<button id="admin_form" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
				<a href="">Registered?&nbsp;Signup</a>
			</div>
			<span id="login_error"></span>
		  </form>

		</div>
	</body>
<script src="<?php echo base_url();?>admin_resource/js/jquery.min.js"></script>
	<!-- Admin Login Form validation & Submission -->
  <script>
    $(function() {
      
      $("#admin_form").click(function(){

        $(".error").html('');
        
        if($("#email_address").val() == '')
        {
          $("#email_address").focus().val('');
          $("#email_error").html("Enter Email");
          return false;
        }

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if(!(emailReg.test($("#email_address").val())))
        {
          $("#email_address").focus().val('');
          $("#email_error").html("Invalid Email");
          return false;
        }

        if($("#password").val() == '')
        {
          $("#password").focus().val('');
          $("#password_error").html("Password required");
          return false;
        }

        var email_address = $("#email_address").val();
        var password = $("#password").val();

        var data = {email_address:email_address,password:password};
        
        $.ajax({
          
          type:"POST",
          url:"<?php echo base_url(); ?>admin/signin_form",
          data:data,
          success:function(result)
          {
            if(result == 2)
            {
              //alert("valid");
              $("#login_error").html("Username or password is invalid");
            }
            else if(result == 1)
            {
              window.location="<?php echo base_url(); ?>admin/";
            }
          }
        });
        return false;
      });
    });
  </script>
  <!-- End Admin Login -->

</html>
