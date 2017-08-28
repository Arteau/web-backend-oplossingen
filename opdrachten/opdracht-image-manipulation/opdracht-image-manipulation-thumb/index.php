<?php 
$msg="";
    try{
    if(isset($_POST["verzenden"]))
    {
        $foto = $_FILES["foto"];
        move_uploaded_file($foto["tmp_name"], "img/".$foto["name"]);
        
        $fotoPath = "img/".$foto["name"];

        $fotoSize = getImageSize($fotoPath);
        // var_dump($fotoSize);
        $fotoWidth = $fotoSize[0];
        $fotoHeight = $fotoSize[1];
        $fotoRes=imagecreatefromjpeg($fotoPath);

        if($fotoWidth > $fotoHeight)
        {
            $thumbnail = imagecrop($fotoRes, ['x' => ($fotoWidth-$fotoHeight)/2, 'y' => 0, 'width' => $fotoHeight, 'height' => $fotoHeight]);
            $thumbnailWidth=$fotoHeight;
            $thumbnailHeight=$fotoHeight;
        }
        else{
            $thumbnail = imagecrop($fotoRes, ['x' => 0, 'y' => ($fotoHeight-$fotoWidth)/2, 'width' => $fotoWidth, 'height' => $fotoWidth]);
            $thumbnailWidth=$fotoWidth;
            $thumbnailHeight=$fotoWidth;
            
            // $thumbnail = imagecrop($fotoRes, [$fotoWidth/2, $fotoHeight/2, $fotoWidth, $fotoWidth]);
            
        }
        $targetImage = imagecreate(100,100);
        imagecopyresized($targetImage,$thumbnail,0,0,0,0,100,100,$thumbnailWidth,$thumbnailHeight);
        // var_dump($thumbnail);
        $img = imagejpeg($targetImage,"img/thumbnail".$foto["name"]);
        // move_uploaded_file($img, "img/thumbnail".$foto["name"]);



    }
}catch(Exception $e){
    //dit werkt niet om te detecteren dat het verkeerde img formaat geupload is :(
    $msg="foute file formaat geupload";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title>image manipulation thumbnail</title>
</head>
<body>
    <style>

    .alert{
        color : red;
    }
    </style>
    <form action="index.php" method="post" enctype="multipart/form-data" >
    <h1>Thumbnail Genereren</h1>
    <p class="alert">enkel jpg <?=$msg?></p>
    <input type="file" name="foto">bestand kiezen</input>
    <button type="submit" name="verzenden">verzenden</button>
    </form>
    <!-- <img src="img/foto.jpg"></img> -->
    <img src="<?= "img/thumbnail".$foto["name"]?>"></img>
    
</body>
</html>