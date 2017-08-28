<?php 


$timestamp = mktime(22,35,25,1,21,1904);
// echo $timestamp;

$newDateFormat = date("d F Y, g:i:s a", $timestamp);
// $newDateFormat = strftime("  %d %B %G, %I:%M:%S", $timestamp;

// echo "<hr>";
echo $newDateFormat;

setlocale(LC_ALL, 'nld_nld');

$newDateFormat = strftime("  %d %B %G, %I:%M:%S ", $timestamp).date("a",$timestamp); 
//%P is stuk, blijkbaar een meer voorkomend probleem https://stackoverflow.com/questions/6852947/strftime-doesnt-show-pm-or-am
echo "<hr>";
echo $newDateFormat;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>oplossing date</title>
</head>
<body>
    
</body>
</html>