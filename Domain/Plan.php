<?php

/**
 * Description of Plan
 *
 * @author gollo
 */
class Plan {
    public $idPlan;
    public $name;
    public $objective;
    public $description;
    public $idOrganization;
    
    public function Plan($idPlan, $name, $objective, $description, $idOrganization){
        $this->idPlan = $idPlan;
        $this->name = $name;
        $this->objective = $objective;
        $this->description = $description;
        $this->idOrganization = $idOrganization;
    }
}
