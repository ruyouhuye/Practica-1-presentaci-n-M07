<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styleBlog.css">
    <title>Invitation</title>
</head>

<body>
    <h1>Noticias Deportivas</h1>
        
        <ul class="news">
        <?php foreach($news_array as $news) {
                $date = $news['date'];
                $body = $news['body'];
                echo "<li> $date </li>";
                echo "<li> $body </li>";
            }
        ?>
        </ul>
</body>

</html>