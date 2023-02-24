<?php

enum Position{
    case Goalkeeper;
    case Defense;
    case Midfielder;
    case Striker;
}

class Player{
    private $name;
    private $age;
    private $position;
    private $totalGoals;
    private $foulsReceived;
    private $foulsMade;
    
    public function __construct($name, $age, Position $position){
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
        $this->totalGoals = rand(0, 20);
        $this->foulsReceived = rand(0,20);
        $this->foulsMade = rand(0,20);
    }

    public function getTotalGoals (){
        return $this->totalGoals;
    }
    public function getFoulsReceived(){
        return $this->foulsReceived;
    }
    public function getFoulsMade(){
        return $this->foulsMade;
    }
    public function getName(){
        return $this->name;
    }
    
}