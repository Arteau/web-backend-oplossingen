<?php 
    spl_autoload_register(function ($name) {
        include 'classes/'.$name.'.php';
    });
    $Perc = new Percent(150,100);
    // echo $Perc->relative;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>Classes Begin</title>
</head>
<body>
    <h2>Hoe staat 150 in verhouding tot 100</h2>
<table>
    <tr>
        <td>Relatief</td>
        <td><?= $Perc->relative ?></td>
    </tr>
    <tr>
        <td>Procentueel</td>
        <td><?= $Perc->hundred ?></td>
    </tr>
    <tr>
        <td>Nominaal</td>
        <td><?= $Perc->nominal ?></td>
    </tr>

</table>
</body>
</html>

