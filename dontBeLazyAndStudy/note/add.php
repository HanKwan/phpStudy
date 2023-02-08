<?php

$connection = require_once './conn.php';

if ($_POST['body'] || $_POST['title']) {
    $connection->addNote($_POST);
} else {
    $connection->sendError();
    header('Location: index.php');
}

header('Location: index.php');