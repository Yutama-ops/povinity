<?php

 $servername = "localhost";
	$username = "root";
	$password = "";
	$dbss = "test_ecom";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbss", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    
   
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbss = "test_ecom";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbss);

// Check 

?>
