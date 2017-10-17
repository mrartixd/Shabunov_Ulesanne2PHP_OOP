<?php class Students
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
$address="Toome pst. 18-20",$phonenumber="5581660",$email="artur.shabunov@gmail.com")
    $this->studcode=$studcode;
    $this->codegroup=$codegroup;
    $this->firsname=$firstname;
    $this->lastname=$lastname;
    $this->personalid=$personalid;
    $this->city=$city;
    $this->address=$address;
    $this->phonenumber=$phonenumber;
    $this->email=$email;
?>