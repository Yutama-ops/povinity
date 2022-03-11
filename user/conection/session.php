

<?php 

    include 'conn.php';
    session_start();
   
     if(isset($_SESSION['user'])) 
    { 
         
        $user_check=$_SESSION['user'];


    $result = $conn->prepare("SELECT * FROM users WHERE UserFirstName= :user_check");
    $result->execute(array(":user_check"=>$user_check));

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $login_session =$row['UserFirstName'];
    $user_id =$row['UserID'];
    $user_passwords = $row['UserPassword'];
    $user_email = $row['UserEmail'];
    $user_phone = $row['UserPhone'];
    
    if(!isset($login_session))
        {
            $conn = null; 
            header('Location: login.php');
        }
    }

?>