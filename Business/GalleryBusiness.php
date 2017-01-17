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
   
}
