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
echo $hero->getName() .  " Attaque " . $Orc->getName();

?>

</body>
</html>