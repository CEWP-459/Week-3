<?php
    $db_host = "localhost";
    $db_name = "blog";
    $db_username = "blog_www";
    $db_password = "LZR]PHvInWKW!]6*";
    
    $connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }
    
    $sql = "SELECT * FROM article";
    try {
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "DB did not return a value: " . mysqli_error($connection);
        }
    } catch (Exception $e) {
        echo "ERROR: " . $e;
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
    <?php if (empty($articles)) : ?>
        <h2> No articles found! </h2>
    <?php else: ?>    
        <ol>
            <?php foreach($articles as $article): ?>
            <li>
                <h3>Title:</h3>
                <a href="single-article.php?id=<?=$article['id']?>"><?= $article['title'] ?></a>
                <h3>Content:</h3>
                <?= $article['content'] ?>
            </li>
            <?php endforeach; ?>
        </ol>
    <?php endif; ?>    
</body>

</html>