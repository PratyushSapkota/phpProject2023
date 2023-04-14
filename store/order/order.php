<?php
//soldId   productName	productPrice	productSeller	productBuyer
// name price seller buyer

$conn = mysqli_connect("localhost", "root", "", "onlinestore");
$query = 'insert into sold(productName, productPrice, productSeller, productBuyer) values("'.$_GET['name'].'", "'.$_GET['price'].'", "'.$_GET['seller'].'", "'.$_GET['buyer'].'")';
$delete = 'delete from cart where productId='.$_GET['id'].' and userId='.$_GET['buyer'];

mysqli_query($conn, $query);
mysqli_query($conn, $delete);

header("Location: ../buyer/buyerIndex.php");
echo '<script>alert("Payment Completed")</script>';
