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
        <div class="form-horizontal">
            <?php
            $productBusiness = new ProductBusiness();
//                                    $products = $productBusiness->getAll('aproasur_db', 'root');
            $productsEN = $productBusiness->getAll('aproasur_db_en', 'en16_aproasur');
//                                    
            $products = $productBusiness->getAll('aproasur_db', 'user16_aproasur');
//                                  $productsEN = $productBusiness->getAll('aproasur_db_en', 'en16_aproasur');
            $count = 0;
            foreach ($products as $currentProduct) {
                $product = $productBusiness->getProduct($currentProduct->idProduct, 'aproasur_db_en', 'en16_aproasur');
//                                      $product = $productBusiness->getProduct($currentProduct->idProduct,'aproasur_db_en', 'root');
//                                      $product = $productBusiness->getProduct($currentProduct->idProduct,'aproasur_db_en', 'en16_aproasur');
//                                      
//                                        echo $product->name;
//                                       exit;
                ?>

                <!--Primer Producto-->
                <div class="form-group has-success">
                    <label class="control-label col-md-2" for="nombre">Nombre Español:</label>

                    <div class="col-md-1">
                        <p class="form-control-static"><?php echo $currentProduct->name; ?></p>
                    </div>

                    <label class="control-label col-md-2" for="nombre">Nombre Ingles:</label>
                    <div class="col-md-2">
                        <p class="form-control-static"><?php echo $product->name; ?></p>
                    </div>

                    <div class="form-group">  
                        <div class="col-md-1">
                            <p class="form-control-static">
                                <a style="" href="#" onClick="<?php echo "modalUpdate('" . $currentProduct->name . "','" . $currentProduct->description . "','" . $product->name . "','" . $product->description . "','" . $product->pathImage . "','" . $product->idProduct . "')"; ?>" data-toggle="modal" 
                                                                                    data-target="#myModal2" ><font color="Orange">Actualizar</font></a>
                                <!--                                                            <a href="#"  data-toggle="modal" 
                                                                                           data-target="#myModal2" style="color: #006699;">Actualizarh</a>-->
                            </p>
                        </div>

                        <div class="col-md-1">
                            <p class="form-control-static">
                            <form action="../Business/ProductDeleteAction.php" method="POST">
                                <button style="height: 30px" type="submit" class="btn-warning">Eliminar</button>

                                <input style="visibility: hidden; height: 0px;width: 0px; " name="id" value="<?php echo $currentProduct->idProduct; ?>" />
                                <input style="visibility: hidden; height: 0px;width: 0px; " name="id2" value="<?php echo $product->pathImage; ?>" />

                            </form> 
                            </p>
                        </div>
                    </div>
                </div>
                <!--Fin de Primer producto-->
                <?php
                $count++;
            }
            ?>
        </div>
    </body>
</html>
