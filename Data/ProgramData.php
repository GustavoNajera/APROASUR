<?php

include_once 'Data.php';
include '../Domain/Program.php';

/**
 * Description of ProgramData
 *
 * @author mm
 */
class ProgramData extends Data {
    
    public function getInformationProgramI(){        
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationProgramI");        
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentData = new Program($row['id_program'], $row['name'], $row['description'], $row['stage']);
            array_push($array, $currentData);
        }        
        return $array; 
        
    }
    public function getInformationProgramII(){        
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getInformationProgramII");        
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentData = new Program($row['id_program'], $row['name'], $row['description'], $row['stage']);
            array_push($array, $currentData);
        }        
        return $array; 
        
    }
    
    public function getImagesProgram(){
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call getImagesProgram");        
        $array = [];
        while($row = mysqli_fetch_array($result)){
            array_push($array, $row['path']);
        }        
        return $array;
    }
    
    
}
