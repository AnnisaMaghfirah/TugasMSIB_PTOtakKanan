<?php
// polymorphism
require_once 'person.php';

// Class Lecturer yang merupakan turunan dari class Person
class Lecturer extends Person {
    private $title;

    public function __construct($title) {
        parent::__construct('');
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}

?>
