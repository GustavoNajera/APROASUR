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

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="../Images/hojas_platano.jpg">
                        <br/>
                        <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>

                        <br/>
                        <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>

                        <div class="caption">
                            <p><a href="#" class="btn btn-primary" role="button">Eliminar</a> <a href="#" class="btn btn-default" role="button">Actualizar</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="../Images/pejibaye.JPG">
                        <br/>
                        <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>

                        <br/>
                        <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>

                        <div class="caption">
                            <p><a href="#" class="btn btn-primary" role="button">Eliminar</a> <a href="#" class="btn btn-default" role="button">Actualizar</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="../Images/tapa_dulce.jpg">
                        <br/>
                        <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>

                        <br/>
                        <textarea class="form-control" name="description-en" id="description-en" placeholder="Ingles"></textarea>

                        <div class="caption">
                            <p><a href="#" class="btn btn-primary" role="button">Eliminar</a> <a href="#" class="btn btn-default" role="button">Actualizar</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <br/><br/>
            <div class="col-sm-12 col-md-12">
                <div class="thumbnail">
                    
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
                    
                    
                    <textarea class="form-control" name="description-en" id="description-en" placeholder="Descripción en Español"></textarea>

                    <br/>
                    <textarea class="form-control" name="description-en" id="description-en" placeholder="Descripción en Ingles"></textarea>
                
                    <!--Fin de cargar imagen-->
                    <div class="form-group" style="margin-left: 26%">                                        
                        <div class="col-md-2 col-md-offset-2">
                            <button type="submit" class="btn-main">Insertar</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </body>
</html>
