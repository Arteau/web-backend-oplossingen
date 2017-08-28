<?php 
session_start();

$email = "";
$nickname = "";

if(isset($_SESSION["e-mail"]))
{
    $email = $_SESSION["e-mail"];
}
if(isset($_SESSION["nickname"]))
{
    $nickname = $_SESSION["nickname"];
}

function focusHelper($name) //zou ook met post kunnen
{
    if(isset($_GET["focus"]) && $_GET["focus"] == $name)
    {
        echo "autofocus";
    }
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
    <form action="oplossing-sessions.2.php" method="post">
        <h1>Deel 1: registratiegegevens</h1>
        <label for="e-mail">e-mail</label><input type="text" name="e-mail" value=<?php echo $email; ?> <?php focusHelper("e-mail"); ?>></input>
        <br>
        <label for="nickname">nickname</label><input type="text" name="nickname" value=<?php echo $nickname; ?> <?php focusHelper("nickname"); ?>></input>
        <br>
        <button type="submit">Volgende</button>
    </form>
</body>
</html>