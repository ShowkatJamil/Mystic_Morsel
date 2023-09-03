<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Admin Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- custom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>


</head>

<body>
    <header class="main-header">
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt="" width="60px"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="adminDashboard.php">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="updateProducts.php">Update Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="coupons.php">Coupons</a></li>
                        <li class="nav-item"><a class="nav-link" href="registeredUsers.php">Registered Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>

    <!-- End Main Top -->


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Update Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <div id="orderTableDiv">
        <table border="1">
            <tr>
                <th>Upload Image</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Update</th>
            </tr>
            <tr method="POST">
                <td><input type="file"></td>
                <td><input type="text" value="Cinnamon Toast Donut, Japanese Souffle Cheese Cake"></td>
                <td><input type="text" value="3, 2"></td>
                <td><input type="text" value="BDT 2040.00"></td>
                <td><button class="btn-update">Update</button></td>
            </tr>

            <tr>
                <td><input type="file"></td>
                <td><input type="text" value="Cinnamon Toast Donut, Japanese Souffle Cheese Cake"></td>
                <td><input type="text" value="3, 2"></td>
                <td><input type="text" value="BDT 2040.00"></td>
                <td><button class="btn-update">Update</button></td>
            </tr>

            <tr>
                <td><input type="file"></td>
                <td><input type="text" value="Cinnamon Toast Donut, Japanese Souffle Cheese Cake"></td>
                <td><input type="text" value="3, 2"></td>
                <td><input type="text" value="BDT 2040.00"></td>
                <td><button class="btn-update">Update</button></td>
            </tr>

            <tr>
                <td><input type="file"></td>
                <td><input type="text" value="Cinnamon Toast Donut, Japanese Souffle Cheese Cake"></td>
                <td><input type="text" value="3, 2"></td>
                <td><input type="text" value="BDT 2040.00"></td>
                <td><button class="btn-update">Update</button></td>
            </tr>
            <tr>
                <td><input type="file"></td>
                <td><input type="text" value="Cinnamon Toast Donut, Japanese Souffle Cheese Cake"></td>
                <td><input type="text" value="3, 2"></td>
                <td><input type="text" value="BDT 2040.00"></td>
                <td><button class="btn-update">Update</button></td>
            </tr>

            <!-- Add more rows as needed -->
        </table>
        <form method="post">
            <table>
                <tr>
                    <td><input type="file"></td>
                    <td><input type="text" name="name1"></td>
                    <td><input type="text" name="description1"></td>
                    <td><input type="text" name="price1"></td>
                    <td><button type="submit" name="submit1" class="btn-update">Update</button></td>
                </tr>
            </table>
            <!-- <input type="submit" value="Submit"> -->
        </form>
        <form method="post">
            <table>
                <tr>
                    <td><input type="file"></td>
                    <td><input type="text" name="name2"></td>
                    <td><input type="text" name="description2"></td>
                    <td><input type="text" name="price2"></td>
                    <td><button type="submit" name="submit2" class="btn-update">Update</button></td>
                </tr>
            </table>
            <!-- <input type="submit" value="Submit"> -->
        </form>
        <form method="post">
            <table>
                <tr>
                    <td><input type="file"></td>
                    <td><input type="text" name="name3"></td>
                    <td><input type="text" name="description3"></td>
                    <td><input type="text" name="price3"></td>
                    <td><button type="submit" name="submit3" class="btn-update">Update</button></td>
                </tr>
            </table>
            <!-- <input type="submit" value="Submit"> -->
        </form>
        <form method="post">
            <table>
                <tr>
                    <td><input type="file"></td>
                    <td><input type="text" name="name4"></td>
                    <td><input type="text" name="description4"></td>
                    <td><input type="text" name="price4"></td>
                    <td><button type="submit" name="submit4" class="btn-update">Update</button></td>
                </tr>
            </table>
            <!-- <input type="submit" value="Submit"> -->
        </form>


    </div>
    <?php

    if (isset($_POST['submit1'])) {

        include 'connect.php';

        $name1 = $_POST['name1'];
        $description1 = $_POST['description1'];
        $price1 = $_POST['price1'];

        if (true) {
            $sql = "UPDATE product_t 
                            SET product_name = '$name1', product_description = '$description1', product_price = '$price1'
                            WHERE product_id = 1";
            $result = mysqli_query($conn, $sql);
        }
    } elseif (isset($_POST['submit2'])) {

        include 'connect.php';

        $name1 = $_POST['name2'];
        $description1 = $_POST['description2'];
        $price1 = $_POST['price2'];

        if (true) {
            $sql = "UPDATE product_t 
                            SET product_name = '$name1', product_description = '$description1', product_price = '$price1'
                            WHERE product_id = 2";
            $result = mysqli_query($conn, $sql);
        }
    } elseif (isset($_POST['submit3'])) {

        include 'connect.php';

        $name1 = $_POST['name3'];
        $description1 = $_POST['description3'];
        $price1 = $_POST['price3'];

        if (true) {
            $sql = "UPDATE product_t 
                            SET product_name = '$name1', product_description = '$description1', product_price = '$price1'
                            WHERE product_id = 3";
            $result = mysqli_query($conn, $sql);
        } elseif (isset($_POST['submit4'])) {

            include 'connect.php';

            $name1 = $_POST['name4'];
            $description1 = $_POST['description4'];
            $price1 = $_POST['price4'];

            if (true) {
                $sql = "UPDATE product_t 
                                SET product_name = '$name1', product_description = '$description1', product_price = '$price1'
                                WHERE product_id = 4";
                $result = mysqli_query($conn, $sql);
            }
        }
    }

    ?>




    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2023 <a href="#">Mystic Morsel</a> Design By :Showkat, Nazifa, Lubaina, Ashim </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none; border-radius: 5px 0px 5px;box-shadow: 2px 2px white;"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>