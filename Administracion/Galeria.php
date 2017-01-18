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
        <form enctype="multipart/form-data" method="POST" action="../Business/GalleryInsertAction.php" class="form-horizontal">

            
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
                    
                    
                    <textarea class="form-control" name="description" id="description" placeholder="Descripción en Español"></textarea>

                    <br/>
                    <textarea class="form-control" name="descriptionEn" id="descriptionEn" placeholder="Descripción en Ingles"></textarea>
                
                    <!--Fin de cargar imagen-->
                    <div class="form-group" style="margin-left: 26%">                                        
                        <div class="col-md-2 col-md-offset-2">
                            <button type="submit" class="btn-main">Insertar</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
        
    
        <div class="row">
            <?php
            $GB = new GalleryBusiness();
            $gallery = $GB->getImagesGalleryBusiness();
            $galleryEn = $GB->getImagesGalleryBusinessEn();
            $cont  = 0;
            foreach ($gallery as $currentImage) {
                $var = $galleryEn[$cont]->description;
                ?>
                <div class="col-sm-6 col-md-4">
                    <form method="POST" action="../Business/GalleryUpdateAction.php">
                        <div class="thumbnail">
                            <img src="<?php echo $currentImage->path; ?>"style="width: 250px; height: 225px" >
                            <div class="caption">
                                <textarea class='form-control' name='description' id='description' placeholder='Español'> <?php echo $currentImage->description; ?></textarea>
                                <br>
                                <textarea class='form-control' name='descriptionEn' id='descriptionEn' placeholder='Ingles'> <?php echo $var; ?></textarea>
                                <br>
                                <input type='text' name='id' id='id' hidden='true' value="<?php echo $currentImage->idImage; ?>">
                                <p><a href="<?php echo '../Business/GalleryDeleteAction.php?id=' . $currentImage->idImage ?>" class="btn btn-default" role="button">Eliminar</a> 
                                    <button style='height: 30px' type='submit' class='btn btn-default'>Actualizar</button>
                                </p>
                            </div>
                        </div>
                        
                    </form>
                </div> 
                <?php
                $cont++;
            }
            ?>
            
        </div>
        
    </body>
</html>
