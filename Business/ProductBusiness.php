<?php

include '../Data/ProductData.php';

class ProductBusiness {

    public $productData;

    public function ProductBusiness() {

        $this->productData = new ProductData();
    }

    public function getAllProducts() {
        $result = $this->productData->getAllProducts();
        return $result;
    }

    public function getAll($bd, $user) {
        $result = $this->productData->getAll($bd, $user);
        return $result;
    }

    public function getProduct($id,$bd, $user) {
        $result = $this->productData->getProduct($id,$bd, $user);
        return $result;
    }
    
    public function insert($product, $bd, $user) {
        $result = $this->productData->insert($product, $bd, $user);
        return $result;
    }
    public function delete($id, $bd, $user) {
        $result = $this->productData->delete($id, $bd, $user);
        return $result;
    }
    public function update($product,$bd, $user) {
        $result = $this->productData->update($product,$bd, $user);
        return $result;
    }
}
