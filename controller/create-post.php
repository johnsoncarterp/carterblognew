<?php
require_once (__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username, $password, $database);


$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title= '$title', post= '$post'");

if($query) {
    echo "<p>Succssesfully Inserted Posts: $title</p>";
}

else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

