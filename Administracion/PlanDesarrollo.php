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
            include '../Business/PlanBusiness.php';
        ?>
    </head>
    <body>
        <?php
            $planBusiness = new PlanBusiness(); 
            $planEs = $planBusiness->getPlanEs();
            $planEn = $planBusiness->getPlanEn();
        ?>
        <!-- $name, $objective, $description-->
        <form method="POST" action="../Business/UpdatePlan.php" class="form-horizontal">
               <!--=========================== Nombre ===========================-->
               <div class="form-group thumbnail sombra-difuminada">
                    <!--Nombre español-->
                    <label class="control-label col-md-1" for="name-es">Nombre <span class="label label-default">Español</span></label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="name-es" id="name-es" value="<?php echo $planEs->name;?>">
                   </div>
                    
                    <!--Nombre Ingles-->
                    <label class="control-label col-md-1" for="name-en">Nombre <span class="label label-default">Ingles</span></label>
                    <div class="col-md-5"> 
                        <input type="text" class="form-control" name="name-en" id="name-en" value="<?php echo $planEn->name; ?>">
                   </div>
               </div>
               
               <!--=========================== Descripcion ===========================-->
               <div class="form-group thumbnail sombra-difuminada">
                    <!--Descripcion español-->
                    <label class="control-label col-md-1" for="description-es">Descripción <span class="label label-default">Español</span></label>
                    <div class="col-md-5">
                        <textarea class="form-control text-justify min-size" name="description-es" id="description-es">
                            <?php echo $planEs->description; ?>      
                         </textarea>
                   </div>
                    
                    <!--descripcion Ingles-->
                    <label class="control-label col-md-1" for="description-en">Descripción <span class="label label-default">Ingles</span></label>
                    <div class="col-md-5">
                        <textarea class="form-control text-justify min-size" name="description-en" id="description-en">
                            <?php echo $planEn->description; ?>   
                         </textarea>
                   </div>
               </div>
               
               <!--=========================== Objetivo ===========================-->
                <div class="form-group thumbnail sombra-difuminada">
                    <!--Objetivo español-->
                    <label class="control-label col-md-1" for="objective-es">Objetivo <span class="label label-default">Español</span></label>
                    <div class="col-md-5">
                        <textarea class="form-control text-justify min-size" name="objective-es" id="objective-es">
                            <?php echo $planEs->objective; ?>      
                        </textarea>
                    </div>

                    <!--Objetivo Ingles-->
                    <label class="control-label col-md-1" for="objective-en">Objetivo <span class="label label-default">Ingles</span></label>
                    <div class="col-md-5">
                        <textarea class="form-control text-justify min-size" name="objective-en" id="objective-en">
                            <?php echo $planEn->objective; ?>   
                        </textarea>
                   </div>
                </div>
               
               
                <div class="form-group">
                    <div class="col-md-2">
                        <button class="btn btn-success btn-lg">Actualizar</button>
                    </div>
                </div>
        </form>
    </body>
</html>
