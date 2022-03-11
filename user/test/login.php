<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbss = "test_ecom";


    $db = new PDO ("mysql:host=".$servername.";dbname=".$dbss, $username, $password);

$query = $db -> prepare ("SELECT * FROM users ");

    $query -> execute (array ());
    $i = 0;

while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
    
    $name[$i] = $row['UserFirstName'];
    $loc[$i] = $row['UserLocation'];
    $LO[$i] = $row['LastOrder'];
    $ED[$i] = $row['EstimatedDelivery'];
    $i++;

}
echo "{$name[1]}, is in {$loc[1]}";

for($j = 0; $j<3; $j++){


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
                                <p>$5.00</p>
                                </div>
                            </div>
                        </div>

            
                        <div class="bottom">
                            <div class="bottom-text">
                                <div class="delivery"><i class="fas fa-shopping-cart"></i><?php echo $LO[$j];?></div>
                                <div class="time"><i class="far fa-clock"></i><?php echo $ED[$j];?></div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>                             
                                    <span>4.5</span> 
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>                              
                            </div>
                        </div>
                    </div>                  
                </div>

<?php } ?>
<!--



$query = $db -> prepare ("SELECT * FROM users WHERE UserID = 00000000001");

    $query -> execute (array ());

    $rows = $query -> fetchAll (PDO::FETCH_ASSOC);

    foreach ($rows as $row)
    {
       

        $name = $row["UserFirstName"];
        $current = $row["UserLocation"];
    }

    echo $name;
    echo $current;
?>