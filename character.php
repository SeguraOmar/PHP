<?php

class Character {
    private $_health;
    private $_rage;

   
    public function getHealth() {
       return $this->_health;
       
    }

    public function getRage() {

        return $this ->_rage;
    }

    public function setHealth (int $health) {
        $this->_health = $health;
    }

    public function setRage (int $rage) {

        $this->_rage = $rage;
    }

    public function __construct($health, $rage) {

        $this->setHealth($health);
        $this->setRage($rage);

    }



}
?>
