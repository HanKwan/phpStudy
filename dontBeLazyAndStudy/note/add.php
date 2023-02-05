<?php

$connection = require_once './conn.php';

if ($_POST['body']) {
    $connection->addNote($_POST);
}

header('Location: index.php');