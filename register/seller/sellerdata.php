<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "onlinestore";

$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn) {
    $check = "select * from users where email = '" . $_POST['email'] . "'";
    $result = mysqli_query($conn, $check);
    $row = mysqli_fetch_assoc($result);

    if ($row['email'] > 0) {
        echo "User already with that email";
    } else {
        $addToInfo = "insert into users(email, password, name, address, contact, type) values('" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['fullname'] . "', '" . $_POST['address'] . "', '" . $_POST['contact'] . "', 'seller')";
        if ($conn->query($addToInfo)) {
            header("Location: ../Welcome.php");
        }
    }

}


