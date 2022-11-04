<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleGalery.css">
    <title>Galeria</title>
</head>
<body>
    <h1>Galeria</h1>
        <div id="main">
            <?php
        
                foreach ($images_array as $image) {
                    echo "<div class='recuadro'>";
                    echo "<a href=''>";
                    echo "<img src='$image'>";
                    echo "</a>";
                    echo "</div>" . PHP_EOL;
                }
            ?>
        </div>
        
</body>
</html>