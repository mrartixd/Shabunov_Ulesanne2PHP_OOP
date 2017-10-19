<?php

require_once 'model/student.php';

class StudentFindDataImpl implements FindData {
    private $listStudents = array();

    public function __construct() {
        $file = fopen("data/Students.csv", "rt") or die("Error");
        for ($i = 0; $data = fgetcsv($file, 100, ";"); $i++) {
            $student = new Student($data[0], $data[1], $data[2]);
            $this->listStudents[] = $student;
        }
    }

    public function findAll() {
        return $this->listStudents;
    }

    public function findByID($id) {
        foreach ($this->listStudents as $student) {
            if($student->getId()==$id)
                return $student;
        }
        return null;
    }

    public function findByGroup($group) {
        foreach ($this->listStudents as $student) {
            if($student->getGroup()==$group)
                return $student;
        }
        return null;
    }
}
