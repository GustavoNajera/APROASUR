<?php
include '../Data/OrganizationData.php';

class OrganizationBusiness {

    public $organizationData;

    public function OrganizationBusiness() {
        $this->organizationData = new OrganizationData();
    }
    public function getOrganization() {
         $result = $this->organizationData->getOrganization();
         return $result;
    }
    
    public function getOrganizationEn() {
         $result = $this->organizationData->getOrganizationEn();
         return $result;
    }

}
