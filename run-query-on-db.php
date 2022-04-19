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

// echo "Connected to the DB!";

$sql = "SELECT * FROM article";
try {
    $result = mysqli_query($connection, $sql);
    if ($result) {
        var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));
    } else {
        echo "DB did not return a value: " . mysqli_error($connection);
    }
} catch (Exception $e) {
    echo "ERROR: " . $e;
}