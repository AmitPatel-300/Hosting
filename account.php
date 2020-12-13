<?php
require_once 'User.php';
$User=new User();
if(isset($_POST['signup'])){
	$name=isset($_POST['name'])?$_POST['name']:'';
	$name=trim(isset($_POST['name'])?$_POST['name']:'');
	$email=isset($_POST['email'])?$_POST['email']:'';
	$mob=isset($_POST['mob'])?$_POST['mob']:'';
	$sq=trim(isset($_POST['sq'])?$_POST['sq']:'');
	$sa=trim(isset($_POST['sa'])?$_POST['sa']:'');
	$pass=md5(isset($_POST['pass'])?$_POST['pass']:'');
	$rpass=md5(isset($_POST['rpass'])?$_POST['rpass']:'');
	$User->signup($name,$email,$mob,$sq,$sa,$pass);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/cedhost.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
	<!---header--->
	<!---header--->
		<!---login--->
			<div class="content">
				<!-- registration -->
				<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action="" method="POST" onsubmit="return validateForm()" > 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>Name<label id="NA">*</label></span>
						<input type="text" placeholder="Enter name in character only" name="name" id="NAME">
					 </div>
					 <div>
						<span>Email Address<label>*</label></span>
						<input type="email" name="email" placeholder="enter your email" id="EMAIL">
					 </div>
					 
					 <div>
						 <span>Security Question<label>*</label></span>
						 <select name="sq" ID="SQ">
							 <option value="opt">Select</option>
							 <option value="What was your childhood nickname?">What was your childhood nickname?</option>
							 <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
							 <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
							 <option value="What was your dream job as a child?">What was your dream job as a child?</option>
							 <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
						 </select> 
					 </div>
					 <div>
						 <span>Mobile<label>*</label></span>
						 <input type="number" placeholder="enter mobile number upto 11 digit including 0" id="MOB" min="1" name="mob" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  maxlength="11"> 
					 </div>
					 <div>
						  
					 </div>
					 <div>
						 <span id="Sa">Security Answer<label>*</label></span>
						 <input type="text" placeholder="please answer" id="SA"  onkeypress="return event.charCode >= 65  && event.charCode <= 122 " name="sa"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="" disabled><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" id="PASS" placeholder="password contain atleast 1 uppercase,lowercase,numerica & special character" name="pass" >
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="RPASS"  placeholder="password contain atleast 1 uppercase,lowercase,numerica & special character" name="rpass">
							 </div>
					 </div>
				
				<div class="clearfix"> </div>
				<div class="register-but">
					   <input type="submit" id="sign" value="submit" name="signup">
					   <div class="clearfix"> </div>
			
				</div>
		   </div>
		   </form>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
				<!---footer--->
				<?php include 'footer.php'?>
			<!---footer--->
</body>
</html>