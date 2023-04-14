<?php
session_start();
if ($_SESSION['logged']){
if ($_SESSION['type'] == 'seller'){

$conn = mysqli_connect("localhost", "root", "", "onlinestore");

$getUserInfo = "select * from users where userid='" . $_SESSION['id'] . "'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $getUserInfo));


echo '
            <h1>Hello ' . $row['name'] . ' to your Seller Dashboard</h1>
            <a href="../../../phpProject/login/login.php">Logout</a> <br>
          
            <a href="./uploadPage.php">Upload a product for your store</a>

            ';
?>
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">

        <table>

            <?php

        $showListed = "SELECT * FROM products WHERE seller_id=".$_SESSION['id'];
        $resultListed = mysqli_query($conn, $showListed);

        while($rowListed = mysqli_fetch_assoc($resultListed)){
            echo "<tr>";
            echo "<td width='120px.'><img src='data:".$rowListed['product_image_type'].";base64,".base64_encode($rowListed['product_image'])."' width='100px'></td>";
            echo "<td><h3>".$rowListed['product_name']."</h3> </td>";
            echo "<td align='center'><p>".$rowListed['product_price']."</p> </td>";
            echo "<td> <a href='unlist.php?id=".$rowListed['product_id']."'><button>Unlist Product</button></a></td>";
        }

        echo '<br> <br>products listed';
    }else{
        header("Location: ../../store/buyer/buyerIndex.php");
    }

}else{
    header("Location: ../../login/login.php");
}

?>
        </table>
    </div>
    <div style="margin-left: 620px;">
        <table>
            <tr>
                <th>Product</th>
                <th>Money Made</th>
            </tr>
        <?php
            $showBought = "SELECT * from sold where productSeller =".$_SESSION['id'];
            $resultBought = mysqli_query($conn, $showBought);
            $totalMoney = 0;
            while($rowBought = mysqli_fetch_assoc($resultBought)){
                echo "<tr>";
                echo "<td>".$rowBought['productName']."</td>";
                echo "<td>".$rowBought['productPrice']."</td>";
                $totalMoney += $rowBought['productPrice'];
            }
        ?>
        </table>
        <?php
            echo $totalMoney;
        ?>
    </div>
</div>
