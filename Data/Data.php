<?php

/**
 * Description of PlanData
 */
class Data {
    public $server;
    public $user;
    public $password;
    public $db;
    
    public $connection;
    public $isActive;

    /* constructor */
    public function Data(){
        
        session_start(); 
        //Si la variable lang no existe se pone en español
        if (!isset($_SESSION["lang"])) { 
            $_SESSION["lang"] = 'es';
            $this->isActive = false;
            $this->server = "50.62.209.186";
            $this->user = "user16_aproasur";
            $this->password = "5dhk912";
            $this->db = "aproasur_db";
        } else if (isset($_SESSION["lang"])){
            if($_SESSION["lang"]=='es'){
                $this->isActive = false;
                $this->server = "50.62.209.186";
                $this->user = "user16_aproasur";
                $this->password = "5dhk912";
                $this->db = "aproasur_db";
            } else if ($_SESSION["lang"]=='en'){
                $this->isActive = false;
                $this->server = "50.62.209.186";
                $this->user = "en16_aproasur";
                $this->password = "5dhk912";
                $this->db = "aproasur_db_en";
            }
        }
    }  
}
?>
