<?php 

    include './conection/conn.php';
    session_start();
	if(isset($_SESSION['user'])){
	header("location: general message.php");
	}
	require "conn.php";

	if(isset($_POST['login'])){
	$user = $_POST['username'];
	//$pass = md5($_POST['password']);
	$pass = ($_POST['password']);
	$messeg = "";

    $result = $conn->prepare("SELECT * FROM users WHERE UserFirstName= :user_check");
    $result->execute(array(":usercheck"=>$user_check));

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $login_session =$row['username'];
    $user_id =$row['id'];
    $user_passwords = $row['password'];

    if(!isset($login_session))
        {
            $conn = null; 
            header('Location: login.php');
        }
    }
?>