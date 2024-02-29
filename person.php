<?php
// Encapsulaation - superclass
// Class Person sebagai superclass yang merepresentasikan individu
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

?>
