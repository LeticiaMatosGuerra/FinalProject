<?php

class User {

    private int $userId;
    private string $userName;
    private string $email;
    private string $password;
    private string $avatar;

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    
     function verifyPassword(string $passwordToVerify) : bool {
       
        $equal = false;

        if(password_verify($passwordToVerify,$this->getPassword())){
            
            $equal = true;
        } else {
            
            $equal = false;
        }
        
        return $equal;
    }

}