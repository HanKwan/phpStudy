<?php
class Book {
    public $name;
    public $author;
    private $security;
    public static $bookcount;

    public function __construct($name, $author) {
        $this->name = $name;
        $this->author = $author;
        self::$bookcount++;
    }

    public function setSecurity($security) {
        $this->security = $security;
    }

    public function getSecurity() {
        return $this->security;
    }

    public function getBookcount() {
        return self::$bookcount;
    }
}

// $book1 = new Book('Bookname1', 'Author1');
// echo $book1->name;
// $book1->setSecurity('book1PW');
// echo $book1->getSecurity();