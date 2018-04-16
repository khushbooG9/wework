<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>We Work</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

  </head>

  <body>
    <!-- Header Section Start -->
    <div class="header">
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo.png" width=90% height=130% alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="signup.php"><i class="lnr lnr-user"></i> Signup</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-job.php"><span class="fa fa-plus-circle"></span> Post an Ad</a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>


    </div>
    <!-- Header Section End -->

    <!-- Start intro section -->
    <section id="intro" class="section-intro">
      <div class="overlay">
        <div class="container">
          <div class="main-text">
            <h1 class="intro-title">Welcome To <span style="color: #3498DB">WeWork</span></h1>
            <p class="sub-title">Post jobs. Get jobs. It's that easy.</p>

            <!-- Start Search box -->
            <div class="row search-bar">
              <div class="advanced-search">
                <form class="search-form" method="get">
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select">
                        <select class="dropdown-product selectpicker" name="product-cat" >
                          <option value="0">All Categories</option>
                          <option class="subitem" value="community"> Community</option>
                          <option value="items-for-sale"> Items For Sale</option>
                          <option value="jobs"> Jobs</option>
                          <option value="personals"> Personals</option>
                          <option value="training"> Training</option>
                          <option value="real_estate"> Real Estate</option>
                          <option value="services"> Services</option>
                          <option value="vehicles"> Vehicles</option>
                        </select>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select location-select">
                        <select class="dropdown-product selectpicker" name="product-cat" >
                          <option value="0">All Locations</option>
                          <option value="New York">New York</option>
                          <option value="California">California</option>
                          <option value="Washington">Washington</option>
                          <option value="churches">Birmingham</option>
                          <option value="Birmingham">Chicago</option>
                          <option value="Phoenix">Phoenix</option>
                        </select>
                      </label>
                    </div>


                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Search box -->
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->

    <div class="wrapper">
      <!-- Categories Homepage Section Start -->
      <section id="categories-homepage">
        <div class="container">
          <div class="row text-center">

          </div>
        </div>
      </section>
      <!-- Categories Homepage Section End -->

      <!-- Featured Listings Start -->
      <section class="featured-lis" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
              <h3 class="section-title">Featured Listings</h3>
              <div id="new-products" class="owl-carousel">
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/product/img1.jpg" alt="">
                      <div class="overlay">
                        <a href="ads-details.php"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.php" class="item-name">Lorem ipsum dolor sit</a>
                    <span class="price">$150</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Listings End -->





    </div>

    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
              <div class="widget">
                <h3 class="block-title">About us</h3>
                <div class="textwidget">
                  <p>Bla Bla Bla</p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
    					<div class="widget">
    						<h3 class="block-title">Useful Links</h3>
  							<ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Left Sidebar</a></li>
                  <li><a href="#">Pricing Plans</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Full Width Page</a></li>
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
    					</div>
    				</div>

    			</div>
    		</div>
    	</section>
    	<!-- Footer area End -->

    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
                <p>Designed by WeWork.com</p>
              </div>

    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>


  </body>
</html>
