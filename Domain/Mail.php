<?php

/**
 * Description of Mail
 *
 * @author gollo
 */
class Mail {
    public $idOrganization;
    public  $mail;
    
    public function Mail($idOrganization, $mail){
        $this->idOrganization = $idOrganization;
        $this->mail = $mail;
    }
}
