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
        echo $data->findByID($_GET['id'])->Getcodecourse().'
        </div>
        <div class="card-body">
          <h4 class="card-title">'; echo $data->findByID($_GET['id'])->Getnamecourse().'</h4>
          <p class="card-text">EAP: '; echo $data->findByID($_GET['id'])->Geteap().' </p>
          <p class="card-text">Оценивание: '; echo $data->findByID($_GET['id'])->Getmark().' </p>
          <p class="card-text">Группа: '; $coursgroup = $data->findByID($_GET['id'])->Getgroup().' </p>';
          $datast=new StudentFindDataImpl; 

          foreach ($datast->findAll() as $student) {
          $studentgroup = $student->getGroup();
           if($coursgroup == $studentgroup){
             // echo $student->GetFirstname().' ';
             // echo $student->GetLastname().'<br>';
             }
          }
          ?>
          <a href="index.php" class="btn btn-primary">Назад</a>
        </div>
      </div>
  </div>
</div>
<footer><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>