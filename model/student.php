<?php

class Student {

    private static $count = 0;
    private $id;
    private $lastname;
    private $firstname;
    private $group;
    

    public function __construct($lastname = null, $firstname = null, $group = null) {
        $this->id = ++self::$count;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->group=$group;
    }

    public function __destruct() {$this->id = self::$count--;}

    public static function getCount() {return self::$count;}

    public function getId() {return $this->id;}
    public function getLastname() {return $this->lastname;}
    public function getFirstname() {return $this->firstname;}
    public function getGroup() {return $this->group;}
    public function setLastname($lastname) {$this->lastname = $lastname;}
    public function setFirstname($firstname) {$this->firstname = $firstname;}
    public function setGroup($group) {$this->group = $group;}

    public function __toString() {return "Person: {$this->id}: {$this->firstname} {$this->lastname} {$this->group}";}
}
