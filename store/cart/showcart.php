<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "onlinestore");
?>
<table>

    <?php
    $getProducts = "select * from cart where userId=" . $_SESSION['id'];
    $getProductsResult = mysqli_query($conn, $getProducts);
    $selectedProducts = [];


    if (mysqli_num_rows($getProductsResult) > 0) {
        while ($getProductsRow = mysqli_fetch_assoc($getProductsResult)) {
            array_push($selectedProducts, $getProductsRow['productId']);
        }

        $selectedIds = implode(',', $selectedProducts);
        $render = "select * from products where product_id in ($selectedIds)";
        $renderResult = mysqli_query($conn, $render);

            echo '
                <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Delete</th>
                <th>Order</th>
                </tr>
            ';
        if ($renderResult) {
            while ($rowRender = mysqli_fetch_assoc($renderResult)) {
                echo '<tr>';
                echo '<td><img src="data:' . $rowRender['product_image_type'] . ';base64,' . base64_encode($rowRender['product_image']) . ' " width="200px"></td>';
                echo '<td>' . $rowRender['product_name'] . '</td>';
                echo '<td>' . $rowRender['product_price'] . '</td>';
                //productName	productPrice	productSeller	productBuyer

                echo '<td><a href="deleteFromCart.php?id=' . $rowRender['product_id'] . '&buyer=' . $_SESSION['id'] . '"><button>Delete</button></a></td>';
                echo '<td><a href="../order/order.php?id=' . $rowRender['product_id'] . '&name=' . $rowRender['product_name'] . '&price=' . $rowRender['product_price'] . '&seller=' . $rowRender['seller_id'] . '&buyer=' . $_SESSION['id'] . '"><button>Order</button></a></td>';
                echo "</tr>";
            }
        }

    } else {
        echo 'No products in cart! <a href="../buyer/buyerIndex.php"><button>Explore Items</button></a>';
    }
    ?>

</table>
