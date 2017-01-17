<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['user'])) {
    header("location: ./CRUD_Producto.php");
} else {
//    header("location: ./logIn.php");
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ADMINISTRACIÓN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../Style/css/bootstrap.min.css"/>

    <!-- Template styles-->
    <link rel="stylesheet" href="../Style/css/custom.css" />
    <!-- REsponsive -->
    <link rel="stylesheet" href="../Style/css/responsive.css" />
    <link rel="stylesheet" href="../Style/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
</head>
<style>
    .background-LogIn{
        background-image: url("../Images/difuminado.jpg");
        background-size: 100% 100%;
        background-attachment: fixed;
    }
    .color-nav{
        background-image: url("../Images/difuminado.jpg");
        background-size: 100%;
    }
    .footer-tav{
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 90px;
        background: #222; 
        border-top: 1px solid #555;
    }
    .title-nav-tav{
        color: #fff; font-size: 25px; margin: 3px;
    }
    .color-title-blog{
        color: #666;
    }
</style>

<body data-spy="scroll" data-target=".navbar-fixed-top" class="background-LogIn">

    <header id="header" class="navbar-fixed-top color-nav" role="banner">
        <div class="container">
            <div class="navbar-header ">
                <a class="navbar-brand" href="./inicio.php">
                    <h4 class="title-nav-tav">APROASUR</h4>
                </a>
            </div>

        </div>
    </header>
    <!--End Header-->

    <!--Title-->
    <section id="portfolio_single">
        <div class="container">
            <!--titulo -->
            <div class="text-center">
                <h1 class="color-title-blog">Exclusivo para administradores del sitio</h1>
                <p>Ingrese los datos que se le solicitan para iniciar sesión.</p>
            </div>
            <!-- Fin del titulo -->
            
            
            <?php
                if (isset($_GET['error'])) {
                    $textError = "ERROR";
                    if ($_GET['error'] == 'empty_field') {
                        $textError = "Ningún campo de texto puede quedar vacío.";
                    }
                    else if ($_GET['error'] == 'no_user') {
                        $textError = "El correo o la contraseña son incorrectos";
                    }
            ?>
            <div col-md-offset-4 col-md-4>
                <div class="alert alert-danger text-center">
                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                    <strong>ERROR!</strong> <?php echo $textError; ?>
                </div>
            </div>
            <?php
                }
            ?>
            
            <form action="../Business/LoginBusinessAction.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label class="sr-only" for="email">Correo:</label>
                        <div class="col-sm-offset-3 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input  class="form-control" name="email" id="email" type="text" placeholder="Correo">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="password">Contraseña:</label>
                        <div class="col-sm-offset-3 col-sm-6">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="form-group">                                        
                        <div class="btn-block col-sm-offset-7 col-sm-4">
                           <a href="./inicio.php" class="btn btn-default">Regresar</a>
                           <button type="submit" class="btn btn-success">Ingresar</button>
                        </div>
                    </div>
            </form>
        </div>
    </section>
            
    <footer class="footer-tav text-center" >
        <a href="CRUD_Producto.php" target="_blank"><p>TCU 563<br>Universidad de Costa Rica<br>Sede del Atlántico</p></a>
    </footer>
    
    <!-- Bootstrap y jquery (Necesario para alert) -->
    <script src="../Style/js/jquery.js"></script>
    <script src="../Style/js/bootstrap.min.js"></script>
</body>
</html>