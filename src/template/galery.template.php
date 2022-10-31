<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
</head>
<body>
    <h1>Galery</h1>
    <?php
        foreach($img_array as $img){
            echo "<a href='/public/campeon2022.html' target='_blank'> <img src='$img'> </a> <br>";//es  ejemplo que solp entiene el rruyou
        }
    ?>

</body>
</html>