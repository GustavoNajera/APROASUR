<?php

include './GalleryBusiness.php';

$id = $_GET['id'];
//echo $id;
$galleryBusiness = new GalleryBusiness();
$galleryBusiness->deleteGallery("aproasur_db", "user16_aproasur", $id);
$galleryBusiness->deleteGallery("aproasur_db_en", "en16_aproasur", $id);


header("location: ../Presentation/CRUD_Producto.php?result=delete");



