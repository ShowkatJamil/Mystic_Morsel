<?php
include 'connect.php';
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
                        <h2>Cinnamon Toast Donut</h2>
                        <h5> BDT 180/Pc</h5>
						<h4>Short Description:</h4>
						<p>The Cinnamon Toast Donut is a delightful pastry that combines the comforting flavors of warm cinnamon and toasted sugar in a circular, fluffy creation. This delectable donut features a soft and airy interior, with a golden-brown exterior that's coated in a generous layer of cinnamon-infused sugar. The marriage of sweet and slightly spicy cinnamon, complemented by the subtle crunch of the toasted sugar, creates a harmonious blend of textures and tastes. Whether enjoyed with a cup of coffee in the morning or as a special treat throughout the day. </p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Quantity</label>
									<input class="form-control" value="0" min="0" max="5" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
							</div>
						</div>

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
                        <h2>Japanese Souffle Cheese Cake</h2>
                        <h5> BDT 750/500gm</h5>
						<h4>Short Description:</h4>
						<p>The Japanese Souffle Cheesecake is a delicate dessert that captures the essence of both cheesecake and souffle. This culinary masterpiece is known for its exceptional lightness and airy texture.
                             With a velvety and smooth cream cheese base, this cake is crafted to achieve a melt-in-your-mouth sensation. What sets the Japanese Souffle Cheesecake apart is its unique baking technique, which incorporates a gentle folding of whipped egg whites into the cream cheese batter. This process imparts a remarkable fluffiness and
                              a cloud-like consistency to the cake, resulting in a delightful contrast to the rich, creamy flavors. </p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Quantity</label>
									<input class="form-control" value="0" min="0" max="5" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
							</div>
						</div>

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
                        <h2>Kitkat Eminem Chocolate Cake</h2>
                        <h5> BDT 750/500gm</h5>
						<h4>Short Description:</h4>
						<p>The Japanese Souffle Cheesecake is a delicate dessert that captures the essence of both cheesecake and souffle. This culinary masterpiece is known for its exceptional lightness and airy texture.
                             With a velvety and smooth cream cheese base, this cake is crafted to achieve a melt-in-your-mouth sensation. What sets the Japanese Souffle Cheesecake apart is its unique baking technique, which incorporates a gentle folding of whipped egg whites into the cream cheese batter. This process imparts a remarkable fluffiness and
                              a cloud-like consistency to the cake, resulting in a delightful contrast to the rich, creamy flavors. </p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Quantity</label>
									<input class="form-control" value="0" min="0" max="5" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
							</div>
						</div>

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
                        <h2>Vanilla Meringue Donut</h2>
                        <h5> BDT 180/Pc</h5>
						<h4>Short Description:</h4>
						<p>The Vanilla Meringue Donut is a delectable treat that perfectly combines the classic flavors of vanilla and the delicate sweetness of meringue. This artisanal donut features a light and fluffy interior, adorned with a creamy vanilla glaze that adds a rich and comforting touch.

                            What sets the Vanilla Meringue Donut apart is its crown of airy meringue, meticulously whipped to a glossy perfection and gently toasted to create a delicate golden hue. This cloud-like topping adds a delightful contrast of textures, with the crisp outer layer yielding to a melt-in-your-mouth experience beneath.</p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Quantity</label>
									<input class="form-control" value="0" min="0" max="5" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
							</div>
						</div>

                    </div>
                </div>
            </div>
            <!-- new product  ends-->

        </div>
    </div>
    <!-- end of products -->

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit">
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"> BDT 2100 </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> BDT 20 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> BDT 2120 </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkoutForm.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
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
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
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