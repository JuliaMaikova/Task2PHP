<?php

require_once 'model/Course.php';
require_once 'service/findData.php';

class CoursesFindData implements findData{
    private $listCoursesPart = array();
    private $listCoursesFullInfo = array();

    public function __construct() {
        $file = fopen("service/Courses.csv", "rt") or die("Error");
        for ($i = 0; $data = fgetcsv($file, 500, ";"); $i++) {
            $coursePart = new Course($data[0],$data[1],$data[2]);
            $courseFullInfo = new Course($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]);
            $this->listCoursesPart[] = $coursePart;
            $this->listCoursesFullInfo[] = $courseFullInfo;
        }
    }

    public function findAll() {
        return $this->listCoursesPart;
    }

    public function findFullInfo() {
        return $this->listCoursesFullInfo;
    }

    public function findByID($id) {
        foreach ($this->listCoursesFullInfo as $courseFullInfo) {
            if($courseFullInfo->getId()==$id)
                return $courseFullInfo;
        }
        return null;
    }
}
