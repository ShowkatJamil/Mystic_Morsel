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
    <title>About Us</title>
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
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/logo.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span >mystic Morsel</span></h2>
                    <p>Indulge in Blissful Moments at Mystic Morsel!

                        At Mystic Morsel, we're not just about donuts – we're about creating unforgettable moments of joy and indulgence.  Our passion for crafting the perfect donut drives us to blend the finest ingredients, artisanal techniques, and creative flavors into every delectable bite.
                        
                        
                        Founded with a sprinkle of passion and a dash of innovation,  Mystic Morsel has been serving smiles since 2019.  Our journey is a tale of dedication to quality, creativity, and community.
                        
                        
                        Step into our world of fine donuts and be greeted by the delightful aroma of freshly baked donuts. Each one is a masterpiece – a symphony of flavors and textures that dance on your taste buds. From classic favorites like glazed and chocolate-covered to our signature gourmet creations, every donut is crafted with love and attention to detail.
                        
                        
                        Visit us on your Facebook and Instagram Page and let your taste buds embark on a journey of pure delight. Follow us on social media for updates on new flavors, special promotions, and behind-the-scenes glimpses of our donut-making magic.
                        
                        Indulge. Savor. Repeat. Join us at Mystic Morsel, where every donut is a creation, and every visit is an experience to cherish.</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Having faithfully served our delightful confections to a myriad of loyal customers for years, Mystic Morsel has earned a reputation as a trusted purveyor of scrumptious treats that never fail to delight. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>With a dedicated focus on precision in every aspect of our donut crafting process, Mystic Morsel embodies the epitome of professionalism in delivering a consistently superior culinary experience. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Backed by a team of donut enthusiasts who possess a wealth of knowledge and mastery in the art of creating mouthwatering delights, mystic Morsel stands as the embodiment of expertise in every delectable bite. </p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Showkat Jamil</h3> <span class="post">Web Developer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/Showkatjamil.sajib/" class="fab fa-facebook" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://github.com/ShowkatJamil" class="fab fa-github" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/showkatjamil/" class="fab fa-linkedin" target="_blank"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>A skilled web developer who crafts captivating websites, fusing design and functionality to deliver seamless digital experiences.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-2.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Tasnim Nazifa Kamal</h3> <span class="post">Web Developer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/TasnimNazifaKamal" class="fab fa-facebook" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://github.com/NazifaTasnim2410/" class="fab fa-github" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/tasnim-nazifa-kamal-17a9ab251/" class="fab fa-linkedin" target="_blank"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>A proficient web developer who has artfully crafted diverse websites, blending technology and design for captivating online experiences.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-3.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Lubaina Ali</h3> <span class="post">Web Developer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/lubainaali2000" class="fab fa-facebook" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://github.com/Lubaina21?fbclid=IwAR0b3cExLX970AbDD_kVpMWVxh139FqJCS1vYRb50vu31oBJNArOWhOvzJg" class="fab fa-github" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/lubaina-ali-55446419a/?fbclid=IwAR1Le89tWLG2RNuMNmUOVBJtZqlc9Xc808KYPNWIzuVuR6TKCzBmjk_gHck" class="fab fa-linkedin" target="_blank"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>A skilled web developer, crafting digital wonders one line of code at a time, transforming ideas into captivating websites. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-4.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Ashim Saha</h3> <span class="post">Web Developer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/asim.saha.5872" class="fab fa-facebook" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://github.com/HelloAshim?fbclid=IwAR3rBBgqkPXkI3Pu_nABW0MltNq6eGPdDCs5aUSM-ny881PJRi299frtTVM" class="fab fa-github" target="_blank"></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/ashim-saha-327813206/?fbclid=IwAR0ruz3CEfXFSIgii5KFKX0rhXWtAyL2KTw7TCY09knAXk3Ea4T5Nb6gdVA" class="fab fa-linkedin" target="_blank"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>A skilled web developer who crafts captivating websites, fusing code and design to create digital experiences that leave a lasting impact.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

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