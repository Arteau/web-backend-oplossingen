<?php 
spl_autoload_register(function ($name) {
    include 'classes/'.$name.'.php';
});

$Animal1 = new Lion("Dieter", "male", 20000000, "Tovenaar");
$Animal2 = new Zebra("Arteau", "male", 3000000, "Rogue");
$Animal3 = new Animal("Pepito", "female", 2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>Animal class app</title>
</head>
<body>
    <p> <?= $Animal1->printInfo(); ?> </p>
    <p> <?= $Animal2->printInfo(); ?> </p>
    <p> <?= $Animal3->printInfo(); ?> </p>
    <p> <?php $Animal3->changeHealth(100); ?> </p>
    <p>100 levenspunten erbij voor <?= $Animal3->getName(); ?>.</p>
    <p> <?= $Animal3->printInfo(); ?> </p>
    
</body>
</html>