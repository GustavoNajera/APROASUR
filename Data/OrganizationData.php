<?php

include_once 'Data.php';
include '../Domain/Organization.php';

class OrganizationData extends Data {

    public function getOrganization() {

        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call aproasur_sp_get_organization");
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        $organization = new Organization($row['id_organization'], $row['name'], $row['history'], $row['mission'], $row['view'], $row['comission']);
        return $organization;
    }
    
    public function getOrganizationEn() {
        
        $serverEn  = "50.62.209.186";;
        $userEn = "en16_aproasur";
        $passwordEn = "5dhk912";;
        $dbEn = "aproasur_db_en";;
        $conn = new mysqli($serverEn, $userEn, $passwordEn, $dbEn);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call aproasur_sp_get_organization");
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        $organization = new Organization($row['id_organization'], $row['name'], $row['history'], $row['mission'], $row['view'], $row['comission']);
        return $organization;
    }
    
    public function updateOrganization($organizationEs, $organizationEn){
        try {
            /*Se actualiza en la BD ingles*/
            $serverEn  = "50.62.209.186";
            $userEn = "en16_aproasur";
            $passwordEn = "5dhk912";
            $dbEn = "aproasur_db_en";
            $conn = new mysqli($serverEn, $userEn, $passwordEn, $dbEn);
            $conn->set_charset('utf8');
            $result = mysqli_query($conn, "call update_organization('". $organizationEn->name .
                    "','".$organizationEn->history."','".$organizationEn->mission."','".$organizationEn->view.
                    "','".$organizationEn->comission."',".$organizationEn->idOrganization.")");
            
            /*Se actualiza en la BD español*/
            $serverEs  = "50.62.209.186";
            $userEs = "user16_aproasur";
            $passwordEs = "5dhk912";
            $dbEs = "aproasur_db";
            $connEs = new mysqli($serverEs, $userEs, $passwordEs, $dbEs);/*$idOrganization, $name, $history, $mission, $view, $comission*/
            $connEs->set_charset('utf8');
            $resultEs = mysqli_query($connEs, "call update_organization('". $organizationEs->name .
                    "','".$organizationEs->history."','".$organizationEs->mission."','".$organizationEs->view.
                    "','".$organizationEs->comission."',".$organizationEs->idOrganization.")");
            
            return "Success"; //Si llega a este punto todo se ejecuto
        } catch (Exception $ex) {
            return "ERORR: \n". $ex;
        }
    }
}
