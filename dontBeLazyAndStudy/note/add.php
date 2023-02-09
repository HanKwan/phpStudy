<?php

$connection = require_once './conn.php';

if ($_POST['body'] && empty($_POST['id']) || $_POST['title'] && empty($_POST['id'])) {
    $connection->addNote($_POST);
} elseif ($_POST['id']) {
    $connection->update($_POST);
} else {
    // $error = urlencode('Text cannot be empty');
    header('Location: index.php?Error');
    die;
}

header('Location: index.php');