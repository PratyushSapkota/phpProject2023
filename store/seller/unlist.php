<?php
$conn = mysqli_connect("localhost", "root", "", "onlinestore");

$delete = "delete from products where product_id=".$_GET['id'];
mysqli_query($conn, $delete);
header("Location: sellerIndex.php");