<?php
	$user = $_SESSION['user'];
	$query = $conn -> prepare ("SELECT * FROM products WHERE UserID = '$user_id' ");

	$query -> execute (array ());
		$i = 0;

	while ($row = $query->fetch(PDO::FETCH_ASSOC))
	{
		$prodid[$i] = $row['ProductID'];
		$prodname[$i] = $row['ProductName'];
		$price[$i] = $row['ProductPrice'];
		$desc[$i] = $row['ProductLongDesc'];
		$stock[$i] = $row['ProductStock'];
		//$pict[i] = $row[''];	
		$LO[$i] = $row['LastOrder'];
		$ED[$i] = $row['EstimatedDelivery'];
		$country[$i] = $row['ProductCountry'];
		$city[$i] = $row['ProductCity'];
		$i++;}

?>
<div class="allitem">
	<div class="tab-content-heading">
		<h4>All Item</h4>
	</div>

<?php 
				
				if(isset($prodid)){

				
				for($j = 0; $j<$i; $j++){
				

?>
<form id="editform" method="post" action="edit_prod.php" onsubmit="this.submit();">								
	<div class="main-comments">
		<div class="rating-1">
			<div class="user-detail-heading">
				<a href="user_profile_view.html"><img src="images/recipe-details/comment-1.png" alt=""></a>
				<h4><?echo $prodname[$j];?></h4>
				<br>

				

<input type="hidden" name="prodid" value="<?php echo $prodid[$j];?>" />


				<div class="rate-star">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>								
				<h5> $<?php echo $price[$j];?></h5><br>
				</div>
			</div>
			<div class="reply-time">											
				<h4> Last Order :<?php echo $LO[$j];?> </h4><br>

			</div>
			<div class="comment-description">
			<p>Product Stock: <?php echo $stock[$j];?><br></p>
			</div>
			<div class="comment-description">
			<p>Product Description: <?php echo $desc[$j];?><br></p>
			</div>
			<div class="comment-description">
			<p>Country: <?php echo $country[$j];?><br></p>
			</div>
			<div class="comment-description">
			<p>City   : <?php echo $city[$j];?><br></p>
			</div>
			<div class="comment-description">
			<p>Estimated Delivery   : <?php echo $ED[$j];?><br></p>
			</div> 
			
			
			
		</div>
		<!--<div class="review-tags">
				<p><ins>Tags :</ins><a href="#">Johnson,</a> <a href="#"> Jasica,</a><a href="#"> Joy William,</a> <a href="#"> Johnson,</a><a href="#"> Jass Singh,</a>&nbsp; <span> and</span>&nbsp; <a href="#">8 others</a></p>
		</div> -->
		<div class="post-images">
			<div class="select-images">
				<ul>
					<li class="image-select">
						<img src="images/restaurant-detail/add-1.jpg" alt="">
						<div class="post">
							<a href="#" data-toggle="modal" data-target="#videoModal"><div class="play-btn"><i class="fas fa-play"></i></div></a>
						</div>
						<div class="modal fade " id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
							<div class="modal-content">
							  <div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<div>
								  <iframe height="450" src="https://www.youtube.com/embed/6CFJhTKcGJ4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					</li>												
				</ul>													
			</div>
		</div>
		<div class="post-images">
			<button type="submit" class="add-resto-btn1 btn-link" name="submit">Edit Product</button>
		</div>
	
	</div>
</form>
<?php } ?>


</div>	
								  <?php }?>