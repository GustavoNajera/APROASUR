<?php
include '../Data/OrganizationData.php';

if (isset($_POST['name-es']) && isset($_POST['history-es']) && isset($_POST['mission-es']) && isset($_POST['view-es'])&& isset($_POST['comission-es'])&&
    isset($_POST['name-en']) && isset($_POST['history-en']) && isset($_POST['mission-en']) && isset($_POST['view-en'])&& isset($_POST['comission-en']) &&
    $_POST['name-es'] != "" && $_POST['history-es'] != "" && $_POST['mission-es'] != "" && $_POST['view-es'] != "" && $_POST['comission-es'] != ""&&
    $_POST['name-en'] != "" && $_POST['history-en'] != "" && $_POST['mission-en'] != "" && $_POST['view-en'] != "" && $_POST['comission-en'] != ""){
    
    //Se crean los objetos para actualizar.
    $organizationEs = new Organization(1, $_POST['name-es'], $_POST['history-es'], $_POST['mission-es'], $_POST['view-es'], $_POST['comission-es']);
    $organizationEn = new Organization(1, $_POST['name-en'], $_POST['history-en'], $_POST['mission-en'], $_POST['view-en'], $_POST['comission-en']);
            
    //Se realiza la consulta en la BD
    $organizationData = new OrganizationData();
    $result = $organizationData->updateOrganization($organizationEs, $organizationEn);
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

