<?php 

require_once 'Hero.php';
$hero = new Hero(100,60,'Link','Master Sword',100,'Bouclier Hylien', 50); var_dump($hero);

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
?>
</body>
</html>