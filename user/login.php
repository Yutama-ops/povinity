<!DOCTYPE html>

<?php

    include './conection/conn.php';
    session_start();

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
					<h1>Login Now</h1>
					<div class="login-container">
						<div class="row">			
							<div class="col-lg-12 col-md-12 col-12">
								<form name="registration" method="post" action="login.php">	
									<div class="login-form">	
										<div class="login-logo">									
											<a href="index.html"><img src="images/login-register/logo.svg" alt=""></a>
										</div>
										<div class="create-text"><h4>Login detail</h4></div>										
										<div class="form-group">
											<input type="text" class="video-form" id="fullName" name="fullName" placeholder="Full Name">							
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
											<p>If you dont have an account<a href="signup.php"><span style="color:#ffa803;"> - Signup</span></a></p>
										</div>										
									</div>	
								</form>
								<?php
									
								    if (isset($_POST['submit'], $_POST['fullName'], $_POST['password1'])) 
								        {
								            try
								                {
								                    $username      = $_POST['fullName'];
								                    $password   = $_POST['password1'];

								                     $query = $conn -> prepare ("SELECT * FROM users WHERE UserFirstName = :username ");

												    

								                    $sql = "SELECT * FROM users WHERE `UserFirstName` = :username AND `UserPassword` = :password ";

													
								                    $stmt = $conn->prepare($sql); 
								                    $stmt->execute(array(':username' => $_POST['fullName'], ':password'=> $_POST['password1']));
								                  

								                    $num=$stmt->rowCount();
								                    if($num > 0)
								                        {
								                        	$_SESSION['user'] = $username;
								                            header("location:index.php");
								                        }
								                    else
								                        {
								                            header("location:login.php");
								                        }

								                }
								            catch (Exception $e) 
								                {
								                    echo 'Caught exception: ',  $e->getMessage(), "\n";
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
