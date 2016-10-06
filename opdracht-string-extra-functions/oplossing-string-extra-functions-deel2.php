<?php
    $fruit = "ananas";
    $posLaatsteA = strrpos($fruit, "a");
    $uppercaseFruit = strtoupper($fruit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing String Extra Functions: deel 2</title>
</head>
<body>
    <p>De laatste 'a' in het woord <?php print $fruit; ?> bevindt zich op de <?php print $posLaatsteA; ?>e plaats.</p>
    <p><?php print $uppercaseFruit; ?></p>
</body>
</html>