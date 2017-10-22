<!--Artur Shabunov RDIR51 -->
<!--class infocourse -->
<?php
require_once 'model/course.php';
require_once 'model/student.php';
require_once 'service/finddata.php';
require_once 'service/courseFindDataImpl.php';
require_once 'service/studentFindDataImpl.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shabunov Ulesanne 2</title>
</head>
<body>
<script href="js/bootstrap.js" type="text/javascript"></script>
</body>
<div class="container" style="padding-top: 30px; padding-bottom:100px">
  <div class="col" style="padding-top: 30px">
      <div class="card">
        <div class="card-header">
        <?php
        $data=new CourseFindDataImpl;
        echo $data->findByID($_GET['id'])->Getcodecourse(); ?>
          </div>
          <div class="card-body">
          <h4 class="card-title"><?php $data->findByID($_GET['id'])->Getnamecourse();?></h4>
          <p class="card-text">EAP: <?php $data->findByID($_GET['id'])->Geteap();?></p>
          <p class="card-text">Оценивание: <?php $data->findByID($_GET['id'])->Getmark();?> </p>
          <p class="card-text">Преподаватель: <?php $data->findByID($_GET['id'])->Getteacher();?> </p>
          <!-- <p class="card-text">Группа: <?php $coursgroup = $data->findByID($_GET['id'])->Getgroup();?> </p>--> 
          <p class="card-text">Студенты: <br>
          <?php 
          $datastudent=new StudentFindDataImpl; 
           foreach ($datastudent->findAll() as $student) {
                 echo $student->getFirstname().' ';
                 echo $student->getLastname().', ';
                 echo $student->getGroup().'<br>';
          }
        //   foreach ($datastudent->findAll() as $student) { эксперементы
        //     if($student->getGroup()==$coursgroup)
        //         return $student;
        // }
          ?>
          </p>
          <a href="index.php" class="btn btn-primary">Назад</a>
        </div>
      </div>
  </div>
</div>
<footer><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>