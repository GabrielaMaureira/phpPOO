<?php

class Account{

    private $number;
    private $amount;

    public function __construct(){
        $this->number = rand(1,100);
        $this->amount = 0;
    }

    public function getNumber(){
        return $this->number;
    } 
    public function getAmount(){
        return $this->amount;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }
    
    public function deposit($amount){
        return $this->amount = $this->amount + $amount;
    }
    public function withdraw($amount){
        if($this->amount <= 0){
            echo "Not enough money";
        }else{
            $this->amount = $this->amount - $amount;
        }
    }
}