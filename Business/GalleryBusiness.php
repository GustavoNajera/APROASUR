<?php

include '../Data/GalleryData.php';

class GalleryBusiness{
    public $GalleryData;
    
    public function GalleryBusiness(){
        $this->GalleryData = new GalleryData();
    }
    //todas las de galeria
    public function getAllImageBusiness() {
        return $this->GalleryData->getAllImage();
    }
    //todas las de inicio

     public function getHomeImagesBusiness() {
        return $this->GalleryData->getAllImageHome();
    }
    
     public function deleteBusiness($id,$db,$user) {
        return $this->GalleryData->delete($id,$db,$user);
    }
      public function insertBusiness($image,$user,$db) {
        return $this->GalleryData->insert($image,$user,$db);
    }

    /*****************************************************/
    public function getImagesGalleryBusiness() {
        return $this->GalleryData->getImagesGallery();
    }
    
    public function getImagesGalleryBusinessEn() {
        return $this->GalleryData->getImagesGalleryEn();
    }
    
    public function insertGalleryDB($image, $bd, $user) {
        $result = $this->GalleryData->insertGalleryDB($image, $bd, $user);
        return $result;
    }
    
    public function updateGallery($db, $user, $description, $id){
        return $this->GalleryData->updateGallery($db, $user,$description, $id);
    }
    
    public function deleteGallery($db, $user, $id){
        return $this->GalleryData->deleteGallery($db, $user, $id);
    }
    
    /*****************************************************/
}


   
}
