<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['user'])) {
    
} else {
    header("location: ./logIn.php");
}
?>
<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>Administrador</title>
    <meta name="description" content="">

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

    <!--JQUERY para CRUD-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>


    <style type="text/css">
        .enlaceCrud{
            color: #ffffff;
        }
        
        .min-size{
            min-height: 200px;
        }
        
        .sombra-difuminada{
            transition-duration: 0.3s;
            box-shadow: 0px 0px 1px rgba(0,0,0,1);
        }

        .sombra-difuminada:hover,
        .sombra-difuminada:hover{
            box-shadow: 0px 0px 7px rgba(0,0,0,1);
            background: #f6f6f6;
        }

        
    </style>
    <?php
    include '../Business/ProductBusiness.php';
    ?>
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">

    <header id="header" class="navbar-fixed-top navbar-inverse video-menu" role="banner" style="background-color: #ffab40">
        <div class="container">
            <!-- <div class="row"> -->
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./inicio.php">
                    <h4 style="color: #fff; font-size: 25px; margin: 3px;">APROASUR</h4>
                </a>
            </div><!--Navbar header End-->
            <nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="active"> <a href="../Business/LogoutAction.php" class="page-scroll">SALIR</a>

                    </li>

                </ul>
            </nav>
        </div><!-- /.container-fluid -->
    </header>

    <!--End Header-->

    <!--Title-->
    <section id="portfolio_single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-header text-center">
                        <h2>Administrador</h2>
                        <p>Se despliega la pagina destinada al administrador donde podrá realizar todos los cambios deseados sobre la información mostrada en la misma.</p>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>
    </section>
    <!--End title-->

    <!--Section content-->
    <section id="port-content">
        <div class="container">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="portfolio-slider-wrapper">

                        <div id="tabs">
                            <!--Menu del CRUD-->
                            <ul><li><a href="#tabs-1">Ingresar / Eliminar imagenes de Inicio</a></li>
                                <li><a href="#tabs-4">Sección ¿Quiénes somos?</a></li>
                                <li><a href="#tabs-7">Planes de desarrollo</a></li>
                                <li><a href="#">Etapas del plan de desarrollo</a></li>
                                <li><a href="#tabs-6">Galería</a></li>
                                <li><a href="#tabs-2">Insertar Producto</a></li>
                                <li><a href="#tabs-3">Eliminar / Actualizar Producto</a></li>
                            </ul>
                            <!--Fin Menu del CRUD-->

                            <!--Inicio de tabs-->
                            <div id="tabs-1">
                                <?php include('../Administracion/CarruselInicio.php'); ?>
                            </div>
                            
                            <div id="tabs-2">
                                <?php /*include('../Administracion/InsertarProducto.php');*/?>
                            </div>
                            <div id="tabs-3">
                                <?php /*include('../Administracion/E_A_Productos.php'); */?>
                            </div>
                            
                            <div id="tabs-4">
                                <?php include('../Administracion/QuienesSomos.php'); ?>
                            </div>
                            
                            
                            <div id="tabs-6">
                                <?php /*include('../Administracion/Galeria.php');*/ ?>
                            </div>
                            
                            <div id="tabs-7">
                                <?php include('../Administracion/PlanDesarrollo.php'); ?>
                            </div>
                           
                            
                           
                            <!--Fin del tabs-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_GET['result'])) {
        if ($_GET['result'] == 'empty_field') {
            ?> 
            <h3 class="text-center">Ningún campo de texto puede quedar vacío</h3>
            <?php
        } else if ($_GET['result'] == 'esdb') {
            ?> 
            <h3 class="text-center">Problema con base de datos en español</h3>
            <?php
        } else if ($_GET['result'] == 'esdb') {
            ?> 
            <h3 class="text-center">Problema con base de datos en ingles</h3>
            <?php
        } else if ($_GET['result'] == 'success') {
            ?> 
            <h3 class="text-center">El producto ha sido ingresado con éxito</h3>
            <?php
        } else if ($_GET['result'] == 'deleted') {
            ?> 
            <h3 class="text-center">Borrado con éxito</h3>
            <?php
        } else if ($_GET['result'] == 'ondeleted') {
            ?> 
            <h3 class="text-center">No se puede borrar</h3>
            <?php
        } else if ($_GET['result'] == 'update') {
            ?> 
            <h3 class="text-center">Actualizado con éxito</h3>
            <?php
        } else if ($_GET['result'] == 'onupdate') {
            ?> 
            <h3 class="text-center">No se pudo actualizar</h3>
            <?php
        }
    }
    ?>
    <!-------------------- Ventna modal ------------------->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">

                <!--Titulo-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar</h4>
                </div>

                <!--Contenido principal-->

                <div class="modal-body">
                    <div id="tabs-1">
                        <form enctype="multipart/form-data" action="../Business/ProductUpdateAction.php" class="form-horizontal" method="POST">

                            <!--Nombre-->
                            <div class="form-group has-success">
                                <label class="control-label col-md-2" for="nombreModal">Nombre:</label>

                                <label class="sr-only" for="nombreModal-es">Español:</label>
                                <div class="col-md-5">
                                    <input class="form-control" name="name-modal-es" id="name-modal-es" type="text" placeholder="Español" value="123">
                                </div>

                                <label class="sr-only" for="nombreModal-en">Ingles:</label>
                                <div class="col-md-5">
                                    <input class="form-control" name="name-modal-en" id="name-modal-en" type="text" placeholder="Ingles">
                                </div>
                            </div>
                            <!--Fin de Nombre-->

                            <!--Descripcion-->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="DescriptionModal">Descripción:</label>

                                <label class="sr-only" for="description-modal-es">Español:</label>
                                <div class="col-md-5">
                                    <textarea class="form-control" name="description-modal-es" id="description-modal-es" placeholder="Español"></textarea>
                                </div>

                                <label class="sr-only" for="description-en">Ingles:</label>
                                <div class="col-md-5">
                                    <textarea class="form-control" name="description-modal-en" id="description-modal-en" placeholder="Ingles"></textarea>
                                </div>

                                <label class="control-label col-md-2" >Nombre de imagen:</label>
                                <div class="col-md-5">

                                    <input style="margin-top: 5%" class="form-control" name="imagenUpdate" id="imagenUpdate" type="text" readonly >
                                </div>
                                <div class="col-md-5 center-block">
                                    <img style="margin-left: 5%; margin-top: 5%" id="imagen3" width="180" height="150">
                                </div>



                            </div>

                            <!--Fin de precio-->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="Descripción">Cargar imagen (opcional):</label>

                                <label class="sr-only" for="description-es">Examinar:</label>
                                <div class="col-md-5">
                                    <input type="file" class="btn-block" name='imagenSobreescribir' id="imagenSobreescribir" accept="image/*">
                                </div>
                            </div>
                            <!--Fin de precio-->

                            <div class="form-group" style="margin-left: 30%">                                        
                                <div class="col-md-2 col-md-offset-2">
                                    <button type="submit" class="btn-main">Actualizar</button>

                                    <input style="visibility: hidden; height: 1px;width: 1px; " id="idupdate" name="idupdate"  />

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!--Fin del contenido principal-->

            </div>
        </div>
    </div>
    <!-- ---------------------End Modal --------------------->

    <!--End section content-->

    <br/><br/>

    <!-- Footer Start -->
    <section id="footer">
        <div class="footer_top"></div>

        <div class="footer_b">
            <div class="container">
                <div class="text-center">
                    <a href="Credits.php" target="_blank"><p>TCU 563<br>Universidad de Costa Rica<br>Sede del Atlántico</p></a>
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

    <!--Script para subir imagenes-->
    <script>
        $("#file-3").fileinput({
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
        });
    </script>



    <script>
        //function to update the information modal.
        function modalUpdate(name, description, nameEN, descriptionEN, image, id) {
//            alert(name + description );

            document.getElementById("name-modal-es").value = name;
            document.getElementById("name-modal-en").value = nameEN;

            document.getElementById("description-modal-es").value = description;
            document.getElementById("description-modal-en").value = descriptionEN;
            document.getElementById("idupdate").value = id;
            document.getElementById("imagenUpdate").value = image;
            document.getElementById("imagen3").src = "../Images/" + image;



//            document.getElementsByClassName("modal-title")[0].textContent = description;
//            //document.getElementsByClassName("modal-message")[0].textContent = '<img src="Style/images/team/pic5.jpg" alt="" class="img-responsive">';
        }
        ;
    </script>
</body>
</html>