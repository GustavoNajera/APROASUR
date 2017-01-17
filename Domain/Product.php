<?php

/**
 * Description of Product
 *
 * @author gollo
 */
class Product {
    public $idProduct;
    public $name;
    public $description;
    public $pathImage;
    public $idOrganization;
    
    public function Product($idProduct, $name, $description, $pathImage, $idOrganization){
        $this->idProduct = $idProduct;
        $this->name = $name;
        $this->description = $description;
        $this->pathImage = $pathImage;
        $this->idOrganization = $idOrganization;
    }
    
    
}
