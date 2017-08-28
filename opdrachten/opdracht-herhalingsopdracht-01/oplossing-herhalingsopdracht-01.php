<?php
$cursusFlag = false;
$opdrachtenFlag = false;
$voorbeeldenFlag = false;
$zoekFlag = false;
$zoekTerm = "";
// echo realpath("/");

if(isset($_GET["link"]))
{
    switch($_GET["link"])
    {
        case "cursus":
            $cursusFlag = true;
            break;
        case "opdrachten":
            $opdrachtenFlag = true;
            break;
        case "voorbeelden":
            $voorbeeldenFlag = true;
            break;
    }

    // if($_GET["link"] == "cursus")
    // {
    //     $cursusFlag = true;
    // }
    // if($_GET["link"] == "opdrachten")
    // {
    //     $opdrachtenFlag = true;
    // }
    // if($_GET["link"] == "voorbeelden")
    // {
    //     $voorbeeldenFlag = true;
    // }
    // if($_GET["link"] == "zoek")
    // {
    //     $searchFlag = true;
    //     $searchTerm = $_GET["zoek"];
    // }
    
}

if(isset($_GET["zoek"]))
{
    $zoekFlag = true;
    $zoekTerm = $_GET["zoek"];
}

function searchFiles($input){
     $query = $input;
    //echo $query;
    $list = readOpdrachten();
    foreach(readVoorbeelden() as $E)
    {
        array_push ($list, $E);
    }
    $rv=[];
    foreach($list as $elem)
    {
      //  echo $elem;
        if(strpos($elem,$query)!==false){
            array_push($rv,$elem);
        }
    }
    return $rv;
//dees werkte nie    return array_filter($list,function($f){return strpos($f,$query)!==false;});
}

function showList($list){
    if(!isset($list))
    {
        return;
    }

    echo "<ul>";
    foreach($list as $item)
    {
        echo "<li>".$item."</li>";
    }
    echo "</ul>";    
}
function filterPhpOnly($list){
    return array_filter($list,function($f){return strpos($f,'.php')!=false;});
}
function readOpdrachten(){
    return readList("../../cursus/public/cursus/opdrachten");
}

function readVoorbeelden(){
    return readList("../../cursus/public/cursus/voorbeelden");
}

function readList($inputPath){
    $path = realpath($inputPath);
    $rv=[];
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
    {
            array_push ($rv,"$filename\n");
    }
    return $rv;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>Herhalingsopdracht 01</title>
</head>
<body>
    
    <strong><h1>Indexpagina</h1></strong>
    <hr>
    <ul>
        <li><a href="oplossing-herhalingsopdracht-01.php?link=cursus">Cursus</a></li>
        <li><a href="oplossing-herhalingsopdracht-01.php?link=voorbeelden">Voorbeelden</a></li>
        <li><a href="oplossing-herhalingsopdracht-01.php?link=opdrachten">Opdrachten</a></li>
    </ul>
    <form action="oplossing-herhalingsopdracht-01.php" method="get"><label for="zoek">Zoek naar: </label><input type="text" name="zoek"></input><button type="submit">verzenden</button></form>

<?php if($cursusFlag): ?><h1>Inhoud</h1><hr><iframe src="http://web-backend.local/cursus/web-backend-cursus.pdf" frameborder="1" width="1000" height="750"></iframe><?php endif; ?>
<?php if($opdrachtenFlag): showlist(filterPhpOnly(readOpdrachten())) ?><?php endif; ?>
<?php if($voorbeeldenFlag): showlist(filterPhpOnly(readVoorbeelden())) ?><?php endif; ?>
<?php 
if($zoekFlag)
{
    $foundFiles = searchFiles($zoekTerm);
    if(count($foundFiles) == 0)
    {
        echo "<h1>Geen zoekresultaten gevonden</h1><hr>";
    }
    else
    {
        echo "<h1>U zocht naar: ".$zoekTerm."</h1><br>";
        showlist($foundFiles);
    }


    
}

 ?>

</body>
</html>