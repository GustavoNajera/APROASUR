<?php

/**
 * Description of Program
 *
 * @author gollo
 */
class Program {
    public $idProgram;
    public $name;
    public $description;
    public $stage;
    public $idPlan;
    
    public function Program($idProgram, $name, $description, $stage){
        $this->idProgram = $idProgram;
        $this->name = $name;
        $this->description = $description;
        $this->stage = $stage;
    }
    
}
