<?php
include 'connect.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>All Products</title>
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
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login/Signup</a></li>
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
                    <h2>All products</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start products  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="shop-detail-box-main">
                <div class="container">


                    <?php
                    include 'connect.php';
                    // session_start();
                    $pro1 = "SELECT *
                FROM product_t
                WHERE product_id = 1";
                    $result1 = mysqli_query($conn, $pro1);
                    $proRow1 = mysqli_fetch_assoc($result1);

                    $pro2 = "SELECT *
                FROM product_t
                WHERE product_id = 2";
                    $result2 = mysqli_query($conn, $pro2);
                    $proRow2 = mysqli_fetch_assoc($result2);

                    $pro3 = "SELECT *
                FROM product_t
                WHERE product_id = 3";
                    $result3 = mysqli_query($conn, $pro3);
                    $proRow3 = mysqli_fetch_assoc($result3);

                    $pro4 = "SELECT *
                FROM product_t
                WHERE product_id = 4";
                    $result4 = mysqli_query($conn, $pro4);
                    $proRow4 = mysqli_fetch_assoc($result4);
                    ?>
                    <!-- new product -->
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"> <img class="d-block w-100" src="images/instagram-img-03.jpg" alt="First slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/instagram-img-03.jpg" alt="Second slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/instagram-img-03.jpg" alt="Third slide"> </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2><?php echo $proRow1['product_name']; ?></h2>
                                <h5> BDT <?php echo $proRow1['product_price']; ?></h5>
                                <h4>Short Description:</h4>
                                <p><?php echo $proRow1['product_description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- new product  ends-->


                    <!-- new product -->
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"> <img class="d-block w-100" src="images/instagram-img-07.jpg" alt="First slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/instagram-img-07.jpg" alt="Second slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/instagram-img-07.jpg" alt="Third slide"> </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2><?php echo $proRow2['product_name']; ?></h2>
                                <h5> BDT <?php echo $proRow2['product_price']; ?></h5>
                                <h4>Short Description:</h4>
                                <p><?php echo $proRow2['product_description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- new product  ends-->

                    <!-- new product -->
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"> <img class="d-block w-100" src="images/img-pro-03.jpg" alt="First slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/img-pro-03.jpg" alt="Second slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/img-pro-03.jpg" alt="Third slide"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2><?php echo $proRow3['product_name']; ?></h2>
                                <h5> BDT <?php echo $proRow3['product_price']; ?></h5>
                                <h4>Short Description:</h4>
                                <p><?php echo $proRow3['product_description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- new product  ends-->

                    <!-- new product -->
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"> <img class="d-block w-100" src="images/instagram-img-05.jpg" alt="First slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/instagram-img-05.jpg" alt="Second slide"> </div>
                                    <div class="carousel-item"> <img class="d-block w-100" src="images/instagram-img-05.jpg" alt="Third slide"> </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="single-product-details">
                                <h2><?php echo $proRow4['product_name']; ?></h2>
                                <h5> BDT <?php echo $proRow4['product_price']; ?></h5>
                                <h4>Short Description:</h4>
                                <p><?php echo $proRow4['product_description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- new product  ends-->

                </div>
            </div>
            <!-- end of products -->
            <div class="col-12 d-flex shopping-box"><a href="checkoutForm.php" class="ml-auto btn hvr-hover">Order Form</a> </div>
        </div>

    </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://instagram.com/mystic__morsel?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li>
                                <li>Saturday: 10.00am to 08.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form method="post" class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="newsletterEmail" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" name="submit3" type="submit">Submit</button>
                            </form>
                        </div>

                        <?php
                        if (isset($_POST['submit3'])) {
                            $newsletterEmail = $_POST['newsletterEmail'];
                            $newsletterQuery = "INSERT INTO 
						news_letter_t (email) VALUES 
           				     ('$newsletterEmail')";
                            $newsletterTable = mysqli_query($conn, $newsletterQuery);
                        }
                        ?>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Follow us on our social media's to get delicious updates</p>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100063706166648" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/mystic__morsel/?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
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