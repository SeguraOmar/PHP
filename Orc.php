
<?php


require_once 'Character.php';

Class Orc extends Character {


       private $_type;
       private $_damage;


       public function getType () {
        return $this->_type;
       }

       public function setType (string $type) {

        $this->_type = $type;
       }

       public function getDamage() {
        return $this->_damage;
       }

       public function setDamage (int $damage) {
        $this->_damage = $damage;
       }

      public function __construct($health,$rage,$type,$damage) {
        parent::__construct($health, $rage); 
        $this->setType($type);
        $this->setDamage($damage);

        echo 'Points de vie : ' . $this->getHealth() . '<br>';
        echo "Dégats :" . $this->getDamage() . "<br>" ;
        echo "Type : " . $this->getType() . "<br>";
        echo 'Points de rage : ' . $this->getRage();


        public function attack() {
            $randomDamage = rand(600, 800);
            $this->setDamage($randomDamage);
            echo 'attaque dégats infligé à : ' . $this->getDamage() . '<br>';
        }
      }

      
}



?>