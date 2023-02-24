<?php

class Stadistics{

    private $players;

    public function __construct ($players){
        $this->players = $players;
    }

    public function getPlayers(){
        return $this->players;
    }

    public function topScorer(){
        $maximum = 0;
        for($i=0; $i<count($this->players); $i++){
            if($this->players[$i]->getTotalGoals() > $maximum){
                $maximum = $this->players[$i]->getTotalGoals();
                $topScorer = $this->players[$i]->getName();
            }
        }
        return $topScorer;
    }

    public function fewerFoulsMade(){
        $minimum = 20;
        for($i=0; $i<count($this->players); $i++){
            if($this->players[$i]->getFoulsMade() < $minimum){
                $minimum = $this->players[$i]->getFoulsMade();
                $fewerFoulsMade = $this->players[$i]->getName();
            }
        }
        return $fewerFoulsMade;
    }

    
}