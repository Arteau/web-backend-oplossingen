<?php
    $artikels = array(
        array(
            "titel" => "Gene editing starts to save human lives.",
            "datum" => "14 December 2016",
            "inhoud" => "In 2015, a little girl called Layla was treated with gene-edited immune cells that eliminated all signs of the leukaemia that was killing her. Layla’s treatment was a one-off, but by the end of 2017, the technique could have saved dozens of lives.", 
            "afbeelding" => "crispr.jpg" 
        ),
        array(
            "titel" => "Amazon completes its first drone-powered delivery",
            "datum" => "15 December 2016",
            "inhoud" => "It's already been three years since Amazon first revealed its somewhat audacious plan to make deliveries by drone. But the company is quite serious about this, and today it is announcing that it complete the first Amazon Prime Air drone-powered delivery. The company recently launched a trial in Cambridge, England -- and on December 7th, Amazon completed its first drone-powered delivery. It took 13 minutes from order to delivery, with the drone departing a custom-built fulfillment center nearby.",
            "afbeelding" => "amazon.jpg"
        ),
        array(
            "titel" => "Korean fusion reactor achieves record plasma",
            "datum" => "14 December 2016",
            "inhoud" => "The Korean Superconducting Tokamak Advanced Research (KSTAR) tokamak-type nuclear fusion reactor has achieved a world record of 70 seconds in high-performance plasma operation, South Korea's National Fusion Research Institute (NFRI) has announced.",
            "afbeelding" => "fusionreactor.jpg"
        ),
    );

    $idIsSet = false;
    if(isset($_GET["id"])) {
        
        $id = $_GET["id"];
        
        if(array_key_exists($id, $artikels)) {
            
            $artikels = array($artikels[$id]);
		  $idIsSet = true;
            
        }
    }
        
    function eersteVijftigChars($text) {
        return substr($text, 0, 50);
    }

/*
klik op "lees hier" -> nummer van dat artikel wordt als id meegegeven aan de $_GET
pagina moet herladen worden met "eerstevijftig" op false, en zodanig worden hertekend dat enkel het aangeklikte artikel zichtbaar is    
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oplossing GET: deel 1</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body>
   	<form method="get" action="">

    </form>
    
    <?php foreach($artikels as $id => $artikel) : ?>
        <tr>
            <td>
                <article id="artikel<?php echo $id; ?>">
				    <h1>
				        <?= nl2br($artikel["titel"]) ?>
				    </h1>
				    <p>
				        <?= (!$idIsSet) ? nl2br(eersteVijftigChars($artikel['inhoud'])."..."):nl2br($artikel["inhoud"]);?>
				    </p>
				    <?php if(!$idIsSet) : ?>
				    <a href=<?= "index.php?id=".$id ?>>lees meer</a>
				    <?php endif ?>

				    <img src="img/<?= $artikel['afbeelding'] ?>">
				</article>
            </td>
        </tr>
    <?php endforeach; ?>
</body>
</html>