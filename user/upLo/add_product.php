<?php
    include '../conection/conn.php';
    include '../conection/session.php';        

    $status = $statusMsg = ''; 
    $prodname = $_POST['ProdName'];
    $prodprice = $_POST['ProdPrice'];
    $prodstock = $_POST['ProdStock'];
    $proddes = $_POST['ProdDesc'];
    $prodtt = $_POST['cb1'];
    $lo = $_POST['LODate'];
    $ed = $_POST['EDate'];
    $country = $_POST['Country'];
    $city = $_POST['City'];
    $prodprice = preg_replace('~\.0+$~','',$prodprice);
            
    if(isset($_POST["submit"])){ 
        $status = 'error'; 
        if(!empty($_FILES["image"]["name"])) { 
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($image)); 
             
                // Insert image content into database INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())
                $insert = $conn->query("INSERT INTO products(UserID, ProductName, ProductPrice, Prodseller, LastOrder, EstimatedDelivery, ProductLongDesc, ProductStock, ProductCountry, ProductCity, image) VALUES ('$user_id', '$prodname', '$prodprice', '$prodtt', '$lo', '$ed', '$proddes', '$prodstock', '$country', '$city', '$imgContent')");
     
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = "File uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else
        { 
            $statusMsg = 'Please select an image file to upload.'; 
        }
    
        echo $statusMsg; 
                            
    } else {
        echo 'SALAH';
    }
    
                        
     
    // Display status message vieww
    echo $statusMsg; 
    ?>
    
