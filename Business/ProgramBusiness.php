<?php


include '../Data/ProgramData.php';
/**
 * Description of ProgramBusiness
 *
 * @author mm
 */
class ProgramBusiness {
   
    
    private $programData;
    
    public function ProgramBusiness(){
        
        $this->programData = new ProgramData();
    }
    
    public function getInformationProgramI(){
        return $this->programData->getInformationProgramI();
    }
    public function getInformationProgramII(){
        return $this->programData->getInformationProgramII();
    }
    public function getImagesProgram(){
        return $this->programData->getImagesProgram();                
    }
    
}
