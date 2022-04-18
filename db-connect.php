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
$result = mysqli_query($connection, $sql);

if ($result) {
    var_dump($result);
} else {
    echo "ERROR: " . mysqli_error($connection);
}