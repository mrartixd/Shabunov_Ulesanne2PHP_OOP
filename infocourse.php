<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Shabunov Ulesanne 2</title>
</head>
<body>
<script href="js/bootstrap.js" type="text/javascript"></script>
</body>
<?php
include_once "index.php";
        $page=$_REQUEST['page'];
        if($page==$x)
        echo '
        <div class="col col-md-3" style="padding-top: 30px">
        <div class="card">
        <div class="card-header">
          '; echo $course[$x]->Getcodecourse().'
        </div>
        <div class="card-body">
          <h4 class="card-title">'; echo $course[$x]->Getnamecourse().'</h4>
          <p class="card-text">EAP: '; echo $course[$x]->Geteap().'</p>
          <p class="card-text">Оценивание: '; echo $course[$x]->Getmark().'</p>
          <p class="card-text">Язык: '; echo $course[$x]->Getlanguage().'</p>
        </div>
        </div>
        </div>';
?>
<footer style="padding-top: 80px;"><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>