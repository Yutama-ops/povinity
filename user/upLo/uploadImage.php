<?php 

// Include the database configuration file  imput image 
include '../conection/conn.php';     

 
// If file upload form is submitted 
$status = $statusMsg = ''; 
$usrFN = $_POST['userFNr'];
$uTel = $_POST['telPhone'];
$locUs = $_POST['locationUser'];
$emUs = $_POST['emailAddress'];
$uid = $_POST['id'];



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
            $insert = $conn->query("UPDATE users SET UserFirstName='$usrFN', image='$imgContent', UserEmail='$emUs', UserPhone = '$uTel', UserLocation = '$locUs'  WHERE UserID = '$uid'"); 
             
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
