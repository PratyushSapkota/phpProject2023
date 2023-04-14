<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "onlinestore");
if($conn){
    $getShop = "select name from users where userid = '".$_SESSION['id']."'";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $getShop));
    $shopName = $row['name'];
    $sellerid = $_SESSION['id'];
    $image = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_data = file_get_contents($image);
    $image_data = mysqli_real_escape_string($conn, $image_data);
    $name = $_POST['name'];
    $price = $_POST['price'];
    $query = "INSERT INTO products(product_name, product_price, product_seller, product_image, product_image_type, seller_id) values ('$name', '$price', '$shopName', '$image_data', '$image_type', '$sellerid')";

    if($conn -> query($query)){
        header("location: ../../../phpProject/store/seller/sellerIndex.php");
    }
}




