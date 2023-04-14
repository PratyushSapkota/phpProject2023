<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "onlinestore";

$conn = mysqli_connect($hostname, $username, $password, $database);

$addProductToCart = "INSERT INTO cart(productId, userId) values ('".$_GET['product']."', '".$_SESSION['id']."')";
if ($conn->query($addProductToCart)) {
    header("Location: ../buyer/buyerIndex.php");
    echo '<script>alert("Product added to cart!")</script>';
}else{
    echo 'failed';
}

