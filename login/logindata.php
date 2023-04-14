<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "onlinestore";

$conn = mysqli_connect($hostname, $username, $password, $database);

if($conn){
    $showQuery = "select * from `users` where email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
    $result = mysqli_query($conn, $showQuery);
    $data = mysqli_fetch_assoc($result);

    if ($data['email'] == $_POST['email'] && $data['password'] == $_POST['password']){
        $_SESSION['id'] = $data['userid'];
        $_SESSION['logged'] = true;
        $_SESSION['type'] = $data['type'];

        if ($data['type'] = 'buyer'){
            header('Location: ../../../phpProject/store/buyer/buyerIndex.php');
        }
        elseif ($data['type'] = 'seller'){
            header('Location: ../../../phpProject/store/seller/sellerIndex.php');
        }


    }else{
        header("Location: ../../login/login.php");
        echo "<script>alert('Incorrect Login!')</script>";
    }

}




