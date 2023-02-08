<?php

$connection = require_once './conn.php';

if ($_POST['body'] || $_POST['title']) {
    $connection->addNote($_POST);
} else {
    // $error = urlencode('Text cannot be empty');
    header('Location: index.php?Error');
    die;
}

header('Location: index.php');