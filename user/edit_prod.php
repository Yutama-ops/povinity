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

    <title>Natto | Add Restaurant </title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/mega.menu.css" rel="stylesheet">
	<link href="css/bootstrap-select.css" rel="stylesheet">	
    
	<!-- Owl Carousel for this template-->
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css"> 
	
    <!-- Fontawesome styles for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script> //datepicker
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: -20, maxDate: "+1M +10D" });
  } );  //datepicker end
  //currency
 document.getElementById("number").onblur =function (){    
    this.value = parseFloat(this.value.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    
    document.getElementById("display").value = this.value.replace(/,/g, "")
    
}
//currency

  </script>

	
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
					<h3>Edit Products</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-title-text">  
						<ul>
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--title-bar end-->	
	<!--add-Product start-->
	<section class="add-restaurant">	
<?php 

	$prodid = $_POST['prodid'];
	$query = $conn -> prepare ("SELECT * FROM products WHERE ProductID = '$prodid' ");

    $query -> execute (array ());
	    $i = 0;

	while ($row = $query->fetch(PDO::FETCH_ASSOC))
	{
	    $prodid = $row['ProductID'];
	    $prodname = $row['ProductName'];
	    $price = $row['ProductPrice'];
	    $stock = $row['ProductStock'];
	    $desc = $row['ProductLongDesc'];
	    //$pict[i] = $row[''];	
	    $LO = $row['LastOrder'];
	    $ED = $row['EstimatedDelivery'];
	    $country = $row['ProductCountry'];
	    $city = $row['ProductCity'];
	    $i++;}
	

?>		
	<form name="add_prod" method="post" action="edit_prod.php" id="prodform">	
		<div class="container">					
			<div class="row justify-content-between">
				<div class="col-lg-6 col-md-8 col-12">
					<div class="resto-heading">
						<img src="images/partner-with-us/icon-1.svg" alt="">
						<h1>Edit Product</h1>
					</div>
					<div class="basic-info">
						<h4>Product Info</h4>
						<div class="form-group">
							<label for="nameRestaurant">Product Name*</label>
							<input type="text" class="video-form" id="nameProduct" placeholder="Enter Product Name" name="ProdName" value="<?php echo $prodname;?>">							
						</div>

						<input type="hidden" name="prodid" value="<?php echo $prodid;?>" />
						<div class="form-group">
							<label for="searchCity">Price*</label>
							
							<input type="text" class="video-form" id="number" placeholder="Enter Product Price $10 = 10" name="ProdPrice" value="<?php echo $price;?>">							
						</div>
						<div class="form-group">
							<label for="searchCity">Stock*</label>
							
							<input type="text" class="video-form" id="number" placeholder="Enter Product Quantity" name="ProdStock" value="<?php echo $stock;?>">							
						</div>

						<div class="form-group">
							<label for="nameRestaurant">Product Description*</label>
							<textarea name="ProdDesc" form="prodform" rows="4" cols="50" placeholder="Product Description" value="<?php echo $desc;?>"><?php echo $desc;?></textarea>						
						</div>
						<!--<div class="form-group">
												<div class="input-heading">Product Image*</div>	
												<div class="input-container">																					
													<input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*">
													<button class="browse-btn">
													  Choose File
													</button>
													<span class="file-info">Upload a file</span>
												</div>
											</div>
						-->
					</div>
					<div class="basic-info">
						<h4>Timing</h4>	
					<div class="form-group">
							<label for="searchCity">Last Order*</label>
							<input type="Date" class="video-form" id="datepicker" name="LODate" value="<?php echo $LO;?>">							
						</div>					
						
					<div class="form-group">
							<label for="searchCity">Estimated Delivery*</label>
							<input type="Date" class="video-form" id="datepicker" name="EDate" value="<?php echo $ED;?>">							
						</div>	
						
					</div>
					<div class="basic-info c-top">
						<h4>Location</h4>
						<div class="form-group">
							<label for="searchCountry">Country*</label>
							<input type="Search" class="video-form" id="searchCountry" placeholder="Search Country" name="Country" value="<?php echo $country;?>">							
						</div>
						<div class="form-group">
							<label for="searchCity">City*</label>
							<input type="Search" class="video-form" id="searchCity" placeholder="Search City" name="City" value="<?php echo $city;?>">							
						</div>
																
						
					
				<!--<div class="basic-info c-top">
						<h4>Payment</h4>												
						<div class="form-group">
							<div class="checkbox-title">Payment Method*</div>
							<div class="filter-radio">
								<ul>
									<li>
									  <input type="radio" value="value5" id="c9" name="c5">
									  <label for="c9">Cash Only</label>
									</li>
									<li>
									  <input type="radio" value="value6" id="c10" name="c5">
									  <label for="c10">Cash/cards</label>
									</li>
								</ul>
							</div>
						</div>																		
					</div>-->
					<button type="submit" class="add-resto-btn1 btn-link" name="submit">Add Product</button>
				</div>
				<div class="col-lg-5 col-md-4 col-12">
					<div class="new-heading">						
						<h1>How It Works</h1>
					</div>
					<div class="how-it-work-1">
						<img src="images/add-restaurant/icon-1.svg" alt="">
						<h4>Fill Form</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet leo id enim mollis volutpat. Donec venenatis</p>
					</div>
					<div class="how-it-work-1">
						<img src="images/add-restaurant/icon-2.svg" alt="">
						<h4>Send Information</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet leo id enim mollis volutpat. Donec venenatis</p>
					</div>
					<div class="how-it-work-1 m-bottom">
						<img src="images/add-restaurant/icon-3.svg" alt="">
						<h4>Verified Listing & Start Working With Natto</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet leo id enim mollis volutpat. Donec venenatis</p>
					</div>
				</div>
			</div>							
		</div>
	</form>



<?php
								
    if (isset($_POST['submit'], $_POST['ProdName'], $_POST['ProdPrice'], $_POST['ProdDesc'], $_POST['LODate'], $_POST['EDate'], $_POST['Country'], $_POST['City'], $_POST['ProdStock']))
        {
            try
                {
                   
						$prodname = $_POST['ProdName'];
						$prodprice = $_POST['ProdPrice'];
						$proddes = $_POST['ProdDesc'];
						$lo = $_POST['LODate'];
						$ed = $_POST['EDate'];
						$country = $_POST['Country'];
						$city = $_POST['City'];
						$prodstock = $_POST['ProdStock'];
						echo $prodname;
						echo "<br>";
						echo $prodprice;
						echo "<br>";
						echo $proddes;
						echo "<br>";
						echo $lo;
						echo "<br>";
						echo $ed;
						echo "<br>";
						echo $country;
						echo "<br>";
						echo $city;
						echo $user_id;

				
                    $sql = "UPDATE products SET ProductName = '$prodname', ProductPrice = '$prodprice', LastOrder = '$lo', EstimatedDelivery = '$ed', ProductLongDesc = '$proddes', ProductStock = '$prodstock', ProductCountry = '$country', ProductCity = '$city' where ProductID = '$prodid'";
                   
                   
                    $stmt = $conn->prepare($sql); 
                    $stmt->execute(array(':user_id' => $user_id, ':prodname'=> $_POST['ProdName']));
                  

                    $num=$stmt->rowCount();
                    if($num > 0)
                        {
                        	echo "Your Product has been updated";
                        }
                    else
                        {
                            header("location:usrprofile.php");
                        }

                }
            catch (Exception $e) 
                {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
        }
?>

	</section>
	<!--add-restaurant end-->
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
	<script src="js/owlslider.js"></script>
	<script src="js/bootstrap-select.js"></script>	
	
  </body>

</html>
