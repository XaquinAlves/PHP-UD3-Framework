<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $s = "mundo";
        echo '<p>Hola '.$s.'!</p>';
        echo "<p>Hola $s!</p>";
        printf("<p>Hola %s!</p>", $s);
        ?>
    </body>
</html>
