<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styleBlog.css">
    <title>Blog</title>
</head>

<body>
    <h1>Noticias Deportivas</h1>
        <div class="container">
            <div class="row">
            <?php foreach($news_array as $news) {
                $date = $news['date'];
                $body = $news['body'];
                echo
                "<div class='card' style='width: 40rem;'>
                    <div class='card-body'>
                    <h5 class='card-title'>$date</h5>
                    <p class='card-text'>$body</p>
                    </div>
                </div>" . PHP_EOL;
                
                }
            ?>
            </div>
        </div>
        
</body>

</html>