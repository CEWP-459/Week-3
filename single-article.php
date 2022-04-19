<?php

    ini_set('display_errors', 1); 
    require 'database-connection.php'; 
    
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $sql = "SELECT * FROM article WHERE id = {$_GET['id']}";
        // var_dump($sql);
        try {
            $result = mysqli_query($connection, $sql);
            if ($result) {
                $article = mysqli_fetch_array($result, MYSQLI_ASSOC);
            } else {
                echo "DB did not return a value: " . mysqli_error($connection);
            }
        } catch (Exception $e) {
            echo "ERROR: " . $e;
        }
    } else {
        $article = null;
    }
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Blog</h1>
    <?php if ($article === null) : ?>
        <h2> No articles found! </h2>
    <?php else: ?>    
        <ol>
            <li>
                <h3>Title:</h3>
                <?= $article['title'] ?>
                <h3>Content:</h3>
                <?= $article['content'] ?>
            </li>
        </ol>
    <?php endif; ?>    
</body>

</html>