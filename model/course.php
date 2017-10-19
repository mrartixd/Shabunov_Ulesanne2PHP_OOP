<?php 

class Course {
    
    private static $count = 0;
    private $id;
    private $codecourse;
    private $namecourse;
    private $eap;
    private $mark;
    private $group;

    public function __construct($codecourse=null, $namecourse=null, $eap=null,$mark=null,$group=null){
        $this->id = ++self::$count;
        $this->codecourse= $codecourse;
        $this->namecourse= $namecourse;
        $this->eap=$eap;
        $this->mark=$mark;
        $this->group=$group;
    }

    public function __destruct() {$this->id = self::$count--;}

    public static function getCount() {return self::$count;}

    public function getId() {return $this->id;}
    public function Getcodecourse() {echo $this->codecourse;}
    public function Setcodecourse($codecourse) {$this->codecourse=$codecourse;}
    public function Getnamecourse() {echo $this->namecourse;}
    public function Setnamecourse($namecourse) {$this->namecourse=$namecourse;}
    public function Geteap() {echo $this->eap;}
    public function Seteap($eap) {$this->eap=$eap;}
    public function Getmark() {echo $this->mark;}
    public function Setmark($mark) {$this->mark=$mark;}
    public function Getgroup() {echo $this->group;}
    public function Setgroup($group) {$this->group=$group;}

    public function __toString() {return "Course: {$this->codecourseid}: {$this->namecourse}: {$this->eap}: {$this->mark}: {$this->group}";}
} 
 ?>