<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        include '../Business/GalleryBusiness.php';
        $GB = new GalleryBusiness();
        $listImageHome = $GB->getHomeImagesBusiness();
        ?>
    </head>
    <body>

        <div class="row">
            <?php
            foreach ($listImageHome as $currentImage) {
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $currentImage->path; ?>"style="width: 250px; height: 225px" >
                        <div class="caption">
                            <!--usar un form para enviar por post en vez de get con etiqueta a-->
                            <p><a href="<?php echo '../Business/ImageDeleteAction.php?id=' . $currentImage->idImage . '&&description=' . $currentImage->description . '&&path=' . $currentImage->path; ?>" class="btn btn-default" role="button">Eliminar</a> </p>
                        </div>
                    </div>
                </div> 
                <?php
            }
            ?>
            <!--                <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="../Images/hojas_platano.jpg">
                                    <div class="caption">
                                        <p><a href="#" class="btn btn-primary" role="button">Eliminar</a> <a href="#" class="btn btn-default" role="button">Actualizar</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="../Images/pejibaye.JPG">
                                    <div class="caption">
                                        <p><a href="#" class="btn btn-primary" role="button">Eliminar</a> <a href="#" class="btn btn-default" role="button">Actualizar</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="../Images/tapa_dulce.jpg">
                                    <div class="caption">
                                        <p><a href="#" class="btn btn-primary" role="button">Eliminar</a> <a href="#" class="btn btn-default" role="button">Actualizar</a></p>
                                    </div>
                                </div>
                            </div>-->
        </div>

        <form enctype="multipart/form-data" method="POST" action="../Business/ImageHomeInsertAction.php" class="form-horizontal">
            <!--Carga imagen-->
            <h4 style="margin-left: 25%">En esta sección podrá ingresar imagenes para el inicio de la página</h4>
            <br/>
            <div class="form-group" style="margin-left: 26%">
                <label class="control-label col-md-2" for="Descripción">Cargar imagen:</label>

                <label class="sr-only" for="description-es">Examinar:</label>
                <div class="col-md-5">
                    <input type="file" class="btn-block" name='imagen' id="imagen" accept="image/*">
                </div>
            </div>
            <!--Fin de cargar imagen-->
            <div class="form-group" style="margin-left: 26%">                                        
                <div class="col-md-2 col-md-offset-2">
                    <button type="submit" class="btn-main">Insertar</button>
                </div>
            </div>
           
        </form>
    </body>
</html>
