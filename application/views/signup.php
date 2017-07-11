<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset="iso-8859-1">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="css/ie6.css" rel="stylesheet" type="text/css">
<link href="css/ie7.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="<?php echo base_url();?>assets/images/logo1.png" width="310" height="114" alt=""></a>
 <ul class="navigation">
 <li class="active"><a href="<?php echo site_url('Home/index')?>">Home</a></li>
    <li><a href="<?php echo site_url('Home/petmart')?>">PetMart</a></li>
    <li><a href="<?php echo site_url('Home/about')?>">About us</a></li>
    <li><a href="<?php echo site_url('Home/blog')?>">Blog</a></li>
    <li><a href="<?php echo site_url('Home/petguide')?>">PetGuide</a></li>
    <li><a href="<?php echo site_url('Home/contact')?>">Contact us</a></li>
    <li><a href="<?php echo site_url('Home/login')?>">Login</a></li>
  </ul>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>


<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

<script type="text/javascript" src="<?php echo base_url();?>assets/js/reg.js"></script>
    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='<?php echo base_url();?>assets/css/googlefonts.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/css/googefonts.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/css/reg.css' rel='stylesheet' type='text/css'>
   	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url();?>assets/js/jquerymin.js" type="text/javascript"></script>
		<script>
		function pwd(){
			var password=document.form.password.value;
			var repassword=document.form.repassword.value;
			if (password === repassword){
				document.getElementById('message').innerHTML = "Password Match";			
			} else{
				document.getElementById('message').innerHTML = "Password not Matched";			
			}
		}
		
		
		</script>
    
<div class="regform"&emsp;&emsp;&emsp;>
	<div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
   

  <div class="container">


			<div class="r">
				<div class="main-login main-center">
					<?php echo validation_errors(); ?>
				<h1>Registration</h1>
					<form class="form-control" method="post" action="<?php echo base_url();?>User/register">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									
									<input type="text" class="form-control" name="first_name" id="name"  placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="last_name" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>
						
						
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon">@<i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="repassword"onchange="pwd();"  id="confirm"  placeholder="Confirm your Password"/> <span id="message"> </span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="phone number" class="cols-sm-2 control-label">Your Phone number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone_number" id="phone"  placeholder="Enter your phone number"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="address" class="cols-sm-2 control-label">Address </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"id="sizing-addon1"><i class="fa fa-users fa" aria-hidden="true"></i>Nepal</span>
									<input type="text" class="form-control" name="address" id="address"  placeholder="Enter your full address"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<div><input type="email" class="form-control" name="email_id" id="email"  placeholder="Enter your Email"/> </div>
								</div>
							</div>
						</div>
						
						<div class="form-group ">
							<button type="submit"  name ='signup'id="button" class="btn btn-success btn-lg btn-block login-button">Register
							</button>
						
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>




<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
   <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
  </div>
</div> -->

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  

 
</div>


<div id="footer">
  <div class="section">
    <ul>
      <li> <img src="<?php echo base_url();?>assets/images/friendly-pets.jpg" width="240" height="186" alt="">
        <h2><a href="#">Friendly Pets</a></h2>
        <p> Pets are our best friend. they gives us company. they never betray us.<a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/pet-lover2.jpg" width="240" height="186" alt="">
        <h2><a href="#">How dangerous are they</a></h2>
        <p> They are not dangerous if we love and care them. sometime they may be aggressive. <a class="more" href="#"></a> </p>
      </li>
      <li> <img src="<?php echo base_url();?>assets/images/healthy-dog.jpg" width="240" height="186" alt="">
        <h2><a href="#">Keep them healthy</a></h2>
        <p> Good food with regular diet plan makes them healthy. <a class="more" href="#"></a> </p>
      </li>
      <li>
        <h2><a href="#">Love...love...love...pets</a></h2>
        <p> As we love them they are always loyal to us. So we should care them <a class="more" href="#"></a> </p>
        <img src="<?php echo base_url();?>assets/images/pet-lover.jpg" width="240" height="186" alt=""> </li>
    </ul>
  </div>
  <div id="footnote">
    <div class="section">Copyright &copy; 2017 <a href="#">City Pet Service</a> All rights reserved <a target="_blank" href="http://www.facebook.com/citypetservice/">www.facebook.com/citypetservice</a></div>
  </div>
</div>
</body>
</html>