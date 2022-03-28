<?php
    require_once ("book.php");
    
    class Historybook extends Book {
        public $writtenTime;
        
        function __construct($bookName, $author, $pages, $writtenTime) {
            parent::__construct($bookName, $author, $pages, $writtenTime);
            $this->writtenTime = $writtenTime;         
        }
    }

?>