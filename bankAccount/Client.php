<?php

class Client{

    private $name;
    private $lastName;
    private $accountList;

    public function __construct ($name, $lastName){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->accountList = array();
    }

    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastName;
    }
    public function getAccount(){
        return $this->accountList;
    }

   public function createAccount(){
    array_push($this->accountList, new Account()); 
   

   }

    
}