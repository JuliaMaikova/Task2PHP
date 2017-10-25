
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
             <div class="col-md-12 offset-md-0"> 
            

        
        <?php
               $data = new CoursesFindData;
          foreach ($data->findAll() as $coursePart) {
                            ?>
                            
        <table class="table table-hover" >
          <tbody>
            <tr>
            <td align="center" width="10"><?php echo($coursePart->getId());?></td>
            <td align="center" width="150"><?php echo($coursePart->getCode()); ?></td>
            <td align="center" width="250"><?php echo($coursePart->getTitle()); ?></td>
            <td align="center" width="100"><a href="IndexFullInfo.php?send=<?php echo $coursePart->getId(); ?>" name="send">Full information</a></td>
            </tr>       
          </tbody>
        </table>
        <?php
       }
       ?>
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