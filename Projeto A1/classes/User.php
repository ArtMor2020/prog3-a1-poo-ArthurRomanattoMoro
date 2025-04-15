<?php

class User { 
    private $name = '';
    private $email = '';
    private $password = '';

    public function __construct($name, $email, $password) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
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
}