<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Blog </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\fontawesome-all.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\font\flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\animate.min.css">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\magnific-popup.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\css\meanmenu.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\blog\vendor\OwlCarousel\owl.carousel.min.css">
    <link rel="stylesheet" href="vendor\OwlCarousel\owl.theme.default.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/blog/css/style.css">
    <!-- Modernize js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\modernizr-3.6.0.min.js"></script>
</head>

<body class="sticky-header">
 
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <header class="has-mobile-menu">
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout1 bg--light pr--30 pl--30">
                <div class="container-fluid">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 d-flex justify-content-start">
                            <div class="logo-area">
                                <a href="<?php base_url();?>" class="temp-logo" id="temp-logo">
                                    <img src="<?php echo base_url(); ?>assets\blog\img\logo-dark.png" alt="logo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-center">
                            <nav id="dropdown" class="template-main-menu">
                                <ul>
                                    <li class="hide-on-mobile-menu"> <a href="#">HOME</a></li>									
                                    <li>
                                        <a href="#">BLOG</a>
                                        <ul class="dropdown-menu-col-1">
                                            <?php foreach($categories as $category){ ?>
                                            <li>
                                                <a href="blog.html"> <?php echo $category['category_name']?> </a>
                                            </li>
                                            <?php } ?>
                                            <!-- <li>
                                                <a href="blog.html"> Blog </a>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog </a>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">CONTACT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-end">
                            <div class="header-action-items">
                                <ul class="divider-style-border d-none d-xl-block">
                                    <li class="header-search-box">
                                        <a href="#header-search" title="Search">
                                            <i class="flaticon-magnifying-glass"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fas fa-rss"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
		
		
		
		
		
		
		
		
		
		
        <!-- Slider Area Start Here -->
        <section class="slider-wrap-layout3">
            <div class="rc-carousel nav-control-layout3" data-loop="true" data-center="false" data-items="5" data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                <?php foreach($sliders as $slider){ ?>
                <div class="slider-box-layout3">
                    <div class="item-img">
                        <img src="<?php echo base_url(); ?>assets\blog\img\slider\<?php echo $slider['slider_img'] ?>" alt="slider">
                        <div class="item-content">
                            <ul class="entry-meta meta-color-light">
                                <li><i class="fas fa-tag"></i><?php //echo $slider['tag'] ?></li>
                                <li><i class="fas fa-calendar-alt"></i><?php echo $slider['date'] ?></li>
                                <li><i class="fas fa-user"></i>BY <a href="#"><?php echo $slider['user'] ?></a></li>
                                <li><i class="far fa-clock"></i><?php echo $slider['clock'] ?></li>
                            </ul>
                            <h2 class="item-title"><a href="blog_detail.html"><?php echo $slider['slider_title'] ?></a></h2>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="slider-box-layout3">
                    <div class="item-img">
                        <img src="<?php echo base_url(); ?>assets\img\slider\slide3-2.jpg" alt="slider">
                        <div class="item-content">
                            <ul class="entry-meta meta-color-light">
                                <li><i class="fas fa-tag"></i>Fashion</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                <li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
                                <li><i class="far fa-clock"></i>5 Mins Read</li>
                            </ul>
                            <h2 class="item-title"><a href="blog_detail.html">Technology Inside the new battl eraa for
                                    the american west.</a></h2>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="slider-box-layout3">
                    <div class="item-img">
                        <img src="<?php echo base_url(); ?>assets\img\slider\slide3-3.jpg" alt="slider">
                        <div class="item-content">
                            <ul class="entry-meta meta-color-light">
                                <li><i class="fas fa-tag"></i>Fashion</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                <li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
                                <li><i class="far fa-clock"></i>5 Mins Read</li>
                            </ul>
                            <h2 class="item-title"><a href="blog_detail.html">Technology Inside the new battl eraa for
                                    the american west.</a></h2>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="slider-box-layout3">
                    <div class="item-img">
                        <img src="<?php echo base_url(); ?>assets\img\slider\slide3-2.jpg" alt="slider">
                        <div class="item-content">
                            <ul class="entry-meta meta-color-light">
                                <li><i class="fas fa-tag"></i>Fashion</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                <li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
                                <li><i class="far fa-clock"></i>5 Mins Read</li>
                            </ul>
                            <h2 class="item-title"><a href="blog_detail.html">Technology Inside the new battl eraa for
                                    the american west.</a></h2>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- Slider Area End Here -->
		
		
		
        <!-- Blog Area Start Here -->
        <section class="blog-wrap-layout4">
            <div class="container">
		         <div class="section-heading heading-dark">
                  <h3 class="item-heading"> OUR LATEST BLOG </h3>
                 </div>
			
                <div class="row gutters-50">
				 
                    <div class="col-lg-9">
                        <div class="blog-wrap-layout5">
                            <div class="row">
                                <?php foreach($blogs as $blog){ ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="blog-box-layout2">
                                        <div class="item-img">
                                            <a href="blog_detail.html"><img src="<?php echo base_url(); ?>assets\blog\img\blog\<?php echo $blog['imgSrc'] ?>" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i><?php //echo $blog['tag'] ?></li>
                                                <li><i class="fas fa-calendar-alt"></i><?php echo $blog['date'] ?></li>
                                            </ul>
                                            <h3 class="item-title"><a href="blog_detail.html"><?php echo $blog['title'] ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="blog-box-layout2">
                                        <div class="item-img">
                                            <a href="blog_detail.html"><img src="<?php echo base_url(); ?>assets\img\blog\blog35.jpg" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i>Fashion</li>
                                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                            </ul>
                                            <h3 class="item-title"><a href="blog_detail.html">How an Island Formsn
                                                    River And Stones</a></h3>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="blog-box-layout2">
                                        <div class="item-img">
                                            <a href="blog_detail.html"><img src="<?php echo base_url(); ?>assets\img\blog\blog37.jpg" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i>Fashion</li>
                                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                            </ul>
                                            <h3 class="item-title"><a href="blog_detail.html">How an Island Formsn
                                                    River And Stones</a></h3>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="blog-box-layout2">
                                        <div class="item-img">
                                            <a href="blog_detail.html"><img src="<?php echo base_url(); ?>assets\img\blog\blog38.jpg" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i>Fashion</li>
                                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                            </ul>
                                            <h3 class="item-title"><a href="blog_detail.html">How an Island Formsn
                                                    River And Stones</a></h3>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="blog-box-layout2">
                                        <div class="item-img">
                                            <a href="blog_detail.html"><img src="<?php echo base_url(); ?>assets\img\blog\blog39.jpg" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i>Fashion</li>
                                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                            </ul>
                                            <h3 class="item-title"><a href="blog_detail.html">How an Island Formsn
                                                    River And Stones</a></h3>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="blog-box-layout2">
                                        <div class="item-img">
                                            <a href="blog_detail.html"><img src="<?php echo base_url(); ?>assets\img\blog\blog40.jpg" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i>Fashion</li>
                                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                            </ul>
                                            <h3 class="item-title"><a href="blog_detail.html">How an Island Formsn
                                                    River And Stones</a></h3>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        
                  
                    </div>
					
					
					
					
					
                    <div class="col-lg-3 sidebar-widget-area sidebar-break-md">
 
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
                            </div>
                            <div class="widget-follow-us">
                                <ul>
                                    <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                              
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">CATEGORIES</h3>
                            </div>
                            <div class="widget-categories">
                                <ul>
                                    <?php foreach($categories as $category){ ?>
                                    <li>
                                        <a href="#"><?php echo $category['category_name']; ?>
                                            <span>(35)</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <!-- <li>
                                        <a href="#">Fashion
                                            <span>(10)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Food
                                            <span>(25)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style
                                            <span>(15)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Travel
                                            <span>(22)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Video
                                            <span>(18)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Technology
                                            <span>(22)</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
              
 
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->
		
		
		
		
        <!-- Footer Area Start Here -->
        <footer class="footer-wrap-layout2">
            <div class="container">
                <div class="footer-box-layout2">
                    <div class="footer-logo">
                        <a href="index.html"><img src="<?php echo base_url(); ?>assets\blog\img\logo-dark.png" alt="logo"></a>
                    </div>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i>259k LIKES</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i>480k FOLLOWERS</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i>280k FOLLOWERS</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i>180k SUBSCRIBER</a></li>
                    </ul>
                    <div class="copyright">© 2019 Teqnohub. All Rights Reserved.</div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
        <!-- Search Box Start Here -->
        <div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <form class="header-search-form">
                <input type="search" value="" placeholder="Type here........">
                <button type="submit" class="search-btn">
                    <i class="flaticon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- Search Box End Here -->
    </div>
    <!-- jquery-->
    <script src="<?php echo base_url(); ?>assets\blog\js\jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\plugins.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\bootstrap.min.js"></script>
    <!-- Owl Carousel js -->
    <script src="<?php echo base_url(); ?>assets\blog\vendor\OwlCarousel\owl.carousel.min.js"></script>
    <!-- Popup js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\jquery.magnific-popup.min.js"></script>
    <!-- Meanmenu js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\jquery.meanmenu.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\jquery.smoothscroll.min.js"></script>
    <!-- Main js -->
    <script src="<?php echo base_url(); ?>assets\blog\js\main.js"></script>

</body>

</html>