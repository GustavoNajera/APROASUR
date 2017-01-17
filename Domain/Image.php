<?php

/**
 * Description of Image
 *
 * @author gollo
 */
class Image {
    public $idImage;
    public $path;
    public $description;
    public $idOrganization;
    
    public function Image($idImage, $path, $description,$idOrganization){
        $this->idImage = $idImage;
        $this->path = $path;
        $this->description = $description;
        $this->idOrganization = $idOrganization;
    }
}
