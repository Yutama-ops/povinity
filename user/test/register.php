<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbss = "test_ecom";


    $db = new PDO ("mysql:host=".$servername.";dbname=".$dbss, $username, $password);

$query = $db -> prepare ("SELECT * FROM productcategories");

    $query -> execute (array ());

    $rows = $query -> fetchAll (PDO::FETCH_ASSOC);

    foreach ($rows as $row)
    {
        echo $id = $row["CategoryID"];

        echo " ";

        echo $name = $row["CategoryName"];

        echo "<br>";
    }
?>