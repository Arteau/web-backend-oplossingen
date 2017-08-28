<?php 
session_start();

// if(isset($_GET["destroy"]))
// {
//     session_destroy();
// }

/*
    misschien is het beter om de session te checken ipv de post. Meh
*/
if(isset($_POST["e-mail"]) && isset($_POST["nickname"]))
{
    $_SESSION["nickname"] = $_POST["nickname"];
    $_SESSION["e-mail"] = $_POST["e-mail"];
}

$GLOBALS["varArray"] = array(
    "gemeente" => "",
    "nummer" => "",
    "straat" => "",
    "postcode" => ""
);

function checkSession($name)
{
    if(isset($_SESSION[$name]))
    {
        $GLOBALS["varArray"][$name] = $_SESSION[$name];
    }
}

foreach($GLOBALS["varArray"] as $item => $key)
{
    checkSession($item);
}


// $gemeente="";
// if(isset($_SESSION["straat"]))
// {
//     $straat = $_SESSION["straat"];
// }
// $nummmer="";
// if(isset($_SESSION["nummer"]))
// {
//     $nummer = $_SESSION["nummer"];
// }
// $gemeente="";
// if(isset($_SESSION["gemeente"]))
// {
//     $gemeente = $_SESSION["gemeente"];
// }
// $postcode="";
// if(isset($_SESSION["postcode"]))
// {
//     $postcode = $_SESSION["postcode"];
// }
function focusHelper($name)
{
    if(isset($_GET["focus"]) && $_GET["focus"] == $name)
    {
        return "autofocus";
    }
    else
    {
        return "";
    }
}

function makeFormLine($name){
    echo "<label for=".$name.">".$name."</label><input type='text' name=".$name." value=".$GLOBALS["varArray"][$name]." ".focusHelper($name)." ></input><br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>oplossing sessions</title>
</head>
<body>
    <h1>Registratiegegevens</h1>
    <ul>
        <li>e-mail: <?php echo $_SESSION["e-mail"]; ?></li>
        <li>nickname: <?php echo $_SESSION["nickname"]; ?></li>
    </ul>

    <form action="oplossing-sessions.3.php" method="post">
    <h1>Deel 2: adres</h1>
        <!-- <label for="straat">straat</label><input type="text" name="straat"></input>
        <br>
        <label for="nummer">nummer</label><input type="text" name="nummer"></input>
        <br>
        <label for="gemeente">gemeente</label><input type="text" name="gemeente"></input>
        <br>
        <label for="postcode">postcode</label><input type="text" name="postcode"></input>
        <br> -->
        <?php makeFormLine("straat") ?>
        <?php makeFormLine("nummer") ?>
        <?php makeFormLine("gemeente") ?>
        <?php makeFormLine("postcode") ?> <!-- zou ook met een foreach gaan... -->
        <button type="submit">Volgende</button>
    </form>
    <!-- <a href="oplossing-sessions.2.php?destroy=true">destroy</a> -->
</body>
</html>