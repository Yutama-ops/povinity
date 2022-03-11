<!DOCTYPE html>
<?php
    include './conection/conn.php';
    include './conection/session.php';
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

    <title>Natto | Upload Video </title>

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
			<?php 
				include './head/topbar.php';
				include './head/menu.php'; 
			?>		
		</header>
	<!--header end-->	

	<!--title-bar start-->
	<section class="title-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left-title-text">
					<h3>Bill Slip</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-title-text">  
						<ul>
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Bill Slip</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--title-bar end-->

	<?php 



				$invid = $_GET['id'];
				if(isset($_GET['id']))
				{
					unset($_SESSION['shopping_cart']);
				}

				 $sql = "UPDATE orders SET OrdStat = '1' WHERE OrderID = '$invid'";
                   
                   
                    $stmt = $conn->prepare($sql); 
                    $stmt->execute();
				
				$query = $conn -> prepare ("SELECT * FROM orderdetails JOIN orders
        				ON orderdetails.DetailOrderID = orders.OrderID AND orders.OrdStat = '1' AND orders.OrderID = '$invid'");

			    $query -> execute (array());
				    $i = 0;
//storybook
				while ($row = $query->fetch(PDO::FETCH_ASSOC))
				{
				
				$login_session;
				$itemName[$i] = $row['DetailName'];
				$itemPrice[$i] = $row['DetailPrice'];
				$itemQty[$i] = $row['DetailQuantity'];
				$totalam = $row['OrderAmount'];
				$i++;



				}

				if(isset($invid))
				{
					
					$valid=1;
		
					
					$ket = 'No. Order : '.$invid.' <br>Nama lengkap : '.$login_session.'';
					
						
						if($valid==1)
						{
							
								date_default_timezone_set("Asia/Bangkok");
								$from = "From: poboks.com pembayaran <tamcrush@yahoo.com>";
								$to = "yutama.iw@gmail.com";
								$subject = "konfirmasi pembayaran belanja online!  ";
								$body = "
								
								<h2>pembayaran telah diterima dengan detail sebagai berikut : </h2><br>
									<br>	<br>	
								".$ket ."					
								";
								
								
						
								if(mail($to,$subject,$body,$from))
								{
									$process_status="konfirmasi pembayaran anda telah kami terima, silahkan tunggu info selanjutnya dari kami.";
								}
								else
								{  
									$valid=0;
									$process_status="failed-email";
								}	
						}
					
					echo "<script type='text/javascript'>alert('".$process_status."')</script>";
					
		
		}
		

				?>
	
	<!--bill-slip start-->
	<section class="bill-slip">			
		<div class="container">					
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="bill-container">
						<div class="new-heading">
							<h1> Thank you so much for you order</h1>
							<p>I really appreciate it!</p>
						</div>
						<div class="discount-text">
							<p>Enjoy 30% off your next order with coupon code ORDER30. Enjoy!</p>
							<img src="images/bill-slip/delivery-icon.svg" alt="">
						</div>
						<div class="slip-detail">
							<div class="slip-left">
								<p>Order To</p>
							</div>
							<div class="slip-right">
								<p><?php echo $login_session;?></p>
							</div>
						</div>

						<?php for($j = 0; $j<$i; $j++){

?>

						<div class="slip-detail">
							<div class="slip-left">
								<p>Item</p>
							</div>
							<div class="slip-right">
								<p><?php echo $itemName[$j];?></p>
							</div>
						</div>
						<div class="slip-detail">
							<div class="slip-left">
								<p>Qty</p>
							</div>
							<div class="slip-right">
								<p><?php echo $itemQty[$j];?></p>
							</div>
						</div>

						<?php } ?>

						
						<
						<div class="vat">
							<div class="slip-left">
								<p>VAT</p>
							</div>
							<div class="slip-right">
								<p>1</p>
							</div>
						</div>
						<div class="tolal">
							<div class="slip-bill-left">
								<h5>Total</h5>
							</div>
							<div class="slip-bill-right">
								<p><?php echo $totalam;?></p>
							</div>
						</div>
						<div class="bar-code">
							<img src="images/bill-slip/qr-icon.svg" alt="">
						</div>
						<button class="print-btn">Print Bill</button>
					</div>
				</div>
			</div>							
		</div>
	</section>
	<!--bill-slip end-->			
	<!--footer start-->
	<footer class="footer">
		<div class="subscribe-now line">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5 col-md-6">
						<div class="subscribe-newsletter">
							<div class="sub-text">
								<p>Connect with us for update and offers.</p>
							</div>
							<form>
								<input class="input-subscribe" name="newsletter" type="text" placeholder="Enter your email address">
								<div class="subscribe-btn">							
									<div class="s-n-btn">
										<button class="newsletter-btn btn-link">Subscribe Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-2 col-md-3">
						<div class="language">	
							<form method="post" enctype="multipart/form-data" id="form-language">
							<div class="btn-group open">
								<button class="lang-btn l-btn-link dropdown-toggle-no-caret" data-toggle="dropdown" aria-expanded="true">
									<i class="fas fa-globe"></i><span class="hidden-xs">English</span><i class="fas fa-caret-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="javascript:;">English</a></li>
									<li><a href="javascript:;">Spanish</a></li>
									<li><a href="javascript:;">Hindi</a></li>
									<li><a href="javascript:;">Punjabi</a></li>
								</ul>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="img-title">
						<a href="index.html"><img src="images/logo-2.svg" alt=""></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum leo at finibus ornare. 
					Aliquam gravida condimentum neque, vel ultrices purus dignissim a. </p>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="link-title">
						<h4>About Natto</h4>
						<ul class="links">
							<li><a href="about.html">About Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="our_blog.html">Blog</a></li>
							<li><a href="#">Developers</a></li>
							<li><a href="#">Mobile Apps</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>					
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="link-title">
						<h4>Business</h4>
						<ul class="links">
							<li><a href="add_restaurant.html">Add a Restaurant</a></li>
							<li><a href="#">Buniess Order Guidelines</a></li>
							<li><a href="#">Orders</a></li>
							<li><a href="#">Book</a></li>
							<li><a href="#">Trace</a></li>
							<li><a href="#">Advertise</a></li>
						</ul>
					</div>					
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="link-title">
						<h4>Partner With Us</h4>
						<ul class="links">
							<li><a href="add_restaurant.html">For Restaurants</a></li>
							<li><a href="add_driver.html">For Driver</a></li>							
						</ul>
						<div class="social-btns">
							<a href="#"><div class="social-btn soc-btn"><i class="fab fa-facebook-f"></i></div></a>
							<a href="#"><div class="social-btn soc-btn"><i class="fab fa-twitter"></i></div></a>
							<a href="#"><div class="social-btn soc-btn"><i class="fab fa-instagram"></i></div></a>
							<a href="#"><div class="social-btn soc-btn"><i class="fab fa-linkedin-in"></i></div></a>
							<a href="#"><div class="social-btn soc-btn"><i class="fab fa-youtube"></i></div></a>
						</div>
					</div>					
				</div>				
			</div>
		</div>
		<div class="privacy-cards">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="privacy-terms">
							<ul>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="cards">
							<img src="images/cards.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="copyright-text">
						<i class="far fa-copyright"></i>Copyright 2019 <a href="index.html">Natto</a> by Gambol. All Rights Reserved.
						</div>
					</div>			
				</div>
			</div>
		</div>
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
