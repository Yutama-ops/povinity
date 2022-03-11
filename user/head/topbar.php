<!DOCTYPE HTML>

<?php
	if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id"); 
           $count = count($_SESSION["shopping_cart"]);   
           if(!in_array($_POST["hidden_id"], $item_array_id))  
           {  
                
                $item_array = array(  
                     'item_id'               =>     $_POST["hidden_id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["hidden_quantity"], 
                     'item_seller'          =>     $_POST["hidden_seller"]  
 
                );
                $count += 1;                
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           { 
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_POST["hidden_id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["hidden_quantity"],  
                'item_seller'          =>     $_POST["hidden_seller"]
           );  
           $_SESSION["shopping_cart"][0] = $item_array; 
      }  
 } else {

 } 

?>

	<div class="topbar">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="topbar-left text-center text-md-left">
									<ul class="list-inline">
										<li> <a href="contact.php"> Contact </a></li>
										<li> <a href="about.html"> About Us </a></li>
										<!-- <li> <a href="our_blog.html"> Blog </a></li> -->										
										<li> <a href="partner_with_us.html"> Become a Partner </a></li>		
									</ul>
								</div>
							</div>
							<?php
							if(isset($_SESSION['user']))
								{ ?>

							<div class="col-md-8">
								<div class="topbar-right text-center text-md-right">
									<ul class="list-inline">
										<li><a href="#"><i class="far fa-calendar-alt"></i>Order Pending</a> </li>							
										<li><a href="chckout.php"><i class="fas fa-shopping-cart"></i>My Orders <?php
											if(isset($_SESSION["shopping_cart"])){
												?>
												<span class="badge badge-secondary">
											<?php
											$count = count($_SESSION["shopping_cart"]);
											echo $count;}
											?></span></a></li>																				
										<li class="nav-item dropdown">
										<a class="dropdown-toggle-no-caret" href="" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i><?php echo $_SESSION['user']?>  <i class="fas fa-caret-down"></i></a>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
											  <a class="dropdown-item" href="usrprofile.php"> My Profile</a>
											  <a class="dropdown-item" href="#"> Bookmarks</a>
											  <a class="dropdown-item" href="#"> Booking Tables</a>
											  <a class="dropdown-item" href="#"> Find Friends</a>
											  <a class="dropdown-item" href="setting.html"> Setting</a>
											  <a class="dropdown-item" href="logout.php"> Logout</a>
											 
										   </div>
										</li>									
									</ul>
								</div>
							</div> 
							<?php } else { ?>
							<div class="col-md-8">
								<div class="topbar-right text-center text-md-right">
									<ul class="list-inline">
										<li>Dont have an ID? <a href="signup.php"><i class="far fa-calendar-alt"></i> Register Here</li>
										<li><a href="login.php"><i class="far fa-calendar-alt"></i>Sign in</li>
																
									</ul>
								</div>
							</div> 
						<?php }?>
						</div>
					</div>
			</div>