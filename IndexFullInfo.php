<?php 
require_once 'model/Course.php';
require_once 'model/Person.php';
require_once 'model/Student.php';
require_once 'service/CoursesFindData.php';
require_once 'service/findData.php';
require_once 'service/StudentFindData.php';
?>
<html>
    <head>  
        <meta charset="UTF-8">
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>Course registration</title>
    </head>
    <body class="fond">

        <header>
        
        <div class="imgCenter ">
        <p><img src="image\courses.jpg"  /></p>
        </div>
        
        
        </header>

          <div class="main"> 
          <div class="container">  
             <div class="row">  
            <div class="col-md-12">  

        
        <?php
               $coursePart = new CoursesFindData;
               $id = $_REQUEST['send'];
               $fullCourseData = $coursePart->findByID($id);
         ?>
        <table  border="1" class="table table-striped">
     
          <tr>
            <th>Course code</th>
            <th width="300">Course title</th>
            <th >ECTS credits</th>
            <th >Assessment form</th>
            <th>Teaching semester</th>
            <th width="300">Lecturer</th>
            <th width="250">Learning outcomes in the course</th>
            <th width="300">Registered students</th>
             </tr>

            <tr>     
              <td><?php echo($fullCourseData->getCode());?></td>
              <td><?php echo($fullCourseData->getTitle());?></td>
              <td><?php echo($fullCourseData->getEap());?></td>
              <td><?php echo($fullCourseData->getAssessmentForm());?></td>
              <td><?php echo($fullCourseData->getTeachingSemester());?></td>
              <td><?php echo($fullCourseData->getLecturer());?></td>
              <td><?php echo($fullCourseData->getDescription());?></td> 
              <td >

             <?php
             $students = new StudentFindData;
             foreach ($students->findAll() as $student) {
                 if ($student->getId() == $id) {
                     echo($student->getLastname() . " ");
                     echo($student->getFirstname() . " ");
                     echo($student->getGroup());
                     echo "<h1>".nl2br("")."</h1>";
                 }
             }
             ?>
         </td>
            </tr> 
        </table>
        
       </div> 
  </div> 
    </div>
    </div>  
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="footer"> &copy; Julija Maikova RDIR51</div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>