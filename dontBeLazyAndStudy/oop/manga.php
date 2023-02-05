<?php

require_once './book.php';

class Manga extends Book {
    public $genre;

    public function __construct($name, $author, $genre) {
        parent::__construct($name, $author, $genre);
        $this->genre = $genre;
    }
}

$manga1 = new Manga('Demon Slayer', 'Koyoharu Gotouge', 'Shonen manga');
// echo $manga1->author;
// $manga1->setSecurity('security1');
echo $manga1->getSecurity() ?? "Don't have security";