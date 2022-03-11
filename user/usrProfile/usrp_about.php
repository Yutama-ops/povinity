<?php
 $query = $conn->prepare("select * from users where UserEmail = '$user_email'");

 $query -> execute(array());
	 $i = 0;
	while ($row = $query->fetch(PDO::FETCH_ASSOC))
	{
        
	    $userFN = $row['UserFirstName'];
		$userLN = $row['UserLastName'];
		$userEM = $row['UserEmail'];
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
<div class="profile-about">
	<div class="tab-content-heading">
		<h4>About</h4>
		<a href="./usrProfile/settings.php"><i class="far fa-edit"></i>Edit Info</a>
	</div>
	<div class="about-dtp">
		<div class="about-bg">
			<ul>
				<li>
					<div class="dp-detail">
						<h6>Name</h6>
						<p><?php echo $userFN;?></p>
					</div>
				</li>
				<li>
					<div class="dp-detail">
						<h6>Location</h6>
						<p><?php echo $userCountry;?></p>
					</div>
				</li>
				<li>
					<div class="dp-detail">
						<h6>Mobile Number</h6>
						<p><?php echo $userPH;?></p>
					</div>
				</li>
				<li>
					<div class="dp-detail">
						<h6>Email Address</h6>
						<p><?php echo $userEM;?></p>
					</div>
				</li>
				<li>
					<div class="dp-detail">
						<h6>Social Accounts</h6>
						<div class="my-social-links">
							<a href="#" class="socail-btn-link f-btn"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="socail-btn-link t-btn"><i class="fab fa-twitter"></i></a>
							<a href="#" class="socail-btn-link g-btn"><i class="fab fa-google"></i></a>
							<a href="#" class="socail-btn-link i-btn"><i class="fab fa-instagram"></i></a>
							<a href="#" class="socail-btn-link y-btn"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>