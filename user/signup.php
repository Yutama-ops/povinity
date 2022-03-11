<!DOCTYPE html>

<?php
    include './conection/conn.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<!-- Favicon -->
	<link href="images/fav.png" rel="shortcut icon" type="image/x-icon"/>
	
    <title>Natto | Register Now</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/mega.menu.css" rel="stylesheet">
    
	<!-- Owl Carousel for this template-->
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">

    <!-- Fontawesome styles for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<!--header start-->
		<header id="header" class="default">
						
		</header>
	<!--header end-->
	<!--title-bar start-->
	
	<!--title-bar end-->	
	<!--login-and-register start-->
	<section class="login_register">			
		<div class="container">					
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 col-12">
					<h1>Register Now</h1>
					<div class="login-container">
						<div class="row">			
							<div class="col-lg-12 col-md-12 col-12">
								<form name="registration" method="post" action="signup.php">	
									<div class="login-form">	
										<div class="login-logo">									
											<a href="index.html"><img src="images/login-register/logo.svg" alt=""></a>
										</div>
										<div class="create-text"><h4>Create Your Account</h4></div>										
										<div class="form-group">
											<input type="text" class="video-form" id="fullName" name="fullName" placeholder="Full Name">							
										</div>
										<div class="form-group">
											<input type="email" class="video-form" id="emailAddress" name="emailAddress" placeholder="Email Address">							
										</div>
										<div class="form-group">
											<input type="password" class="video-form" id="password1" name="password1" placeholder="Password">							
										</div>
										<!-- <div class="signup-checkbox text-left">
											  <input type="checkbox" id="c1" name="cb">
											  <label for="c1">I agree to Natto's <span>Terms of Service, Policy</span>and<span>Content Policies</span>.</label>
										</div> -->
										<!-- <button type="submit" class="login-btn btn-link">Register Now</button> -->
										<input type="submit" class="login-btn btn-link" name="submit" value="Sign up" />
										<div class="forgot-password">	
											<p>If you have an account?<a href="signin.html"><span style="color:#ffa803;"> - Login Now</span></a></p>
										</div>										
									</div>	
								</form>
								<?php
								if(isset($_POST['submit'])){

								    $user_name = $_POST['fullName'];
								    $user_pass = $_POST['password1'];
								    $user_email = $_POST['emailAddress'];

								        if($user_name==''){
								        echo "<script>alert('Please enter your name!')</script>";
								       
								        }

								        if($user_pass==''){
								        echo "<script>alert('Please enter a password!')</script>";
								        
								        }

								        if($user_email==''){
								        echo "<script>alert('Please enter your email!')</script>";
								        								        }


										    // Validation and field insertion

										    $check_email = "select * from users where UserEmail = :email";
										    $check_email = $conn->prepare($check_email);
										    $check_email->execute(array(':email'=>$user_email));
										    if($check_email->rowCount() >0){
										        echo "<script>alert('Email $user_email already exist!')</script>";
										        exit();
										    } else {

										    $query = "insert into users(UserFirstName,UserPassword,UserEmail) values ('$user_name', '$user_pass', '$user_email')";
										    $query = $conn->prepare($query);
											$query->execute(array(':email'=>$user_email));
		 
										    if($query->rowCount() > 0) {
										        echo "<script>window.open('signup.php','_self')</script>";
										        exit();
										    }
											}
										}
								?>



							</div>
						</div>						
					</div>						
				</div>				
			</div>			
		</div>
	</section>
	<!--login-and-register end-->
	<!--footer start-->
	<footer class="footer">
		
	</footer>
	<!--footer end-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	 <!-- Assect scripts for this page-->
	<script src="assets/owlcarousel/owl.carousel.js"></script>
	<script src="js/owlslider.js"></script>
	
	
  </body>

</html>
