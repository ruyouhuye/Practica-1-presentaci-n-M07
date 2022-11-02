<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation</title>
</head>

<body>
<header>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <a href="#" class="enlace">
                    <img src="../resources/img/logo.png" alt="logo M07" class="logo">
                </a>
                
                <ul>
                    <li><a class="active" href="#">Inicio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Tabla de datos</a></li>
                    <li><a href="#">Web Service</a></li>
                </ul>
            </nav>
        </header>
        
        <ul>
        <?php foreach($news_array as $news) {
                $date = $news['date'];
                $body = $news['body'];
                echo "<li> $body </li>";
            }
        ?>
        </ul>
</body>

</html>