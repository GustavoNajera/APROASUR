<?php

/**
 * Description of Recipe
 *
 * @author gollo
 */
class Recipe {
    public $idRecipe;
    public $name;
    public $description;
    public $pathImage;
    public $idProduct;
    
    public function Recipe($idRecipe, $name, $description, $pathImage, $idProduct){
        $this->idRecipe = $idRecipe;
        $this->name = $name;
        $this->description = $description;
        $this->pathImage = $pathImage;
        $this->idProduct = $idProduct;
    }
}
