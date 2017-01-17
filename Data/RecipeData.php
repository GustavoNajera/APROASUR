<?php
    include_once 'Data.php';
    include '../Domain/Recipe.php';
    
class RecipeData extends Data {
    
    public function getRecipesByProduct($idProduct){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $query = "call sp_getRecipesByProduct(".$idProduct.")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);

        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentRecipe = new Recipe($row['id_recipe'], $row['name'],
                    $row['description'], $row['path_image'], $row['id_product']);
            array_push($array, $currentRecipe);
        }
        return $array;
    }
    
}
