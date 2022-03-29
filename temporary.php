<?php
    class Movie {
        public $title;
        public $rating;
        protected $badReview;

        function __construct($title, $rating) {
            $this->title = $title;
            $this->rating = $rating;
        }
        public function putBadR($badReview) {
            $this->badReview = $badReview;
        }
        public function getBadR() {
            return $this->badReview;
        }
    }
?>