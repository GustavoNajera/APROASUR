<?php

include './ProductBusiness.php';



$nameES = $_POST['name-modal-es'];
$descriptionES = $_POST['description-modal-es'];
$nameEN = $_POST['name-modal-en'];
$descriptionEN = $_POST['description-modal-en'];
$id = $_POST['idupdate'];
$file = $_FILES['imagenSobreescribir']['name']; // selecccc
$fileBorrar = "../Images/" . $_POST['imagenUpdate'];
$imagen = $_POST['imagenUpdate'];


//comprobamos si ha ocurrido un error.
if (strlen($nameES) > 0 && strlen($descriptionES) > 0 && strlen($nameEN) > 0 && strlen($descriptionEN) > 0) {
    if (strlen($file) > 0) {
        //actualiza base y sobreescribe

        $ruta = "../Images/" . $_FILES['imagenSobreescribir']['name'];

        $resultado = @move_uploaded_file($_FILES["imagenSobreescribir"]["tmp_name"], $ruta);
//        if ($resultado) {

        $productES = new Product($id, $nameES, $descriptionES, basename($_FILES['imagenSobreescribir']['name']), 0);
        $productEN = new Product($id, $nameEN, $descriptionEN, basename($_FILES['imagenSobreescribir']['name']), 0);
        $productBusiness = new productBusiness();

        $resultES = $productBusiness->update($productES, 'aproasur_db', 'user16_aproasur');
        $resultEN = $productBusiness->update($productEN, 'aproasur_db_en', 'en16_aproasur');

        unlink($fileBorrar);
        header("location: ../Presentation/CRUD_Producto.php?result=update");
        
//        }  
//        
    } else {
        //actualiza base
        $productES = new Product($id, $nameES, $descriptionES, $_POST['imagenUpdate'], 0);
        $productEN = new Product($id, $nameEN, $descriptionEN, $_POST['imagenUpdate'], 0);
        $productBusiness = new productBusiness();

        $resultES = $productBusiness->update($productES, 'aproasur_db', 'user16_aproasur');
        $resultEN = $productBusiness->update($productEN, 'aproasur_db_en', 'en16_aproasur');

        //unlink($fileBorrar);
        header("location: ../Presentation/CRUD_Producto.php?result=update");
    }
} else {
    //redicreciona si hay un campo vacio
    header("location: ../Presentation/CRUD_Producto.php?result=empty_field");
}


    