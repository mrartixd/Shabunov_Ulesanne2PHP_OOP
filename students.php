<?php class Students{
private $studcode;
private $codegroup;
private $firstname;
private $lastname;
private $personalid;
private $city;
private $address;
private $phonenumber;
private $email;

    function_construct($studcode="154331", $codegroup="RDIR51",$firstname="Artur",
    $lastname="Shabunov",$personalid="39606112762",$city="Kohtla-Jarve",
    $address="Toome pst. 18-20",$phonenumber="5581660",$email="artur.shabunov@gmail.com"){
        $this->studcode=$studcode;
        $this->codegroup=$codegroup;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->personalid=$personalid;
        $this->city=$city;
        $this->address=$address;
        $this->phonenumber=$phonenumber;
        $this->email=$email;
    }
    function PrintStudents(){
        echo $this->firstname."".$this->firstname." ".$this->lastname."";
    }
    function Getstudcode) {echo $this->studcode;}
    function Setstudcode($studcode) {$this->studcode=$studcode;} 
    function Getfirstname() {echo $this->firstname;}
    function Setfirstname($firstname) {$this->firstname=$firstname;} 
    function Getcodegroup() {echo $this->codegroup;}
    function Setcodegroup($codegroup) {$this->codegroup=$codegroup;}
    function Getlastname() {echo $this->lastname;}
    function Setlastname($lastname) {$this->lastname=$lastname;}
    function Getpersonalid() {echo $this->personalid;}
    function Setpersonalid($personalid) {$this->personalid=$personalid;}
    function Getcity() {echo $this->city;}
    function Setcity($city) {$this->city=$city;}
    function Getaddress() {echo $this->address;}
    function Setaddress($address) {$this->address=$address;}
    function Getphonenumber() {echo $this->phonenumber;}
    function Setphonenumber($phonenumber) {$this->phonenumber=$phonenumber;}
    function Getemail() {echo $this->email;}
    function Setemail($email) {$this->email=$email;}
}?>