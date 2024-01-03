<?php 

require_once 'Hero.php';
$hero = new Hero(100,60,'Link','Master Sword',100,'Bouclier Hylien', 50); 
$hero2 = new Hero(95,72,'Link','Master Sword',110,'Bouclier Hylien', 50); 

require_once 'Orc.php';
$Orc = new Orc(140,110,'Feu',100);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Basics</title>
</head>
<body>
    
<p>Héros</p>

<?php 
$hero->getInfos();
$hero2->getInfos();
$orc->attack();
?>
</body>
</html>