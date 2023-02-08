<?php

$connection = require_once './conn.php';

$connection->deleteNote($_POST['deleteId']);

header('Location: index.php');