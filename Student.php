<?php

class Student extends Person {

    private $group;

    public function __construct($lastname = null, $firstname = null, $group = 'RDIR') {
        parent::__construct($lastname, $firstname);
        $this->group=$group;
    }
    
    public function __toString() {
        return parent::__toString()." - ".$this->group;
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }

}