<?php 

class Course {
    
    private static $count = 0;
    private $id;
    private $codecourse;
    private $namecourse;

    public function __construct($codecourse=null, $namecourse=null){
        $this->id = ++self::$count;
        $this->codecourse= $codecourse;
        $this->namecourse= $namecourse;
    }

    public function __destruct() {$this->id = self::$count--;}

    public static function getCount() {return self::$count;}

    public function getId() {return $this->id;}
    public function Getcodecourse() {echo $this->codecourse;}
    public function Setcodecourse($codecourse) {$this->codecourse=$codecourse;}
    public function Getnamecourse() {echo $this->namecourse;}
    public function Setnamecourse($namecourse) {$this->namecourse=$namecourse;}

    public function __toString() {return "Course: {$this->codecourseid}: {$this->namecourse}";}
} 
 ?>