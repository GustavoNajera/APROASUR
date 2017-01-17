<?php

include '../Data/RecipeData.php';
class RecipeBusiness {
    /* atributos */

    public $recipeData;

    public function RecipeBusiness() {
      
        $this->recipeData = new RecipeData();
//         echo 'ff';
//        exit;
    }

    public function getRecipesByProduct($idProduct) {
        $result = $this->recipeData->getRecipesByProduct($idProduct);
        return $result;
    }

}
