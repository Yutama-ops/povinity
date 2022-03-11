<!DOCTYPE html>
<?php
    include './conection/conn.php';
    include './conection/session.php';

    if(isset($_POST["submit"]))  
 {  
      if($_POST["submit"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_POST["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="chckout.php"</script>';  
                }  
           }  
      } else if($_POST["submit"] == "add")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_POST["id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['item_quantity'] += 1;
                     echo '<script>alert("Item added")</script>';  
                     echo '<script>window.location="chckout.php"</script>';  
                }  
           }  
      } else if($_POST["submit"] == "minus")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_POST["id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['item_quantity'] -= 1;   
                     echo '<script>alert("Item reduced")</script>';  
                     echo '<script>window.location="chckout.php"</script>';  
                }  
           }  
      } 
 }  


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

    <title>Natto | Checkout </title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/mega.menu.css" rel="stylesheet">
	<link href="css/thumbnail.slider.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	<link href="css/bootstrap-select.css" rel="stylesheet">

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
					<h3>Checkout</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-title-text">  
						<ul>
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--title-bar end-->	
	<!--partners start-->
	<section class="all-partners">			
		<div class="container">		
			<div class="row">					
				<div class="col-lg-8 col-md-8">




					<div class="my-checkout">
						<div class="table-responsive">
							<table class="table  table-bordered">
								<thead>
									<tr>
										<td class="td-heading">Item</td>
										<td class="td-heading"></td>
										<td class="td-heading">Qty</td>
										<td class="td-heading"></td>
										<td class="td-heading">Price</td>
										<td class="td-heading">Action</td>										
									</tr>
								</thead>

<?php
	if(!empty($_SESSION["shopping_cart"]))  
    	{  
           $total = 0;  
           $sc = 0;
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {
           		$sc++;
           		$tot_IPrice = $values["item_quantity"]*$values["item_price"];
           		$total += $tot_IPrice;
           		$i_seller = $values["item_seller"];
           		$query = $conn -> prepare ("SELECT * FROM users WHERE UserID = '$i_seller' ");

			    $query -> execute (array ());
				    $i = 0;

				while ($row = $query->fetch(PDO::FETCH_ASSOC))
				{

				    $name = $row['UserFirstName'];
				   
				    

				}
?>

								<tbody>
									<tr>
										<td>
											<div class="checkout-thumb">
												<a href="meal_detail.html">
													<img src="images/checkout/thumb-1.jpg" class="img-responsive" alt="thumb" title="thumb">
												</a>
											</div>
											<div class="name">
												<a href="meal_detail.html"><h4><?php echo $values["item_name"];?></h4></a>
												<a href="restaurant_detail.html"><p><?php echo $name;?></p></a>
												<div class="star">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="far fa-star"></i>								
													<span>4.5</span> 											
												</div>
											</div>
										</td>
										
										<form name="action" method="post" action="chckout.php">	
										<input type="hidden" name="id" value="<?php echo $values["item_id"];?>" />		
										<td><button class="chkout-btn" type="submit" name="submit" value="minus">-</button></td>						
										<td class="td-content"><?php echo $values["item_quantity"];?></td>	
										<td><button class="chkout-btn" type="submit" name="submit" value="add">+</button></td>
										<td class="td-content">$<?php  echo $values['item_price'] = number_format((float)$values['item_price'], 2, '.', '');?></td>
										<td><button class="remove-btn" type="submit" name="submit" value="delete">Remove</button></td>	
										</form>							
									</tr>									
								</tbody>

<?php
			}
			$total = number_format((float)$total, 2, '.', '');
	
?>

								<tbody>
									<tr>
										<td colspan="6">
											<h3 class="text-right">
												
    										Total <ins>$<?php echo $total;?></ins></h3>	<input name="ordAmount" type="hidden" class="field" value="<?php echo $total;?>" disabled="true"/>
      <?php } ?>										
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


					
					<!-- <div class="map">						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6848.588137286094!2d75.8069355495411!3d30.878433570394723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a822f25912599%3A0xa51f780d31824240!2sShaheed+Bhagat+Singh+Nagar%2C+Ludhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1556363627043!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
						<div class="map-location-tooltip">
							<div class="tooltip tooltip-main">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Food Location</span>
							</div>
							<div class="tooltip tooltip-main">
								<span class="tooltip-item"></span>
								<span class="tooltip-content">Your Location</span>
							</div>
                        </div>						
					</div>
					<div class="yf-location">
						<ul>
							<li><span><i class="fas fa-map-marker-alt"></i></span><ins>Your location</ins></li>								
							<li class="circles">
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>													
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>												
								<i class="fas fa-circle"></i>													
								<i class="fas fa-circle"></i>												
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>														
								<i class="fas fa-circle"></i>										
								<i class="fas fa-circle"></i>												
								<i class="fas fa-circle"></i>												
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>														
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>														
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>
								<i class="fas fa-circle"></i>															
								<i class="fas fa-circle"></i>																																																														
								<i class="fas fa-circle"></i>																																																														
								<i class="fas fa-circle"></i>																																																														
								<i class="fas fa-circle"></i>																																																																							
								<i class="fas fa-circle"></i>																																																																							
							</li>								
							<li><span><i class="fas fa-map-marker-alt"></i></span><ins>Food location</ins></li>								
						</ul>
					</div> --> <br>
					
					<div class="checkout-details">
						<div class="row">
							<div class="col-md-6">
								<div class="about-checkout">
									<img src="images/checkout/icon-1.svg" alt="">
									<h4>Your Information is Safe</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis at metus vitae porta.</p>
								</div>							
							</div>
							<div class="col-md-6">
								<div class="about-checkout">
									<img src="images/checkout/icon-2.svg" alt="">
									<h4>Secure Checkout</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis at metus vitae porta.</p>
								</div>							
							</div>
						</div>
					</div>
					<div class="note">
						<p><span>Note :</span>Order cancel in 5 minutes. Ut iaculis at metus vitae porta.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">	
					<div class="promocode">
						<h4>Promocode</h4>
						<form>
							<input class="coupon-input" name="promCode" type="text" placeholder="Enter promo code">
							<div class="form-group">
								<div class="subscribe-btn">							
									<div class="s-n-btn">
										<button class="promocode-btn">Apply</button>
									</div>
								</div>
							</div>
						</form>
					</div>				
					<div class="right-address">
						<h4>Address</h4>
						<form name="checkout" method="post" action="confchck.php" id="checkout">
							<div class="form-group">
								<input type="address" name="address" class="video-form" id="autocomplete" placeholder="Enter Your Address">							
							</div>

							

    <!-- Note: The address components in this sample are typical. You might need to adjust them for
               the locations relevant to your app. For more information, see
         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
    -->

    <input name="streetNumber" type="hidden" class="field" id="street_number" disabled="true"/>
    <input name="streetName" type="hidden" class="field" id="route" disabled="true"/>
    <input name="city" type="hidden" class="field" id="locality" disabled="true"/>
    <input name="state" type="hidden" class="field" id="administrative_area_level_1" disabled="true"/>
    <input name="postcode" type="hidden" class="field" id="postal_code" disabled="true"/>
    <input name="country" type="hidden" class="field" id="country" disabled="true"/>
    

							
							
						
					</div>	
					
					<div class="right-contact-dt">
						<h4>Confirm</h4>
						
							<div class="form-group">
								<div class="input-field">
									<input type="Email" class="confirm-form" id="emailAddress" placeholder="Email Address">							
									<i class="far fa-envelope"></i>
								</div>
							</div>
							<div class="form-group">
								<div class="input-field">
									<input type="tel" class="confirm-form" id="telNumber" placeholder="Phone Number">							
									<i class="fas fa-mobile-alt"></i>
								</div>
							</div>
						
					</div>
					

					<div class="your-order">
						<h4>Your Order</h4>
<?php
if(!empty($_SESSION["shopping_cart"]))  
    	{  
           $totals = 0;  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
           		$tot_OProd = $values["item_quantity"]*$values["item_price"];
           		$tot_EPrice = 0;
           		$tot_EPrice = $values["item_quantity"]*$values["item_price"];
           		$totals += $tot_OProd;
           		$i_seller = $values["item_seller"];
           		$query = $conn -> prepare ("SELECT * FROM users WHERE UserID = '$i_seller' ");

			    $query -> execute (array ());
				    $i = 0;
				$num_str = sprintf("%06d", mt_rand(1, 999999));
				
            
				



				
?>
						<div class="order-d">


							<div class="item-dt-left">
								<span><?php echo $values['item_name'];?></span>
								<p><?php echo$values['item_quantity'];?> X $<?php echo $values['item_price'] = number_format((float)$values['item_price'], 2, '.', '');?></p>
								

							</div>
							
							
							<div class="item-dt-right">
								<p>$<?php echo $tot_EPrice = number_format((float)$tot_EPrice, 2, '.', '');?></p>
								<input name="totprice" type="hidden" class="field" id="country" disabled="true"/>
							</div>			
						</div>

					<?php

			} 
							?>
						<div class="order-d">
							<div class="item-dt-left">
								<span>Item Total</span>
							</div>
							<div class="item-dt-right">
								<p>$<?php echo $totals;?></p>
								<input name="orderrAmount" type="hidden" class="field" value="<?php echo $totals;?>">
							</div>			
						</div>
<?php
$promoCode = 0;
	if(isset($_POST["P_code"]))
	{
		$promoCode = $_POST['P_code'];
?>
						<div class="order-d">
							<div class="item-dt-left">
								<span>Promocode <a href="#">(Natto50)</a></span>
							</div>
							<div class="item-dt-right">
								<p>- >$<?php echo $promoCode = number_format((float)$promoCode, 2, '.', '');?></p>
							</div>			
						</div>
<?php	} ?>

<!--
	----------------------- NEEEEEEEEEEEEEEEEEEEEEEEEEEDDDDDDDDDDDDDDDDD------------------------
						<div class="order-d">
							<div class="item-dt-left">
								<span>Taxes</span>
							</div>
							<div class="item-dt-right">
								<p>$2</p>
							</div>			
						</div>
-->
						<div class="order-d">
							<div class="item-dt-left">
								<span>Delivery Charges</span>
							</div>
							<div class="item-dt-right">
								<p>Free</p>
							</div>			
						</div>
<?php
	if(isset($_POST['P_code']))
	{

?>
						<div class="order-d">
							<div class="item-dt-left">
								<span>Your Saving</span>
							</div>
							<div class="item-dt-right">
								<p>>$<?php echo $promoCode = number_format((float)$promoCode, 2, '.', '');?></p>
							</div>			
						</div>
<?php } 
$totals -= $promoCode;
?>
						<div class="total-bill">
							<div class="total-bill-text">
								<h5>Total</h5>
							</div>
							<div class="total-bill-payment">
								<p>$<?php echo $totals = number_format((float)$totals, 2, '.', '');?></p>
								<input name="orderrAmount" type="hidden" class="field" value="<?php echo $totals;?>">
								
							</div>
						</div>
					</div>
					<div class="checkout-btn">


							<button type="submit" name="submit" class="chkout-btn btn-link">Checkout Now</button>



						
					</div>
				</form>
				<?php } ?>
				</div>				
			</div>			
		</div>
	</section>			
	<!--partners end-->
	<!--footer start-->
	<footer class="footer">
		<?php include './foot/footer.php' ; ?>
	</footer>
	<!--footer end-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	 <!-- Assect scripts for this page-->
	<script src="assets/owlcarousel/owl.carousel.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/thumbnail.slider.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-select.js"></script>	
	<script type="text/javascript"></script>
	 <script src="js/googlemapsapi.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeqf-bvx4tEASK4BPjifd7Q2Rwe_KIhWU&libraries=places&callback=initAutocomplete"
        async defer></script>

							 
</body>

</html>
