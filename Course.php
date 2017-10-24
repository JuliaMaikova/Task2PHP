<?php

 class Course {


    private $id;
    private $code;
    private $title; 
    private $eap;
    private $AssessmentForm;
    private $TeachingSemester
    private $lecturer;
    private $description;
    
    
    public function __construct($id=0,$code=NULL,$title=NULL,$eap=0,$assessmentForm=NULL,$teachingSemester=NULL,$lecturer=NULL,$description=NULL) {
        $this->id = $id;
        $this->code = $code;
        $this->title = $title;    
        $this->eap = $eap;
        private $AssessmentForm;
        private $TeachingSemester
        $this->lecturer = $lecturer;
        $this->description = $description;
       
    }

   
    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getTitle() {
        return $this->title;
    }


    public function getEap() {
        return $this->eap;
    }

    public function getAssessmentForm() {
        return $this->assessmentForm;
    }

    public function getTeachingSemester() {
        return $this->teachingSemester;
    }

    public function getLecturer() {
        return $this->lecturer;
    }

    public function getDescription() {
        return $this->description;
    }

   

    public function setId($id) {
        $this->id = $id;
    }

    public function setCode($code) {
        $this->code= $code;
    }

    public function setTitle($title) {
        $this->name = $title;
    }
 
    public function setEap($eap) {
        $this->eap = $eap;
    }

    public function setAssessmentForm($assessmentForm) {
        $this->grade = $assessmentForm;
    }

    public function setTeachingSemester($teachingSemester) {
        $this->grade = $teachingSemester;
    }

    public function setLecturer($lecturer) {
        $this->lecturer = $lecturer;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }

    


    public function __toString() {
        return "Course: {$this->id}: {$this->code} {$this->title}  {$this->eap} {$this->AssessmentForm} {$this->TeachingSemester} {$this->lecturer} {$this->description}";
    }

    public function __toString2() {
        return "Course: {$this->id}: {$this->code} {$this->title}";
    }
  
    public function printInfo2() {
        echo "<p>". nl2br($this->__toString2())."<p>";
    }

    public function printInfo() {
        echo "<p>". nl2br($this->__toString())."<p>";
    }
}