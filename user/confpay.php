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
					<h3>Confirm Pay</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-title-text">  
						<ul>
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Confirm Pay</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--title-bar end-->	
<!--title-bar end-->	

	<?php
		$Oam = $_GET['orAm'];
		$uEm = $_GET['ue'];
		$invid = $_GET['orId'];
	?>

	<!--upload-recipe start-->
	<section class="upload-recipe-video">			
		<div class="container">		
			<div class="row">	
				<div class="col-lg-12 col-md-12">
					<div class="new-heading">
						<h1> Confirm Pay </h1>
					</div>						
				</div>
			</div>
			<form>
				<div class="row justify-content-center">	
					<div class="col-lg-6 col-md-8 col-sm-10">
						<div class="form-container">
							<div class="form-group">
								<label for="videoTitle">Title</label>
								<p>Invoice Number :<?php echo $invid; ?></p>
								<input name="orderid" type="hidden" class="field" value="<?php echo $oid;?>">							
							</div>
							<div class="form-group">
								<p>Total Amount :<?php echo $Oam; ?></p>
								<input name="orderammount" type="hidden" class="field" value="<?php echo $Oam;?>">
							</div>
								<div id="paypal-button" class="login-btn" style="margin-left:65px"></div>
							
						</div>						
					</div>
				</div>
			</form>
		</div>
	</section>		
	<div id="paypal-button">
							</div>

							 <script src="https://www.paypal.com/sdk/js?client-id=AXPQaZ3y_0uq9yhi-PASQ16gEMYR2EtyXEFLleiIBb9v21naOBXkY19gZRuTaiAH2twP-xGjOUlr-yhY&currency=USD"></script>


<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
	var iod = "<?php echo $invid; ?>";
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {

      size: 'large',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        redirect_urls:{
            return_url:'http://localhost/povinity/user/invoice.php?id='+iod+''
        },
        transactions: [{
          amount: {
            total: '<?php echo $Oam;?>',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.redirect();
      //return actions.payment.execute().then(function() {

        // Show a confirmation message to the buyer

        //window.alert('Thank you for your purchase!');
      
    }
  }, '#paypal-button');

</script>
	
           <!--return_url:'http://localhost/povinity/user/invoice/index.php?id='+ iod + ''!-->
    
        	
      
            
      
	</body>	
	<!--upload-recipe end-->	
	<!--footer start-->
	<footer class="footer">
		<?php include './foot/footer.php' ; ?>
	</footer>
	<!--footer end-->


	<!--paypal start-->
	 
    

    <!--paypal end-->


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
