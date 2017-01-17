<?php

class Organization {

    public $idOrganization;
    public $name;
    public $history;
    public $mission;
    public $view;
    public $comission;

    public function Organization($idOrganization, $name, $history, $mission, $view, $comission) {
        $this->idOrganization = $idOrganization;
        $this->name = $name;
        $this->history = $history;
        $this->mission = $mission;
        $this->view = $view;
        $this->comission = $comission;
    }

}
