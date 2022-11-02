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
    <div id="main">
        <?php
            foreach ($images_array as $image) {
                echo "<div>";
                echo "<a href=''>";
                echo "<img src='$image'>";
                echo "</a>";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>