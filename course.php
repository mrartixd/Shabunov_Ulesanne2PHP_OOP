<?php class Course{
    private $codecourse;
    private $namecourse;
    private $nameteacher;
    private $mandatory;
    private $module;
    private $eap;
    private $mark;
    private $language;
    private $description

    function__construct($codecourse="RAM0121",$namecourse="Veebiprogrammeerimine I",$nameteacher="Ivan Ivanov",
    $mandatory="yes", $module="Programmeerimise moodul", $eap=4, $mark=h,$language="rus",$description="PHP, MySQL"){
        $this->codecourse=$codecourse;
        $this->namecourse=$namecourse;
        $this->nameteacher=$nameteacher;
        $this->mandatory=$mandatory;
        $this->module=$module;
        $this->eap=$eap;
        $this->mark=$mark;
        $this->language=$language;
        $this->description=$description;
    }
    function PrintCourse(){
        echo $this->namecourse."(".$this->codecourse.")";
    }
    function Getcodecourse() {echo $this->codecourse;}
    function Setcodecourse($codecourse) {$this->codecourse=$codecourse;}
    function Getnamecourse() {echo $this->namecourse;}
    function Setnamecourse($namecourse) {$this->namecourse=$namecourse;}
    function Getnameteacher() {echo $this->nameteacher;}
    function Setnameteacher($nameteacher) {$this->nameteacher=$nameteacher;}
    function Getmandatory() {echo $this->mandatory;}
    function Setmandatory($mandatory) {$this->mandatory=$mandatory;}
    function Getmodule() {echo $this->module;}
    function Setmodule($module) {$this->module=$module;}
    function Geteap() {echo $this->eap;}
    function Seteap($eap) {$this->eap=$eap;}
    function Getmark() {echo $this->mark;}
    function Setmark($mark) {$this->mark=$mark;}
    function Getlanguage() {echo $this->language;}
    function Setlanguage($language) {$this->language=$language;}
    function Getdescription() {echo $this->description;}
    function Setdescription($description) {$this->description=$description;}
} ?>