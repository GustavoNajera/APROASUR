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
        include '../Business/OrganizationBusiness.php';  
        ?>
    </head>
    <body>
        <?php 
            $organizationBusiness = new OrganizationBusiness();
            $organizationEs = $organizationBusiness->getOrganization();
            $organizationEn = $organizationBusiness->getOrganizationEn();
        ?>
        <form enctype="multipart/form-data" method="POST" action="../Business/UpdateOrganization.php" class="form-horizontal">
            
            <!-- ================= Nombre ============== -->
            <div class="thumbnail sombra-difuminada">
                <div class="form-group">
                    <label class="control-label col-sm-1" for="name-es">Nombre <span class="label label-default">Español</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name-es" id="name-en" value="<?php echo $organizationEs->name; ?>">
                    </div>

                    <label class="control-label col-sm-1" for="name-en">Nombre <span class="label label-default">Ingles</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name-en" id="name-en" value="<?php echo $organizationEn->name; ?>">
                    </div>

                </div>
            </div>
            
            
            <!--================= Mision ==============-->
            <div class="form-group thumbnail sombra-difuminada">
                <label class="control-label col-sm-1" for="mission-es">Mision <span class="label label-default">Español</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="mission-es" id="mision-es"><?php echo substr($organizationEs->mission, 0, 1100);?></textarea>
                </div>
                
                <label class="control-label col-sm-1" for="mission-en">Mision <span class="label label-default">Ingles</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="mission-en" id="mision-en"><?php echo substr($organizationEn->mission, 0, 1100);?></textarea>
                </div>
                
            </div>
                
            <!--================= Vision ==============-->
            <div class="form-group thumbnail sombra-difuminada">
                <label class="control-label col-md-1" for="view-es">Vision <span class="label label-default">Español</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="view-es" id="view-es"><?php echo substr($organizationEs->view, 0, 1100);?></textarea>
                </div>
                
                <label class="control-label col-md-1" for="view-en">Vision <span class="label label-default">Ingles</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="view-en" id="view-en"><?php echo substr($organizationEn->view, 0, 1100);?></textarea>
                </div>
                
            </div>  
            
            
            
            <!--================= Antecedentes ==============-->
            <div class="form-group thumbnail sombra-difuminada">
                <label class="control-label col-md-1" for="history-es">Antecedentes <span class="label label-default">Español</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="history-es" id="history-es"><?php echo substr($organizationEs->history, 0, 1100);
                        ?>
                    </textarea>
                </div>
                
                <label class="control-label col-md-1" for="history-en">Antecedentes <span class="label label-default">Ingles</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="history-en" id="history-en"><?php echo substr($organizationEn->history, 0, 1100); ?> </textarea>
                </div>
                
            </div>  
            
            <!--================= Comisión ==============-->
            <div class="form-group thumbnail sombra-difuminada">
                <label class="control-label col-md-1" for="comission-es">Comisión <span class="label label-default">Español</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="comission-es" id="comission-es"> <?php echo substr($organizationEs->comission, 0, 1100);?></textarea>
                </div>
                
                <label class="control-label col-md-1" for="comission-en">Comisión <span class="label label-default">Ingles</span></label>
                <div class="col-sm-5">
                    <textarea class="form-control min-size" name="comission-en" id="comission-en"><?php echo substr($organizationEn->comission, 0, 1100);?></textarea>
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
