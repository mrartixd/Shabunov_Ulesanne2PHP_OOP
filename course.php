<?php 
    class Course{
    private $codecourse;
    private $namecourse;
    private $eap;
    private $mark;
    private $language;

    public function __construct($codecourse, $namecourse, $eap, $mark, $language){
        $this->codecourse= $codecourse;
        $this->namecourse= $namecourse;
        $this->eap= $eap;
        $this->mark= $mark;
        $this->language= $language;
    }

    function Getcodecourse() {echo $this->codecourse;}
    function Setcodecourse($codecourse) {$this->codecourse=$codecourse;}
    function Getnamecourse() {echo $this->namecourse;}
    function Setnamecourse($namecourse) {$this->namecourse=$namecourse;}
    function Geteap() {echo $this->eap;}
    function Seteap($eap) {$this->eap=$eap;}
    function Getmark() {echo $this->mark;}
    function Setmark($mark) {$this->mark=$mark;}
    function Getlanguage() {echo $this->language;}
    function Setlanguage($language) {$this->language=$language;}
} 
 ?>