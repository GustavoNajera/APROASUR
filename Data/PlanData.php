<?php
include_once 'Data.php';
include '../Domain/Plan.php';

/**
 * Description of PlanData
 *
 * @author mm
 */
class PlanData extends Data{
   
    
    public function getNamePlan(){        
        $conn =  new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getNamePlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['name']); 
        return $result;        
    }
    
    public function getInformationPlan(){        
        $conn =  new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationPlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['description']); 
        return $result;    
    }
    
    /*Obtiene el objeto completo de plan*/
    public function getPlanEs(){
        $conn =  new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationPlan");
        $row = mysqli_fetch_array($result);
        /*$idPlan, $name, $objective, $description, $idOrganization*/
        $result = new Plan($row['idPlan'], $row['name'], $row['objective'], $row['description'], $row['idOrganization']);
        return $result; 
    }
    
    public function getPlanEn(){ 
        $serverEn  = "50.62.209.186";;
        $userEn = "en16_aproasur";
        $passwordEn = "5dhk912";
        $dbEn = "aproasur_db_en";
        $conn = new mysqli($serverEn, $userEn, $passwordEn, $dbEn);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationPlan");
        $row = mysqli_fetch_array($result);
        $result = new Plan($row['idPlan'], $row['name'], $row['objective'], $row['description'], $row['idOrganization']);
        return $result;    
    }
    
    public function getInformationPlanEn(){ 
        $serverEn  = "50.62.209.186";;
        $userEn = "en16_aproasur";
        $passwordEn = "5dhk912";;
        $dbEn = "aproasur_db_en";;
        $conn = new mysqli($serverEn, $userEn, $passwordEn, $dbEn);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationPlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['description']); 
        return $result;    
    }
    
    public function updatePlan($planEs, $planEn){
        try {
            /*Se actualiza en la BD ingles*/
            $serverEn  = "50.62.209.186";
            $userEn = "en16_aproasur";
            $passwordEn = "5dhk912";
            $dbEn = "aproasur_db_en";
            $conn = new mysqli($serverEn, $userEn, $passwordEn, $dbEn);
            $conn->set_charset('utf8');
            $result = mysqli_query($conn, "call updatePlan('". $planEn->name."','".
                    $planEn->objective."','". $planEn->description."',". $planEn->idOrganization.",".$planEn->idPlan.")");
            
            /*Se actualiza en la BD español*/
            $serverEs  = "50.62.209.186";
            $userEs = "user16_aproasur";
            $passwordEs = "5dhk912";
            $dbEs = "aproasur_db";
            $connEs = new mysqli($serverEs, $userEs, $passwordEs, $dbEs);
            $connEs->set_charset('utf8');
            $resultEs = mysqli_query($connEs, "call updatePlan('". $planEs->name."','".
                    $planEs->objective."','". $planEs->description."',". $planEs->idOrganization.",".$planEs->idPlan.")");
            
            return "Success"; //Si llega a este punto todo se ejecuto
        } catch (Exception $ex) {
            return "ERORR: \n". $ex;
        }
    }
    
}
