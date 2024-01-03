<?php 


require_once 'Character.php';
require_once 'index.php';


class Hero extends Character {

    private $_name;
    private $_weaponName;
    private $_weaponDamage;
    private $_shieldName;
    private $_shieldValue;


public function getName() {

  return $this->_name;

}

public function setName(string $name) {

    $this->_name = $name;
} 

public function getWeaponName() {
    return $this->_weaponName;
}

public function setWeaponName(string $weaponName) {
     $this->_weaponName = $weaponName;
}

public function getWeaponDamage() {
    return $this->_weaponDamage;
}

public function setWeaponDamage(int $weaponDamage) {
     $this->_weaponDamage = $weaponDamage;
}

public function getShieldName() {

return $this->_shieldName;

 }

 public function setShieldName(string $shieldName) {
     $this->_shieldName = $shieldName;
 }

 public function getShieldValue() {
    return $this->_shieldValue;
 }

 public function setShieldValue(int $shieldValue) {
     $this->_shieldValue = $shieldValue;
 }

 public function __construct($health,$rage, $name, $weaponName, $weaponDamage, $shieldName, $shieldValue)
 {
     parent::__construct($health, $rage); 
     $this->setName($name);
     $this->setWeaponName($weaponName);
     $this->setWeaponDamage($weaponDamage);
     $this->setShieldName($shieldName);
     $this->setShieldValue($shieldValue); 


 }

 public function getInfos() {
    echo "Un héros vient d'être crée." . '<br>';
    echo 'Points de vie : ' . $this->getHealth() . '<br>';
    echo 'Points de rage : ' . $this->getRage() . '<br>';
    echo 'Nom : ' . $this->getName() . '<br>';
    echo "Nom d'arme : " . $this->getWeaponName() . '<br>';
    echo "Dégâts de l'arme : " . $this->getWeaponDamage() . '<br>';
    echo 'Bouclier : ' . $this->getShieldName() . '<br>';
    echo 'Valeur du bouclier : ' . $this->getShieldValue() . '<br>';
}

public function beAttacked($damage) {

    $this->setHealth(($this->getHealth + $this->getShieldValue()) - $damage);
}

}
?>