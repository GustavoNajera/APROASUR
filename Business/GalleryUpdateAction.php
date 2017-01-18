<?php

include './GalleryBusiness.php';

$descripcion = $_POST['description'];
$descripcionEn = $_POST['descriptionEn'];
$id = $_POST['id'];
//$id = 36;
//echo $id . " - " . $descripcion . " - ".$descripcionEn;
$galleryBusiness = new GalleryBusiness();
$galleryBusiness->updateGallery("aproasur_db", "user16_aproasur", $descripcion, $id);
$galleryBusiness->updateGallery("aproasur_db_en", "en16_aproasur", $descripcionEn, $id);

header("location: ../Presentation/CRUD_Producto.php?result=update");



