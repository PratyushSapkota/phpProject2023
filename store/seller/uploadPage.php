<?php
session_start();
if($_SESSION['logged']){
    if ($_SESSION['type'] == 'seller'){
        echo '
            <h1>Upload your product</h1>
            <br>
            <form action="../../../phpProject/store/seller/upload.php" method="post" enctype="multipart/form-data">
                   <label>Product Name</label> <input type="text" name="name"> <br>
                    <label>Product Price</label> <input type="number" name="price"> <br>
                    <input type="file" accept="image/jpeg, image/png" name="image"> <br>
                    <input type="submit" value="Upload" name="submit">
            </form>
        ';

    }else{
        header("location: ../../../phpProject/store/buyer/buyerIndex.php");
    }
}else{
    header("location: ../../../phpProject/login/login.php");
}

//<h1>Upload your product</h1>
//<br>
//<form action="../../../phpProject/store/seller/upload.php" method="post" enctype="multipart/form-data">
//    <label>Product Name</label> <input type="text" name="name"> <br>
//    <label>Product Price</label> <input type="number" name="price"> <br>
//    <input type="file" accept="image/jpeg, image/png" name="image"> <br>
//    <input type="submit" value="Upload" name="submit">
//</form>