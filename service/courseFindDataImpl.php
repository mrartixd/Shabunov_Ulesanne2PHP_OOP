<?php

require_once 'model/course.php';

class CourseFindDataImpl implements FindData {
    private $listCourses = array();

    public function __construct() {
        $file = fopen("data/Course.csv", "rt") or die("Error");
        for ($i = 0; $data = fgetcsv($file, 100, ";"); $i++) {
            $course = new Course($data[0], $data[1],$data[2],$data[3],$data[4]);
            $this->listCourses[] = $course;
        }
    }

    public function findAll() {
        return $this->listCourses;
    }

    public function findByID($id) {
        foreach ($this->listCourses as $course) {
            if($course->getId()==$id)
                return $course;
        }
        return null;
    }

    public function findByGroup($group) {
        foreach ($this->listCourses as $course) {
            if($course->getGroup()==$group)
                return $course;
        }
        return null;
    }
}
