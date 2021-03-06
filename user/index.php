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

    <title>Natto | Home </title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/mega.menu.css" rel="stylesheet">
	<link href="css/owlslider.css" rel="stylesheet">
    
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
	<!--banner start-->
		<section class="block-preview">
			<div class="cover-banner" style="background-image: url(images/homepage/banner.jpg)"></div>
			<div class="container">
				<div class="row">	
					<div class="col-lg-8 col-md-6 col-sm-12">
						<div class="left-text-b">
							<h1 class="title">Choose, Order and Checkout</h1>
							<h6 class="exeption">Specify your address to suggest you the fast delivery</h6>
							<p>Get our services from 24 hours.</p>
							<a class="bnr-btn btn-link" href="#">Go To Meal</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<form>
							<div class="form-box">
								<div class="input-group-prepend">
								  <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
								</div>
								<input  class="find-address skills" name="search" type="text" placeholder="Choose your location"/>
								<div class="input-group-prepend">
								  <div class="input-group-text-1"><i class="fas fa-utensils"></i></div>
								</div>
								<input  class="find-resto skills" name="search" type="text" placeholder="Choose restaurant"/>
								<button class="search-btn btn-link" type="button">Find Food</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	<!--banner end-->
	
	<!--browse-places start-->
	<section class="browse-places">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="browse-heading">
						<h6> Browse Places </h6>
					</div>
				</div>
			</div>
			<div class="row">				
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="places">
						<a href="places_nearby.html">
							<div class="b-icon">
								<img src="images/homepage/browse_places/01.svg" alt="">
							</div>
							<div class="b-text">
								Near by
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="places">
						<a href="places_cafes.html">
							<div class="b-icon">
								<img src="images/homepage/browse_places/02.svg" alt="">
							</div>
							<div class="b-text">
								Cafes & More
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="places">
						<a href="places_cafes.html">
							<div class="b-icon">
								<img src="images/homepage/browse_places/03.svg" alt="">
							</div>
							<div class="b-text">
								Drinks & Nightkise
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="places">
						<a href="places_cafes.html">
							<div class="b-icon">
								<img src="images/homepage/browse_places/04.svg" alt="">
							</div>
							<div class="b-text">
								Desserts & Bakes
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="places">
						<a href="upcoming_events.html">
							<div class="b-icon">
								<img src="images/homepage/browse_places/05.svg" alt="">
							</div>
							<div class="b-text">
								Upcoming Events
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="places">
						<a href="places_cafes.html">
							<div class="b-icon">
							<img src="images/homepage/browse_places/06.svg" alt="">
							</div>
							<div class="b-text">
							Newly Opened
							</div>
						</a>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!--browse-places end-->	
	<!--how-to-work start-->
	<section class="how-to-work">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="work-item">
						<div class="work-img">
							<img src="images/homepage/how-to-work/img_1.svg" alt="">
						</div>
						<div class="work-text">
							<h4>Choose Your Area Restaurant</h4>
							<p>Donec et tellus sed lorem condimentum maximus. Sed tempor, leo tempus condimentum.</p>
						</div>
					</div>
				</div><div class="col-md-4 col-sm-12 col-xs-12">
					<div class="work-item">
						<div class="work-img">
							<img src="images/homepage/how-to-work/img_2.svg" alt="">
						</div>
						<div class="work-text">
							<h4>Choose Food</h4>
							<p>Donec et tellus sed lorem condimentum maximus. Sed tempor, leo tempus condimentum.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="work-item">
						<div class="work-img">
							<img src="images/homepage/how-to-work/img_3.svg" alt="">
						</div>
						<div class="work-text">
							<h4>Delivery</h4>
							<p>Donec et tellus sed lorem condimentum maximus. Sed tempor, leo tempus condimentum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--how-to-work end-->	
	<!--discover-new-restaurants-&-book-now start-->
	<section class="new-restaurants-book-now">		
		<div class="container">
			<Div class="row">
				<div class="col-md-12">
					<div class="new-heading">
						<h1> Discover New Restaurants & Book Now </h1>
					</div>
				</div>
			</div>
			<div class="row">				
				<div class="col-md-12">						
					<div class="new-resto">
						<div class="large-12 columns">
							 <div class="owl-carousel owl-theme owl-loaded owl-drag">  
								<div class="owl-stage-outer">									
									<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2376px;">
										<div class="owl-item active" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_1.jpg" alt=""></a></div>
										</div>
										<div class="owl-item active" style="width: 178px; margin-right: 20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_2.jpg" alt=""></a></div>
										</div>
										<div class="owl-item active" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_3.jpg" alt=""></a></div>
										</div>
										<div class="owl-item active" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_4.jpg" alt=""></a></div>
										</div>
										<div class="owl-item active" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_5.jpg" alt=""></a></div>
										</div>
										<div class="owl-item" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_1.jpg" alt=""></a></div>
										</div>
										<div class="owl-item" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_2.jpg" alt=""></a></div>
										</div>
										<div class="owl-item" style="width: 178px; margin-right:20px;">
											<div class="items"><a href="#"><img src="images/homepage/resto-book/img_3.jpg" alt=""></a></div>
										</div>
									</div>	
								</div>								
							</div>         
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--discover-new-restaurants-&-book-now end-->	
	<!--order-food-online-in-your-area start-->
	<section class="order-food-online">		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="new-heading">
						<h1> Order Food Online In Your Area </h1>
					</div>
					<div class="your-location">
						<span><i class="fas fa-map-marker-alt"></i>New York</span>Change Location
					</div>
					<div class="all-items">
						<div class="search col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<form>
								<input  class="search-location" name="search" type="search" placeholder="Enter Your Location"/>
								<div class="icon-btn">
									<div class="cross-icon">
									<i class="fas fa-crosshairs"></i>
									</div>
									<div class="s-m-btn">
										<button class="search-meal-btn btn-link">Search</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">



				<?php 

				$query = $conn -> prepare ("SELECT * FROM products ");

			    $query -> execute (array ());
				    $i = 0;

				while ($row = $query->fetch(PDO::FETCH_ASSOC))
				{

				    $id[$i] = $row['ProductID'];
				    $name[$i] = $row['ProductName'];
				    $loc[$i] = $row['ProductCountry'];
				    $LO[$i] = $row['LastOrder'];
				    $ED[$i] = $row['EstimatedDelivery'];
				    $price[$i] = $row['ProductPrice'];
				    $stock[$i] = $row['ProductStock'];
				    $seller[$i] = $row['UserID'];
				    $i++;

				}

				for($j = 0; $j<$i; $j++){


				?>
		
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
		                    <div class="all-meal">
		                        <div class="top">
		                            <a href="meal_detail.html"><div class="bg-gradient"></div></a>
		                            <div class="top-img">
		                                <img src="images/homepage/meals/img-1.jpg" alt="">
		                            </div>
		                            <div class="logo-img">
		                                <img src="images/homepage/meals/logo-1.jpg" alt="">
		                            </div>
		                            <div class="top-text">
		                                <div class="heading"><h4><a href="meal_detail.html"><?php echo $name[$j];?></a></h4></div>
		                                <div class="sub-heading">
		                                <h5><a href="restaurant_detail.html"><?php echo $loc[$j];?></a></h5>
		                                <p>$<?php echo $price[$j];?></p>
		                                </div>
		                            </div>
		                        </div>

		            <form name="add_chrt" method="post" action="index.php">	
		                        <div class="bottom">
		                            <div class="bottom-text">
		                                <div class="delivery"><i class="fas fa-shopping-cart"></i>Last Order: <?php echo $LO[$j];?></div>
		                                <div class="time"><i class="far fa-clock"></i>Estimated Delivery: <?php echo $ED[$j];?></div>
		                                <div class="star">
		                                    <i class="fas fa-star"></i>
		                                    <i class="fas fa-star"></i>
		                                    <i class="fas fa-star"></i>
		                                    <i class="fas fa-star"></i>
		                                    <i class="fas fa-star"></i>                             
		                                    <span><?php echo $stock[$j];?></span> 
		                                    <div class="comments"><button type="submit" class="fas fa-comment-alt btn-link" name="add_to_cart">Carts</button></div>
		                                </div>                              
		                            </div>
		                        </div>
		                        <input type="hidden" name="hidden_quantity" class="form-control" value="1" />
		                        <input type="hidden" name="hidden_id" value="<?php echo $id[$j]; ?>" />   
		                        <input type="hidden" name="hidden_seller" value="<?php echo $seller[$j]; ?>" />  
                                <input type="hidden" name="hidden_name" value="<?php echo $name[$j]; ?>" />  
                                <input type="hidden" name="hidden_price" value="<?php echo $price[$j]; ?>" />  
                               
		                    </div>                  
		                </div>
		</form>

		<?php } ?>
					
			</div>
			<div class="meal-btn">
				<a href="#" class="m-btn btn-link">Show All</a>
			</div>
		</div>
	</section>

	<!--order-food-online-in-your-area end-->	
	<!--offer-banners start-->
	<!-- 
	<section class="offer-banners">	
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="banner">
						<div class="ads-banner" style="background-image: url(images/homepage/offer-banners/banner-1.jpg)"></div>											
						<div class="banner-items">
							<div class="bnnr-text">
							<h2>Order Food Online</h2>
							<p>Use code to get 50% off upto $5<br> on your next order.</p>
							</div>
							<div class="offer-button">
								<a href="#" class="of-btn btn-link">Order Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="banner">
						<div class="ads-banner" style="background-image: url(images/homepage/offer-banners/banner-2.jpg)"></div>											
						<div class="banner-items">
							<div class="bnnr-text">
							<h2>Membership<span><i class="fas fa-long-arrow-alt-right"></i></span>Open Now</h2>
							<p>Memberships are now open for<br> purchases.</p>
							</div>
							<div class="offer-button">
								<a href="#" class="of-btn btn-link">Sign up Now</a>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
-->
	<!--offer-banners end-->	
	<!--quick-searches start-->
	<section class="offer-banners">	
	</section>
	<section class="quick-searches">			
		<div class="container">		
			<div class="row">	
				<div class="col-md-12">
					<div class="new-heading">
						<h1> Quick Searches </h1>
					</div>
					<div class="sub-title">
						Discover Traveler By Type of Meal
					</div>	
				</div>
			</div>
			<div class="all-meals">
				<div class="row justify-content-center">				
					<div class="col-lg-1 col-md-2 col-sm-6">
						<div class="item">
							<a href="#">
								<div class="meal-icon">
									<img src="images/homepage/quick-searches/meal-1.svg" alt="">
								</div>
								<div class="meal-title">
									Breakfast
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-6">
						<div class="item">
							<a href="#">
								<div class="meal-icon">
									<img src="images/homepage/quick-searches/meal-2.svg" alt="">
								</div>
								<div class="meal-title">
									Lunch
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-6">
						<div class="item">
							<a href="#">
								<div class="meal-icon">
									<img src="images/homepage/quick-searches/meal-3.svg" alt="">
								</div>
								<div class="meal-title">
									Dinner
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-6">
						<div class="item">
							<a href="#">
								<div class="meal-icon">
									<img src="images/homepage/quick-searches/meal-4.svg" alt="">
								</div>
								<div class="meal-title">
									Cafe's
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-6">
						<div class="item">
							<a href="#">
								<div class="meal-icon">
									<img src="images/homepage/quick-searches/meal-5.svg" alt="">
								</div>
								<div class="meal-title">
									Delivery
								</div>
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!--quick-searches end-->
	
	<!--featured-restaurants start-->
	<section class="featured-restaurants">
		<div class="container">				
			<div class="row">									
				<div class="col-lg-8">
					<div class="new-heading">
						<h1> Featured Travelers </h1>
					</div>
					<div class ="bg-resto">
						<div class="resto-item">	
							<div class="row">	
								<div class="col-md-4 col-sm-12">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_01.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Food Roster </a></h4>
											<p>Indian Restaurant</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">															
									<div class="resto-location">
										<span><i class="fas fa-map-marker-alt"></i></span>New York City,1569  
									</div>						
								</div>	
								<div class="col-md-4 col-sm-12">															
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>						
								</div>
							</div>						
						</div>
						<div class="resto-item">	
							<div class="row">	
								<div class="col-md-4 col-sm-12">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_02.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Chef House </a></h4>
											<p>American Restaurant</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">															
									<div class="resto-location">
										<span><i class="fas fa-map-marker-alt"></i></span>New York City,1569  
									</div>						
								</div>	
								<div class="col-md-4 col-sm-12">															
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>						
								</div>
							</div>						
						</div>
						<div class="resto-item">	
							<div class="row">	
								<div class="col-md-4 col-sm-12">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_03.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Rooster </a></h4>
											<p>Indian Restaurant</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">															
									<div class="resto-location">
										<span><i class="fas fa-map-marker-alt"></i></span>New York City,1569  
									</div>						
								</div>	
								<div class="col-md-4 col-sm-12">															
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>						
								</div>
							</div>						
						</div>
						<div class="resto-item">	
							<div class="row">	
								<div class="col-md-4 col-sm-12">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_04.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Limon Resto </a></h4>
											<p>Australian Restaurant</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">															
									<div class="resto-location">
										<span><i class="fas fa-map-marker-alt"></i></span>New York City,1569  
									</div>						
								</div>	
								<div class="col-md-4 col-sm-12">															
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>						
								</div>
							</div>						
						</div>
						<div class="resto-item">	
							<div class="row">	
								<div class="col-md-4 col-sm-12">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_05.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Ramen Bakery </a></h4>
											<p>Canadian Bakery</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">															
									<div class="resto-location">
										<span><i class="fas fa-map-marker-alt"></i></span>New York City,1569  
									</div>						
								</div>	
								<div class="col-md-4 col-sm-12">															
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>						
								</div>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="new-heading treading-sellers">
						<h1> Treading This Week Sellers</h1>
					</div>
					<div class ="bg-resto">
						<div class="treading-item">	
							<div class="row">	
								<div class=" col-lg-7 col-md-6">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_06.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Steak Resto </a></h4>
											<p>Treading</p>
										</div>										
									</div>
									
								</div>	
								<div class="col-lg-5 col-md-6 ">
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#">View Menu</a>  
									</div>
								</div>
							</div>						
						</div>		
						<div class="treading-item">	
							<div class="row">	
								<div class="col-lg-7 col-md-6">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_02.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Meshi Restaurant </a></h4>
											<p>Treading</p>
										</div>										
									</div>
									
								</div>	
								<div class="col-lg-5 col-md-6">
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>
								</div>
							</div>						
						</div>
						<div class="treading-item">	
							<div class="row">	
								<div class="col-lg-7 col-md-6">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_07.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Momo Resto </a></h4>
											<p>Treading</p>
										</div>										
									</div>
									
								</div>	
								<div class="col-lg-5 col-md-6">
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>
								</div>
							</div>						
						</div>	
						<div class="treading-item">	
							<div class="row">	
								<div class="col-lg-7 col-md-6">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_01.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Rooster </a></h4>
											<p>Treading</p>
										</div>										
									</div>
									
								</div>	
								<div class="col-lg-5 col-md-6">
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>
								</div>
							</div>						
						</div>	
						<div class="treading-item">	
							<div class="row">	
								<div class="col-lg-7 col-md-6">
									<div class="resto-img">
										<img src="images/homepage/featured-restaurants/logo_03.jpg" alt="">
										<div class="resto-name">
											<h4><a href="#"> Limon Bakery </a></h4>
											<p>Treading</p>
										</div>										
									</div>
									
								</div>	
								<div class="col-lg-5 col-md-6">
									<div class="menu-btn">
										<a class="mn-btn btn-link" href="#"> View Menu</a>  
									</div>
								</div>
							</div>						
						</div>	
						
					</div>
				</div>
				
			</div>	
		</div>
		
	</section>
	<!--featured restaurants end-->	
	<!--explore-your-favorite-recipes start-->
	<section class="explore-recipes">			
		<div class="container">		
			<div class="row">	
				<div class="col-md-12">
					<div class="new-heading">
						<h1> Explore Your Favorite Country </h1>
					</div>	
			</div>
			<div class="b-recipes">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<a href="#">
						<div class="recipe-item">
							<img src="images/homepage/recipes/recipe_01.jpg" alt="">
							 <div class="overlay">
								<div class="recipes-title">	
									<h6>North Indian</h6>
									<p>75 Travelers</p>
								 </div>
							 </div>
						</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#">
						<div class="recipe-item">
							<img src="images/homepage/recipes/recipe_02.jpg" alt="">
							 <div class="overlay">
								<div class="recipes-title">	
									<h6>Fast Food</h6>
									<p>105 Travelers</p>
								 </div>
							 </div>
						</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#">
						<div class="recipe-item">
							<img src="images/homepage/recipes/recipe_03.jpg" alt="">
							 <div class="overlay">
								<div class="recipes-title">	
									<h6>Italian Food</h6>
									<p>35 Travelers</p>
								 </div>
							 </div>
						</div>
						</a>
					</div>
				<!-- 
					<div class="col-lg-4 col-md-6">
						<a href="#">
						<div class="recipe-item">
							<img src="images/homepage/recipes/recipe_04.jpg" alt="">
							 <div class="overlay">
								<div class="recipes-title">	
									<h6>Chinese Food</h6>
									<p>60 Videos</p>
								 </div>
							 </div>
						</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#">
						<div class="recipe-item">
							<img src="images/homepage/recipes/recipe_05.jpg" alt="">
							 <div class="overlay">
								<div class="recipes-title">	
									<h6>Street Food</h6>
									<p>45 Videos</p>
								 </div>
							 </div>
						</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#">
						<div class="recipe-item">
							<img src="images/homepage/recipes/recipe_06.jpg" alt="">
							 <div class="overlay">
								<div class="recipes-title">	
									<h6>Bakery</h6>
									<p>20 Videos</p>
								 </div>
							 </div>
						</div>
						</a>
					</div>
				-->
					
				</div>
			</div>
			<div class="meal-btn">
				<a href="#" class="m-btn btn-link">Show All</a>
			</div>
		</div>
	</section>

	<!--explore-your-favorite-recipes end-->	
	<!--download-link start-->
	<!--
	<section class="pocket-block-preview">
			<div class="pocket-cover-banner" style="background-image: url(images/homepage/bottom-banner.jpg)"></div>
			<div class="container">
				<div class="row">	
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="pocket-items">
							<div class="new-heading">
								<h1>Natto in Your Pocket</h1>
							</div>
							<div class="line">
								<img src="images/homepage/line.svg" alt="">
							</div>
							<p>We???ll send you a link, open it on your phone to download the app.</p>
							<form class="search-form">
								<input type="text" class="send-link" placeholder="Enter your email address">
								<button type="submit" class="pocket-btn">Send Link</button>
							</form>
							<div class="download-btns">
								<a href="#"><img src="images/homepage/app-store.png" alt=""></a>
								<a href="#"><img src="images/homepage/play-store.png" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="mobile-image">
							<img src="images/homepage/mobile.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	-->
	<!--download-link end-->	
	<!--footer start-->
	<footer class="footer">
		<?php include './foot/footer.php' ; ?>
	</footer>
	<!--footer end-->	  

    <!--Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	 <!--Assect scripts for this page-->
	<script src="assets/owlcarousel/owl.carousel.js"></script>
	<script src="js/owlslider.js"></script>
	
  </body>

</html>
