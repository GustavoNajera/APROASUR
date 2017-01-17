<?php

include '../data/LoginData.php';

class LoginBusiness {

    private $loginData;

    public function LoginBusiness() {
        $this->loginData = new LoginData();
    }
    public function isUser($email,$password) {
        $result = $this->loginData->isUser($email,$password);
        return $result;
    }
}