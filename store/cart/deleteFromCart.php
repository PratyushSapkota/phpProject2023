<?php

//soldId   productName	productPrice	productSeller	productBuyer
// name price seller buyer

$conn = mysqli_connect("localhost", "root", "", "onlinestore");
$delete = 'delete from cart where productId=' . $_GET['id'] . ' and userId=' . $_GET['buyer'];

mysqli_query($conn, $delete);

header("Location: showcart.php");
echo '<script>alert("Deleted From Cart")</script>';
