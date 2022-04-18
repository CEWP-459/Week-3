<?php
    $fruits = ["apple", "banana", "orange", "mango"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fruits</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Fruits</h1>
        <ol>
            <?php foreach($fruits as $ele): ?>
                <li> <?= $ele ?> </li>
            <?php endforeach; ?>
        </ol>
    </body>
</html>