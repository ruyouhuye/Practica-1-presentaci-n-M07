<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styleTable.css">
        <title>Taula de dades</title>
    </head>
    <body>
        <h2>Clasificacion LaLiga</h2>
        <div class="container">
            <table>
            <?php
                foreach ($table as $row){
                    echo "<tr>";
                    foreach($row as $field){
                        echo "<td>$field</td>";
                    }
                    echo "</tr>" . PHP_EOL;
                }
            ?>

            </table>
        </div>
        
    </body>
</html>