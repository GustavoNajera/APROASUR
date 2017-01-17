<?php

include './ProductBusiness.php';
$id = $_POST['id'];
$id2 = "../Images/" . $_POST['id2'];
echo 'aa ' . $id2;
if (strlen($id) > 0) {
    $productBusiness = new productBusiness();

//    $result = $productBusiness->delete($id, 'aproasur_db', 'root');
//    $result2 = $productBusiness->delete($id, 'aproasur_db_en', 'root');
    //consultar nombre de imagen y borrar de la carpeta..........


    $result = $productBusiness->delete($id, 'aproasur_db', 'user16_aproasur');
    $result2 = $productBusiness->delete($id, 'aproasur_db_en', 'en16_aproasur');

//    
//     $resultES = $productBusiness->insert($productES, 'aproasur_db', 'user16_aproasur');
//    $resultEN = $productBusiness->insert($productES, 'aproasur_db_en', 'en16_aproasur');
//  
//    
//    

    unlink($id2);

    if ($result == 5 && $result2 == 5) {
        header("location: ../Presentation/CRUD_Producto.php?result=deleted");
    } else {
        header("location: ../Presentation/CRUD_Producto.php?result=ondeleted");
    }
} else {
    //redicreciona si hay un campo vacio
    header("location: ../Presentation/CRUD_Producto.php?result=empty_field");
}
