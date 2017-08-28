<?php 
session_start();

if(isset($_POST["straat"]) && isset($_POST["gemeente"]) && isset($_POST["nummer"]) && isset($_POST["postcode"]))
{
    $_SESSION["straat"] = $_POST["straat"];
    $_SESSION["gemeente"] = $_POST["gemeente"];
    $_SESSION["postcode"] = $_POST["postcode"];
    $_SESSION["nummer"] = $_POST["nummer"];
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
    <h1>Overzichtspagina</h1>
    <ul>
        <li>e-mail: <?php echo $_SESSION["e-mail"]?> | <a href="oplossing-sessions.1.php?focus=e-mail">wijzig</a></li>
        <li>nickname: <?php echo $_SESSION["nickname"]?> | <a href="oplossing-sessions.1.php?focus=nickname">wijzig</a></li>
        <li>straat: <?php echo $_SESSION["straat"]?> | <a href="oplossing-sessions.2.php?focus=straat">wijzig</a></li>
        <li>nummer: <?php echo $_SESSION["nummer"]?> | <a href="oplossing-sessions.2.php?focus=nummer">wijzig</a></li>
        <li>gemeente: <?php echo $_SESSION["gemeente"]?> | <a href="oplossing-sessions.2.php?focus=gemeente">wijzig</a></li>
        <li>postcode: <?php echo $_SESSION["postcode"]?> | <a href="oplossing-sessions.2.php?focus=postcode">wijzig</a></li>

    </ul>

</body>
</html>