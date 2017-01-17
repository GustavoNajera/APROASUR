<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>APROASUR</title>
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
        <link rel="stylesheet" href="../Style/css/flexslider.css"/>
        <link rel="stylesheet" href="../Style/css/red.css"/>

        <!-- Template styles-->
        <link rel="stylesheet" href="../Style/css/custom.css" />
        <link rel="stylesheet" href="../Style/css/responsive.css" />
        <link rel="stylesheet" href="../Style/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <link href='../Style/images/APROASUR LOGO.png' rel='icon'/>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
        <!--inclusions and instances-->
        <!--inclusions-->
        
        
    </head>

    <body data-spy="scroll" data-target=".navbar-fixed-top">

         <img  style="width: 50%; height: 50%; margin-left: 25%; margin-top: 4%" src="../Images/webConstruction.png"/>
        <!-- End Back To Top Button -->
        <!-- Javascript Files
            ================================================== -->
        <!-- initialize jQuery Library -->

        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="../Style/js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="../Style/js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script src="../Style/js/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="../Style/js/jquery.isotope.js"></script>
        <!-- Pretty Photo -->
        <script type="text/javascript" src="../Style/js/jquery.prettyPhoto.js"></script>
        <!-- SmoothScroll -->
        <script type="text/javascript" src="../Style/js/smooth-scroll.js"></script>
        <!-- Image Fancybox -->
        <script type="text/javascript" src="../Style/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Counter  -->
        <script type="text/javascript" src="../Style/js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="../Style/js/waypoints.min.js"></script>
        <script type="text/javascript" src="../Style/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="../Style/js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="../Style/js/jquery.easing.1.3.js"></script>
        <!-- PrettyPhoto -->
        <script src="../Style/js/jquery.singlePageNav.js"></script>
        <!-- Wow Animation -->
        <script type="js/javascript" src="../Style/js/wow.min.js"></script>
        <!-- Google Map  Source -->
        <script type="text/javascript" src="../Style/js/gmaps.js"></script>
        <!-- Custom js -->
        <script src="../Style/js/custom.js"></script>
        <script>
    //function to update the information modal.
    function modalSelect(modalMessage, modalTitle) {
        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
        document.getElementsByClassName("modal-message")[0].textContent = modalMessage;
    }
    ;
        </script>

        <script>
            //function to update the information modal.
            function modalSelectGallery(description, path) {
                document.getElementById("imageModal").src = path;
                document.getElementsByClassName("modal-title")[1].textContent = description;
                //document.getElementsByClassName("modal-message")[0].textContent = '<img src="Style/images/team/pic5.jpg" alt="" class="img-responsive">';
            }
            ;
        </script>
        <script>
            var map;
            map = new GMaps({
                div: '#map',
                lat: 9.809679,
                lng: -83.703649,
                scrollwheel: false,
                panControl: false,
                zoomControl: false,
            });

            map.addMarker({
                lat: 9.809679,
                lng: -83.703649,
                title: 'Themeturn',
                infoWindow: {
                    content: '<p> ThemeTurn, Dhanmondhi 27</p>'
                },
                icon: "../Style/images/map1.png"
            });
        </script>
    </body>
</html>
