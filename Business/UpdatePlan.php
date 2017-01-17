<?php
include '../Data/PlanData.php';
//$idPlan, $name, $objective, $description, $idOrganization
//$name, $objective, $description
if (isset($_POST['name-es']) && isset($_POST['objective-es']) && isset($_POST['description-es'])&&
    isset($_POST['name-en']) && isset($_POST['objective-en']) && isset($_POST['description-en']) &&
    $_POST['name-es'] != "" && $_POST['objective-es'] != "" && $_POST['description-es'] != "" &&
    $_POST['name-en'] != "" && $_POST['objective-en'] != "" && $_POST['description-en'] != ""){
    
    //Se crean los objetos para actualizar.
    $planEs = new Plan(1, $_POST['name-es'], $_POST['objective-es'], $_POST['description-es'], 1);
    $planEn = new Plan(1, $_POST['name-en'], $_POST['objective-en'], $_POST['description-en'], 1);
    
    //Se realiza la consulta en la BD
    $planData = new PlanData(); 
    $result = $planData->updatePlan($planEs, $planEn);
    if($result == "Success"){
        header("location: ../Presentation/CRUD_Producto.php?result=update");
    }
    else{
        header("location: ../Presentation/CRUD_Producto.php?error= Problema de conexión.");
    }
}
else{
    header("location: ../Presentation/CRUD_Producto.php?error= Ningun campo puede quedar vacío.");
}

