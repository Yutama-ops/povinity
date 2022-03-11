<?php

    include './conection/conn.php';
    include './conection/session.php';

    if(isset($_POST['submit'],$_POST['address']))
				{
                    $orderrAmount = $_POST['orderrAmount'];
                    $orderAddress = $_POST['address'];
                    $orderCity = $_POST['city'];
                    $orderZip = $_POST['postcode'];
                    $orderCountry = $_POST['country'];
                    $num_str = sprintf("%06d", mt_rand(1, 999999));
                    $qty = count($_SESSION["shopping_cart"]);
					$sqlOrder = "INSERT INTO orders(OrderUserID, OrderAmount, OrderShipName, OrderShipAddress, OrderCity, OrderZip, OrderCountry, OrderPhone, OrderEmail, OrderShipped, OrderTrackingNumber, Ordstat) VALUES ('$user_id','$orderrAmount','$login_session','$orderAddress','$orderCity','$orderZip','$orderCountry','$user_phone','$user_email','0','$num_str','0');  SELECT SCOPE_IDENTITY() as id;
                RETURN;
                ";
                     

					$stmt = $conn->prepare($sqlOrder); 
                    $stmt->execute(array(':user_id' => $user_id, ':orderrAmount'=> $_POST['orderrAmount']));
                    $id = $conn->lastInsertId();
                   

    if(!empty($_SESSION["shopping_cart"]))  
        {  
           $total = 0;  
           $sc = 0;

           $query = 'INSERT INTO orderdetails (DetailOrderID, DetailProductID, DetailName, DetailPrice, DetailQuantity) VALUES ';
    $query_parts = array();
    $a = count($_SESSION["shopping_cart"]);


           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {
                $sc++;
                $tot_IPrice = $values["item_quantity"]*$values["item_price"];
                $total += $tot_IPrice;
                $i_seller = $values["item_seller"];
                $prodID[$keys] = $values["item_id"];
                $prodNM[$keys] = $values["item_name"];
                $prodPR[$keys] = $values["item_price"];
                $prodQTY[$keys] = $values["item_quantity"];
                $query_parts[] = "('" . $id . "', '" . $prodID[$keys] . "', '" . $prodNM[$keys] . "', '" . $prodPR[$keys] . "', '" . $prodQTY[$keys] . "')";


         


                   
                }
                echo $query .= implode(',', $query_parts);
                $stmt = $conn->prepare($query); 
                $stmt->execute();
       
            }
             
             
    
    
    





                

                  

                    $num=$stmt->rowCount();
                    if($num > 0)
                        {
                        	header("location:confpay.php?ue=$user_email&orAm=$orderrAmount&orId=$id");
                        }
                        
                    else
                        {
                            header("location:chckout.php");
                        }
                } else
                {
                    header("location:chckout.php");
                }
?>

<!-- <input name="itemId" type="hidden" class="field" value="<?php echo $values['item_id'];?>" disabled="true"/>
                                <input name="itemName" type="hidden" class="field" value="<?php echo $values['item_name'];?>" disabled="true"/>
                                <input name="itemQuantity" type="hidden" class="field" value="<?php echo$values['item_quantity'];?>" disabled="true"/>
                                <input name="itemPrice" type="hidden" class="field" value="<?php echo $values['item_price'] = number_format((float)$values['item_price'], 2, '.', '');?>" disabled="true"/> !-->