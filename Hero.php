<?php 


require_once 'Character.php';


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
    echo 'Points de vie : ' . $this->getHealth() . '<br>';
    echo 'Points de rage : ' . $this->getRage() . '<br>';
    echo 'Nom : ' . $this->getName() . '<br>';
    echo "Nom d'arme : " . $this->getWeaponName() . '<br>';
    echo "Dégâts de l'arme : " . $this->getWeaponDamage() . '<br>';
    echo 'Bouclier : ' . $this->getShieldName() . '<br>';
    echo 'Valeur du bouclier : ' . $this->getShieldValue() . '<br>';
}


public function attack($target)
       {
           // Calculer les dégâts infligés en prenant en compte la rage et le bouclier
           $Damage = max(0, $this->getWeaponDamage() - $target->getShieldValue());
           // Utilise max(0, ...) pour éviter les dégâts négatifs, en soustrayant la valeur du bouclier

           // Réduire la rage du héros après l'attaque
           $this->setRage(max(0, $this->getRage() - 20));
           // Utilise max(0, ...) pour éviter un niveau de rage négatif, en soustrayant 20 points de rage

           // Infliger les dégâts à la cible
           $target->takeDamage($Damage);

           // Afficher le résultat de l'attaque
           echo $this->getName() . " attaque " . $target->getName() . " et inflige " . $Damage . " points de dégâts!<br>";
           // Affiche un message indiquant qui attaque qui et le nombre de points de dégâts infligés
       }

}
?>