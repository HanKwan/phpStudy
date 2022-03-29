<?php
    include_once("temporary.php");

    class Amovie extends Movie {
        public $filmTime;

        function __construct($title, $rating, $filmTime) {
            parent::__construct($title, $rating, $filmTime);
                $this->filmTime = $filmTime;
        }
    }
?>