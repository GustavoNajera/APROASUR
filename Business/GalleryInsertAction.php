<?php

include './GalleryBusiness.php';
$description = $_POST['description'];
$descriptionEn = $_POST['descriptionEn'];
$file = $_FILES['imagen']['name'];

//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0) {
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 100kb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    //$limite_kb = 100;

    if (in_array($_FILES['imagen']['type'], $permitidos)) {
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta = "../Images/Gallery/" . $_FILES['imagen']['name'];
        //comprovamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
        if (!file_exists($ruta)) {
            //aqui movemos el archivo desde la ruta temporal a nuestra ruta
            //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
            //almacenara true o false
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
            if ($resultado) {
                //echo "el archivo ha sido movido exitosamente";
                if (strlen($description) > 0 && strlen($descriptionEn)) {

                    //$path = "../Images/Gallery/" . $file;
                    $imageES = new Image(0, $ruta, $description, 1);
                    $imageEN = new Image(0, $ruta, $descriptionEn, 1);
                    $galleryBusiness = new GalleryBusiness();

                    $resultES = $galleryBusiness->insertGalleryDB($imageES,'aproasur_db', 'user16_aproasur');
                    $resultEN = $galleryBusiness->insertGalleryDB($imageEN,'aproasur_db_en', 'en16_aproasur');
                    
                    if ($resultES != 9) {
                        header("location: ../Presentation/CRUD_Producto.php?result=esdb");
                    } else if ($resultEN != 9) {
                        header("location: ../Presentation/CRUD_Producto.php?result=endb");
                    } else {
                        header("location: ../Presentation/CRUD_Producto.php?result=success");
                    }
                } else {
                    //redicreciona si hay un campo vacio
                    header("location: ../Presentation/CRUD_Producto.php?result=empty_field");
                }
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

