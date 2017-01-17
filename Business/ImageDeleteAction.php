<?php

include './GalleryBusiness.php';
$id = $_GET['id'];
$description = $_GET['description'];
//$id2 = "../Images/" . $_GET['path'];

if (strlen($id) > 0 && strlen($description) > 0) {
    $imageBusiness = new galleryBusiness();

    //borrar imagen de inicio o galeria
    //inicio
//     echo 'dd';
//    exit;
    if ($description == 'imagehome') {
        $result = $imageBusiness->deleteBusiness($id, 'aproasur_db', 'user16_aproasur');
      
        $result2 = $imageBusiness->deleteBusiness($id, 'aproasur_db_en', 'en16_aproasur');
//          echo 'dhd';
        $id2 = "../Images/home/" . $_GET['path'];
//             echo 'dhd';
//    exit;
    }
    if ($description == 'ImagePlan') {
        $result = $imageBusiness->deleteBusiness($id, 'aproasur_db', 'user16_aproasur');
        $result2 = $imageBusiness->deleteBusiness($id, 'aproasur_db_en', 'en16_aproasur');
        $id2 = "../Images/Plan/" . $_GET['path'];
    }
//    echo 'dd';
//    exit;
    unlink($id2);
    header("location: ../Presentation/CRUD_Producto.php?result=deleted");
} else {
    //redicreciona si hay un campo vacio
    header("location: ../Presentation/CRUD_Producto.php?result=empty_field");
}
