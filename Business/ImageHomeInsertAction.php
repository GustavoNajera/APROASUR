<?php

include './GalleryBusiness.php';  // tipo quiere decir si es una imagen de inicio o galeria
$file = $_FILES['imagen']['name'];

//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0) {
//    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 100kb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    if (in_array($_FILES['imagen']['type'], $permitidos)) {


        $ruta = "../Images/home/" . $_FILES['imagen']['name'];

        if (!file_exists($ruta)) {
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
            if ($resultado) {
                $image = new Image(0, $ruta, 'imagehome', 1);
                $galleryBusiness = new galleryBusiness();

                $galleryBusiness->insertBusiness($image, 'user16_aproasur', 'aproasur_db');
                $galleryBusiness->insertBusiness($image, 'en16_aproasur', 'aproasur_db_en');

                header("location: ../Presentation/CRUD_Producto.php?result=success");
            } else {
                echo "ocurrio un error al mover el archivo..";
            }
        } else {
            echo $_FILES['imagen']['name'] . ", este archivo existe";
        }
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
    }
}

