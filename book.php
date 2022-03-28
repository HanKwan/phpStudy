<?php
    class Book {
                public $bookName;
                public $author;
                public $pages;
                protected $password;
                public static $counter = 0;

                function __construct($bookName, $author, $pages) {
                    $this->bookName = $bookName;
                    $this->author = $author;
                    $this->pages = $pages;
                    self::$counter++;
                }

                public function setPw($password){
                    $this->password = $password;
                }

                public function getPw(){
                    return $this->password;
                }

                public static function getCounter(){
                    return self::$counter;
                }
            }
?>