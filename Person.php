<?php

abstract class Person {

    private static $count = 0;
    private $id;
    private $lastname;
    private $firstname;
    
    abstract public function printInfo();

    public function __construct($lastname = null, $firstname = null) {
        $this->id = ++self::$count;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    public function __destruct() {
        $this->id = self::$count--;
    }

    public static function getCount() {
        return self::$count;
    }

    public function __toString() {
        return "Person: {$this->id}: {$this->firstname} {$this->lastname}";
    }

    public function getId() {
        return $this->id;
    }



    public function getLastname() {
        return $this->lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

}
