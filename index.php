<?php 
require_once 'Character.php';
require_once 'Hero.php';
require_once 'Orc.php';

$hero = new Hero(1000,0,'Paladin','Epée à une main',250,'Rempart de scarabée doré', 450); 


$Orc = new Orc('Guldar',2000,0,'Feu');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Basics</title>
</head>
<body>
    


<?php 
$hero->getInfos();
// echo $hero->getName() .  " Attaque " . $Orc->getName() . " de " .  $hero->getWeaponDamage() . " dégâts " . "<br>";
//  echo "Il reste " .  $Orc->getHealth() - $hero->getWeaponDamage() . " Points de vie à " . $Orc->getName() . "<br>"; 
 

//  $Orc->attack();
// echo $Orc->getName() . " Attaque " . $hero->getName() . " de " . $Orc->getDamage() . " dégâts " . "<br>";
// $hero->beAttacked($Orc->getDamage());
// echo " Il reste " . $hero->getHealth() . " Points de vie à " . $hero->getName() . "<br>";



while ($hero->getHealth() > 0 && $Orc->getHealth() > 0)  {
echo $hero->getName() .  " Attaque " . $Orc->getName() . " de " .  $hero->getWeaponDamage() . " dégâts " . "<br>";
 echo "Il reste " .  $Orc->getHealth() - $hero->getWeaponDamage() . " Points de vie à " . $Orc->getName() . "<br>"; 
 

 $Orc->attack();
echo $Orc->getName() . " Attaque " . $hero->getName() . " de " . $Orc->getDamage() . " dégâts " . "<br>";
$hero->beAttacked($Orc->getDamage());
echo " Il reste " . $hero->getHealth() . " Points de vie à " . $hero->getName() . "<br>";
}

?>

</body>
</html>