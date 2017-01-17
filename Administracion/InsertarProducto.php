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
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST" action="../Business/ProductInsertAction.php" class="form-horizontal">

            <!--Nombre-->
            <div class="form-group">
                <label class="control-label col-md-2" for="nombre">Nombre:</label>

                <label class="sr-only" for="nombre">Español:</label>
                <div class="col-md-5">
                    <input class="form-control" name="name-es" id="name-es" type="text" placeholder="Español" >
                </div>

                <label class="sr-only" for="nombre">Ingles:</label>
                <div class="col-md-5">
                    <input class="form-control" name="name-en" id="name-en" type="text" placeholder="Ingles">
                </div>
            </div>
            <!--Fin de Nombre-->

            <!--Descripcion-->
            <div class="form-group">
                <label class="control-label col-md-2" for="Descripción">Descripción:</label>

                <label class="sr-only" for="description-es">Español:</label>
                <div class="col-md-5">
                    <textarea class="form-control" name="description-es" id="description-es" placeholder="Español"></textarea>
                </div>

                <label class="sr-only" for="description-en">Ingles:</label>
                <div class="col-md-5">
                    <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>
                </div>
            </div>
            <!--Fin de precio-->

            <!--Carga imagen-->
            <div class="form-group">
                <label class="control-label col-md-2" for="Descripción">Cargar imagen:</label>

                <label class="sr-only" for="description-es">Examinar:</label>
                <div class="col-md-5">
                    <input type="file" class="btn-block" name='imagen' id="imagen" accept="image/*">
                </div>
            </div>
            <!--Fin de cargar imagen-->
            <div class="form-group">                                        
                <div class="col-md-2 col-md-offset-2">
                    <button type="submit" class="btn-main">Insertar</button>
                </div>
            </div>

        </form>
    </body>
</html>
