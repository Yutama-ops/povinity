<!DOCTYPE html>
<?php
    include './conection/conn.php';
    include './conection/session.php';
    if(!$_SESSION['user'])
    {
            header('Location: index.php');
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
	
    <title>Natto | My Profile Dashboard</title>

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
	<!--title-bar start--> <!--
	<section class="title-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left-title-text">
					<h3>My Account</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-title-text">  
						<ul>
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">My Account</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--title-bar end-->	
	<!--my-account start-->
	<section class="my-account">			
		<div class="profile-bg">
			<img src="images/profile/bg-img.jpg" alt="Responsive image">
			<div class="my-Profile-dt">
				<div class="container">
					<div class="row">
						<div class="container">							
							<div class="profile-dpt">
								<img src="images/profile/dp-1.jpg" alt="">
							</div>
							<div class="profile-all-dt">
								<div class="profile-name-dt">
									<h1><?php echo $_SESSION['user']?></h1>
									<p><span><i class="fas fa-map-marker-alt"></i></span>Sydney, Australia</p>
								</div>
								<div class="profile-dt">
									<ul>										
										<li>
											<a href="setting.html" class="setting-btn btn-link"><span><i class="fas fa-cog"></i></span>Setting</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--my-account end-->	
	<!--my-account-tabs start-->
	<?php
		
		$check_email = "select * from users where UserEmail = :email and UserCity IS NOT NULL";
		$check_email = $conn->prepare($check_email);
		$check_email->execute(array(':email'=>$user_email));
		if($check_email->rowCount()>0){
    $query = $conn->prepare("select * from users where UserEmail = '$user_email'");

    $query -> execute(array());
	    $i = 0;

	while ($row = $query->fetch(PDO::FETCH_ASSOC))
	{
        
	    $userFN = $row['UserFirstName'];
	    $userLN = $row['UserLastName'];
	    $userCY = $row['UserCity'];
	    $userST = $row['UserState'];
	    $UserZip= $row['UserZip'];
	    $LO = $row['LastOrder'];
	    $ED = $row['EstimatedDelivery'];
        $userCountry = $row['UserCountry'];
        $userPH = $row['UserPhone'];
        $image = $row['image'];
        $i++;
    }
	
		
	?>
	<section class="all-profile-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="left-tab-links">
						<div class="nav nav-pills nav-stacked nav-tabs ui vertical menu fluid">
							<a href="#allitem"  data-toggle="tab" class="item user-tab cursor-pointer active">All Item</a>
							<a href="#about" data-toggle="tab" class="item user-tab cursor-pointer">About</a>
							<a href="#notifications" data-toggle="tab" class="item user-tab cursor-pointer">Notifications <span class="n-badge">2</span></a>
							<a href="#followers" data-toggle="tab" class="item user-tab cursor-pointer">Followers</a>
							<a href="#following" data-toggle="tab" class="item user-tab cursor-pointer">Following</a>
							<a href="#reviews" data-toggle="tab" class="item user-tab cursor-pointer">Reviews</a>							
							<a href="#my-orders" data-toggle="tab" class="item user-tab cursor-pointer">My Orders</a>
							<a href="#order-history" data-toggle="tab" class="item user-tab cursor-pointer">Order History</a>					
							<a href="#manage-cards" data-toggle="tab" class="item user-tab cursor-pointer">Manage Cards</a>
                            <a href="#settings" data-toggle="tab" class="item user-tab cursor-pointer">Setting</a>
						</div>						
					</div>				
				</div>
				<div class="col-lg-6 col-md-8 col-12">
					<div class="tab-content">
						<div class="tab-pane active" id="allitem">				
							<?php 	
    							include './usrProfile/my_item.php';					
    						?>
						</div>
												
						<div class="tab-pane" id="about">
							<?php
								include './usrProfile/usrp_about.php'
							?>
						</div>
						
						<div class="tab-pane" id="notifications">
							<?php
								include './usrProfile/notification.php'
							?>
						</div>
						<!-- <div class="tab-pane" id="followers">
							<?php
								include './usrProfile/followers.php'
							?>
						</div> -->
						
						<!-- <div class="tab-pane" id="following">
							<?php
								include './usrProfile/following.php'
							?>
						</div> -->
						
						
						<div class="tab-pane" id="reviews">
							<?php
								include './usrProfile/reviews.php'
							?>	
						</div>	
						
						
						<div class="tab-pane" id="my-orders">
							<?php
								include './usrProfile/order.php'
							?>	
						</div>
						
						<div class="tab-pane" id="order-history">
							<?php
								include './usrProfile/order_hst.php'
							?>	
						</div>						
						
						
						<div class="tab-pane" id="manage-cards">
							<?php
								include './usrProfile/mng_card.php'
							?>	
						</div>
						
						<div class="tab-pane" id="settings">
							<?php
								include './usrProfile/settings.php'
							?>	
						</div>	
                     				
						
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					
					
					<div class="suggested-peoples h-top ">
						<div class="suggestions full-width">
							<div class="sd-title">
								<h3>Photos</h3>
								<i class="la la-ellipsis-v"></i>
							</div><!--sd-title end-->
							<div class="suggestions-list">
								<div class="pf-gallery">
									<ul>
										<li><a href="#" title=""><img src="images/profile/right-1.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-2.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-3.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-4.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-5.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-6.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-7.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-8.jpg" alt=""></a></li>
										<li><a href="#" title=""><img src="images/profile/right-9.jpg" alt=""></a></li>
									</ul>
								</div>								
							</div><!--photo-list end-->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
<?php
} else {

	
	$query = $conn->prepare("select * from users where UserEmail = '$user_email'");

    $query -> execute(array());
	    $i = 0;

	while ($row = $query->fetch(PDO::FETCH_ASSOC))
	{
        
	    $userFN = $row['UserFirstName'];
	    $userLN = $row['UserLastName'];
	    $userCY = $row['UserCity'];
	    $userST = $row['UserState'];
	    $UserZip= $row['UserZip'];
	    $LO = $row['LastOrder'];
	    $ED = $row['EstimatedDelivery'];
        $userCountry = $row['UserCountry'];
        $userPH = $row['UserPhone'];
        $image = $row['image'];
        $i++;
    }
	

	

?>
<section class="all-profile-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="left-tab-links">
                    <div class="nav nav-pills nav-stacked nav-tabs ui vertical menu fluid">
                        <a href="#edit-profile"  data-toggle="tab" class="item user-tab cursor-pointer active">Edit Profile</a>
                        <a href="#notification-setting" data-toggle="tab" class="item user-tab cursor-pointer">Notification Setting</a>
                        <a href="#change-password" data-toggle="tab" class="item user-tab cursor-pointer">Change Password</a>
                        <a href="#delete-account" data-toggle="tab" class="item user-tab cursor-pointer" id="bookmarks" data-tab="bookmarks">Deactivate Account</a>													
                    </div>						
                </div>				
            </div>
            <div class="col-lg-6 col-md-8 col-12">
                <div class="tab-content">
                <?php
                
                ?>
                
                    <div class="tab-pane active" id="edit-profile">
                        <div class="timeline">
                            <div class="tab-content-heading">
                                <h4>Profile Information</h4>
                                <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                            </div>
                            <div class="edit-profile">
                                <form action="upLo/uploadImage.php" method="post" enctype="multipart/form-data">
                                    <div class="setting-dt">
                                        <h4>Avatar</h4>										
                                        <div class="avtar">
                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>" /> 										
                                        </div>
                                        <div class="upload-avatar">
                                            <div class="input-heading">Upload a New Avatar*</div>	
                                            <div class="input-container">																					
                                                <input class="file-upload-input" type="file" name="image" onchange="readURL(this);" accept="image/*">
                                                <button class="browse-btn">
                                                  Choose File
                                                </button>
                                                <span class="file-info">Upload a file</span>
                                            </div>
                                        </div>
                                    </div> <br> 
                                    
                                    <!-- just in case want to use background image
                                        <div class="setting-dt b-top padding-b">
                                        <h4>Background Image</h4>										
                                        <div class="background-img">
                                            <img src="images/profile/bg.jpg" alt="">											
                                        </div>
                                        <div class="upload-avatar">
                                            <div class="input-heading">Upload a New Background Image*</div>	
                                            <div class="input-container">																					
                                                <input class="file-upload-input" type="file" name="image1" onchange="readURL(this);" accept="image/*">
                                                <button class="browse-btn">
                                                  Choose File
                                                </button>
                                                <span class="file-info">Upload a file</span>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="nameUser">First Name*</label>
                                        <input type="text" class="video-form" name="userFNr" id="userFNr"  placeholder="<?php echo $userFN;?>">							
                                    </div>
                                    <div class="form-group">
                                        <label for="locationUser">Where Are You Live?*</label>
                                        <div class="field-input">
                                            <input type="email" class="video-form" name = 'locationUser' id="locationUser" placeholder="<?php echo $userCountry;?>">							
                                            <i class="fas fa-search"></i>
                                        </div>											
                                    </div>
                                    <!-- description if needed
                                    <div class="form-group">
                                        <label for="textareaDescription">Description*</label>
                                        <textarea class="text-area" id="textareaDescription" placeholder="Description"></textarea>							
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <label for="emailAddress">Email Address*</label>
                                        <input type="text" class="video-form" name = 'emailAddress' id="" placeholder="<?php echo $user_email;?>">							
                                    </div>
                                    <div class="form-group">
                                        <label for="telPhone">Phone Number*</label>
                                        <input type="text" class="video-form" name = 'telPhone' id="telPhone" placeholder="<?php echo $userPH;?>">							
                                    </div>
                                    
                                    <button type="submit" name="submit" class="change-btn btn-link">Save Changes</button>
                                </form>
                            </div>
                        </div>							
                    </div>	
                    
                <?php
                
                ?>
                    <!--		
                    <div class="tab-pane" id="notification-setting">
                        <div class="profile-about">
                            <div class="tab-content-heading">
                                <h4>Notification Setting</h4>
                                <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                            </div>
                            <div class="noti-setting">
                                <div class="noti-all-st">
                                    <ul>
                                        <li>
                                        <div class="noti-st">
                                            <div class="noti-left-t">
                                                Activity on my photos
                                            </div>
                                            <div class="noti-right-b">
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                  <label class="custom-control-label" for="customSwitch1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="noti-st">
                                            <div class="noti-left-t">
                                                Activity on my reviews
                                            </div>
                                            <div class="noti-right-b">
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                  <label class="custom-control-label" for="customSwitch2"></label>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="noti-st">
                                            <div class="noti-left-t">
                                                Someone follows me
                                            </div>
                                            <div class="noti-right-b">
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                  <label class="custom-control-label" for="customSwitch3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="noti-st">
                                            <div class="noti-left-t">
                                                Update from Natto
                                            </div>
                                            <div class="noti-right-b">
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                  <label class="custom-control-label" for="customSwitch4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="noti-st">
                                            <div class="noti-left-t">
                                                Hide my profile from search engine
                                            </div>
                                            <div class="noti-right-b">
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                  <label class="custom-control-label" for="customSwitch5"></label>
                                                </div>
                                            </div>
                                        </div>
                                        </li>											
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>	
                    !-->					
                    <div class="tab-pane" id="change-password">						
                        <div class="timeline">
                            <div class="tab-content-heading">
                                <h4>Change Password</h4>
                                <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                            </div>
                            <div class="edit-profile">
                                <form>										
                                    <div class="form-group">
                                        <label for="OldPassword">Old Password*</label>
                                        <input type="password" class="video-form" id="OldPassword" placeholder="Enter Old Password">							
                                    </div>										
                                    <div class="form-group">
                                        <label for="newPassword">New Password*</label>
                                        <input type="password" class="video-form" id="newPassword" placeholder="Enter New Password">							
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password*</label>
                                        <input type="password" class="video-form" id="confirmPassword" placeholder="Enter Confirm Password">							
                                    </div>
                                    <button type="submit" class="change-btn btn-link">Save Password</button>
                                </form>
                            </div>
                        </div>							
                    </div>
                    <div class="tab-pane" id="delete-account">
                        <div class="timeline">
                            <div class="tab-content-heading">
                                <h4>Deactivate Account</h4>
                                <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                            </div>
                            <div class="edit-profile">
                                <form>										
                                    <div class="form-group">
                                        <label for="yourPassword">Your Password*</label>
                                        <input type="password" class="video-form" id="yourPassword" placeholder="Enter Your Password">							
                                    </div>																
                                    <button type="submit" class="change-btn btn-link">Deactivate Account</button>
                                </form>
                            </div>
                        </div>					
                    </div>																													
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="natto-profile-link">
                    <div class="link-title">
                        <h4>Natto Profile Link</h4>
                    </div>
                    <div class="link-dt">
                        <p>You can now register a short url to</p>
                        <p>your profile. e.g.</p>
                        <p>natto.com/username</p>
                        <div class="form-group">
                            <label for="usernameLink">You can set your profile URL only once.</label>
                            <input type="text" class="video-form" id="usernameLink" placeholder="Natto.com/username">							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>



	<!--my-account-tabs end-->
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
	<script src="js/dashboard-tabs-reload.js"></script>
	
  </body>

</html>
