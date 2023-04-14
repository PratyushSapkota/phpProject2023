<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                 viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Store</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="../cart/showcart.php" class="mr-5 hover:text-gray-900">Cart</a>
            <a href="../../login/login.php" class="mr-5 hover:text-gray-900">Logout</a>
        </nav>
    </div>
    <script>
        function showAlert() {
            alert("Product added to cart!");
        }
    </script>
    <style>
        .productName {
            font-size: x-large;
            font-weight: bold;
        }
    </style>
</header>


<?php
session_start();
if ($_SESSION['logged']){
if ($_SESSION['type'] == 'buyer'){

$conn = mysqli_connect("localhost", "root", "", "onlinestore");

$getUserInfo = "select * from users where userid='" . $_SESSION['id'] . "'";
$row = mysqli_fetch_assoc(mysqli_query($conn, $getUserInfo));

?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 ">


            <table width="100%">

                <?php
                if ($conn) {
                    $query = 'SELECT * from products ';
                    $result = mysqli_query($conn, $query);
                }
                while ($rowProduct = mysqli_fetch_assoc($result)) {

                    echo '
            <tr>
            <td>
                            <img src="data:' . $rowProduct['product_image_type'] . ';base64,' . base64_encode($rowProduct['product_image']) . ' " width="200px"
                                class="ml-lg-5 order-1 order-lg-2">
                                </td>
                            <td style="text-align: right">
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1 align-right">
                                <h3 class="productName">' . $rowProduct["product_name"] . '</h3>
                                    <p class="font-weight-bold my-2">Rs. ' . $rowProduct["product_price"] . '</p>
                                <a href="../cart/addToCart.php?product=' . $rowProduct['product_id'] . '"><button onclick="showAlert()" class="btn btn-danger align-items-left">Add to cart</button></a>
                            </div>
                            </td>
                            
                        </div>
                    </tr>
            ';
                }


                } else {
                    header("Location: ../../store/seller/sellerIndex.php");
                }

                } else {
                    header("Location: ../../login/login.php");
                }

                ?>

            </table>

        </div>
    </div>
</div>
