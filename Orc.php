
<?php


require_once 'Character.php';

Class Orc extends Character {


       private $_type;
       private $_damage;
       private $_name;


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

       public function getName () {
        return $this->_name;
       }

       public function setName (string $name) {
        $this->_name = $name;
       }

      public function __construct($name,$health,$rage,$type) {
        parent::__construct($health, $rage); 
        $this->setType($type);
        $this->setName($name);
        echo 'Un orc est apparu' . "<br>";
        echo "Nom : " . $this->getName() . '<br>';
        echo 'Points de vie : ' . $this->getHealth() . '<br>';
        echo "Type : " . $this->getType() . "<br>";
        echo 'Points de rage : ' . $this->getRage() . '<br>';

      }

      public function attack() {
        $this->setDamage(rand(600,800));
      }
      
}



?>