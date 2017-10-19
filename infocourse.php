<?php
require_once 'model/course.php';
require_once 'model/student.php';
require_once 'service/finddata.php';
require_once 'service/courseFindDataImpl.php';
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
<div class="container" style="padding-top: 30px">
<?php
        $data=new CourseFindDataImpl;
        echo '
        <div class="col col-md-3" style="padding-top: 30px">
        <div class="card">
        <div class="card-header">
          '; echo $data->findByID($_GET['id'])->Getnamecourse().'
        </div>
        <div class="card-body">
          <h4 class="card-title">'; echo $data->findByID($_GET['id'])->Getcodecourse().'</h4>
          <a href="index.php" class="btn btn-primary">Назад</a>
        </div>
        </div>
        </div>';
?>
</div>
</div>
<footer style="padding-top: 80px;"><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>