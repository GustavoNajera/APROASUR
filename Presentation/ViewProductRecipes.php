
<!DOCTYPE html>
<head>

    <?php
//    include './Business/RecipeBusiness.php';
    error_reporting(1);
   
    include '../Business/ProductBusiness.php';
//    echo 'topo';
//    exit;
    include '../Business/RecipeBusiness.php';
//     echo 'topo';
//    exit;
?>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Cypras-One page html5 template</title>
    <meta name="description" content="">
    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- CSS
    ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../Style/css/bootstrap.min.css"/>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../Style/css/font-awesome.min.css"/>
    <!-- Animation -->
    <link rel="stylesheet" href="../Style/css/animate.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../Style/css/owl.carousel.css"/>
    <link rel="stylesheet" href="../Style/css/owl.theme.css"/>
    <!-- Pretty Photo -->
    <link rel="stylesheet" href="../Style/css/prettyPhoto.css"/>
    <!-- colro style -->
    <link rel="stylesheet" href="../Style/css/red.css"/>
    <!-- Bx slider -->
    <link rel="stylesheet" href="../Style/css/jquery.bxslider.css"/>

    <!-- Template styles-->
    <link rel="stylesheet" href="../Style/css/custom.css" />
    <!-- REsponsive -->
    <link rel="stylesheet" href="../Style/css/responsive.css" />
    <link rel="stylesheet" href="../Style/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    <header id="section_header" class="navbar-fixed-top main-nav" role="navigation">
        <div class="container">
            <!-- <div class="row"> -->
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="../Style/images/logo2.png" alt="" class="img-responsive">
                </a>
            </div><!--Navbar header End-->
            <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="../index.php#slider_part" data-scroll  class="active">Home </a>
                    </li>
                    <li>
                        <a href="../index.php#service" data-scroll >¿Quienes somos?</a>
                    </li>
                    <li>
                        <a href="../index.php#portfolio" data-scroll  >Planes </a>
                    </li>
                    <li>
                        <a href="../index.php#team" data-scroll  >Galeria</a>
                    </li>

                    <li>
                        <a href="../index.php#blog" data-scroll  >Productos</a>
                    </li>
                    <li>
                        <a href="../index.php#contact" data-scroll >Contactenos</a>
                    </li>
                </ul>
            </nav>
        </div><!-- /.container-fluid -->
    </header>
    <section id="portfolio_single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-header text-center">
                        <h2>Recetas de productos</h2>
                        <ul class="breadcrumb">
                            <li>home</li>
                            <li>productos</li>
                            <li>recetas</li>
                        </ul>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>
    </section>
    <?php
    
   
//     include '../Business/RecipeBusiness.php';
    
//    $recipeBusiness = new RecipeBusiness();
    
    $recipeBusiness = new RecipeBusiness();
    
    $recipes = $recipeBusiness->getRecipesByProduct($_GET['productId']);
//    echo 'topo';
//    exit;
   
    foreach ($recipes as $currentRecipe) {
        
        
        
        ?>
        <section id="port-content">
            <div class="container">
                <div class="row">
                    <!-- sidebar start -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="portfolio-slider-wrapper">
                            <ul id="portfolio-slider">
                                <li><img src="../Style/images/slider/s3.jpg" alt="" class="img-responsive"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="portfolio-desc">
                                <?php
                                echo '<h4>' . $currentRecipe->name . '</h4>';
                                echo '<p>' . $currentRecipe->description . '</p>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <center><hr width="75%" style="height:3px;background-color:black;"/></center>

    <?php
}
?>

<section id="related">
    <div class="container">
        <div class="row">
            <div class="related text-center">
                <h3>Otros productos</h3>
                <?php
                 
                $productBusiness = new ProductBusiness();
//                echo 'topo';
//                     exit;
                $products = $productBusiness->getAllProducts();
//                 echo 'topo';
//                     exit;
                foreach ($products as $currentProduct) {
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="rel-post">

                            <?php echo '<img src="../Images/' . $currentProduct->pathImage . '" alt="" class="img-responsive">' ?>
                            <div class="caption">
                                <?php
                                echo '<h4>' . $currentProduct->name . '</h4>';
                                ?>

                            </div>
                            <a href="<?php
                            echo '../Presentation/ViewProductRecipes.php?productId=' .
                            $currentProduct->idProduct;
                            ?>">
                                <center><button type="button" class="btn btn-main">Ver recetas</button></center>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer Start -->
<section id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Main Menu</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#about">Home</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Useful Links</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#"> inventore natus ullam eum</a></li>
                            <li><a href="#">consectetur adipisicing elit.</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Contact us</h3>
                    <div class="footer_menu_contact">
                        <ul>
                            <li> <i class="fa fa-home"></i>
                                <span> 12 Segun Bagicha, 10th Floor </span></li>
                            <li><i class="fa fa-globe"></i>
                                <span> +880-12345678</span></li>
                            <li><i class="fa fa-phone"></i>
                                <span> info@mail.com</span></li>
                            <li><i class="fa fa-map-marker"></i>
                                <span> www.web.com</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Tags</h3>
                    <div class="footer_menu tags">
                        <a href="#"> Design</a>
                        <a href="#"> User Interface</a>
                        <a href="#"> Graphics</a>
                        <a href="#"> Web Design</a>
                        <a href="#"> Development</a>
                        <a href="#"> Asp.net</a>
                        <a href="#"> Bootstrap</a>
                        <a href="#"> Joomla</a>
                        <a href="#"> SEO</a>
                        <a href="#"> Wordepress</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer_bottom">
                        <p class="text-block"> &copy; Copyright reserved to <span>Cyprass </span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-rss"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Footer Area End -->



<!-- Back To Top Button -->
<section id="back-top">
    <a href="#slider_part" class="scroll"></a>
</section>
<!-- End Back To Top Button -->



<!-- Javascript Files
    ================================================== -->
<!-- initialize jQuery Library -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="../Style/js/jquery2.js"></script>
<!-- Bootstrap jQuery -->
<script src="../Style/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="../Style/js/owl.carousel.js"></script>
<script src="../Style/js/owl.carousel.min.js"></script>

<!-- Isotope -->
<script src="../Style/js/jquery.isotope.js"></script>
<!-- Pretty Photo -->

<!-- SmoothScroll -->
<script type="text/javascript" src="../Style/js/smooth-scroll.js"></script>
<!-- Image Fancybox -->
<script type="text/javascript" src="../Style/js/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Counter  -->
<script type="text/javascript" src="../Style/js/jquery.counterup.min.js"></script>
<!-- waypoint js -->
<script type="text/javascript" src="../Style/js/waypoints.min.js"></script>
<!-- Bx sldier -->
<script type="text/javascript" src="../Style/js/jquery.bxslider.min.js"></script>
<!-- scroll to top -->
<script type="text/javascript" src="../Style/js/jquery.scrollTo.js"></script>
<!-- Prettyphoto -->
<script src="../Style/js/jquery.prettyPhoto.js"></script>
<!-- Wow Animation -->
<script type="js/javascript" src="../Style/js/wow.min.js"></script>
<!-- Google Map  Source -->
<script type="text/javascript" src="../Style/js/gmaps.js"></script>
<!-- Custom js -->
<script src="../Style/js/custom.js"></script>

<script>
    $('#portfolio-slider').bxSlider({
        mode: 'fade',
        autoControls: false
    });
</script>
</body>
</html>