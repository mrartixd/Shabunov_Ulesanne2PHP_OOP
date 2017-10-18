<!-- Artur Shabunov RDIR51

Создайте Web приложение, которое содержит информацию о курсах и студентах, которые записались на курсы

На главной странице выводятся название курсов и их код
Пользователь может выбрать курс и посмотреть на другой странице полную информацию о курсе и кто записался на данный курс
Для реализации создайте классы, которые описывают модель системы

При оценивании также будет учитываться внешний вид пользовательского интерфейса

Используйте git при пректировании проекта -->
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
<div class="container" style="padding-top: 30px">
    <div class="row">
	    <div class="col-12 col-md-4">
		<ul class="list-group">
			<li class="list-group-item list-group-item-info">Задание:</li>
			<li class="list-group-item">Создайте Web приложение, которое содержит информацию о курсах и студентах, которые записались на курсы</li>
			<li class="list-group-item">На главной странице выводятся название курсов и их код</li>
			<li class="list-group-item">Пользователь может выбрать курс и посмотреть на другой странице полную информацию о курсе и кто записался на данный курс</li>
			<li class="list-group-item">Для реализации создайте классы, которые описывают модель системы</li>
			<li class="list-group-item">При оценивании также будет учитываться внешний вид пользовательского интерфейса</li>
            <li class="list-group-item list-group-item-success">Используйте git при пректировании проекта</li>
		</ul>
	</div>
<?php
require_once "course.php";
$course[3];
$course[0] = new Course("NTR0560", "Sissejuhatus telemaatika ja arukate süsteemide erialass", 5,"H","EST");
$course[1] = new Course("RAM0121","Veebiprogrammeerimine I", 4,"H","RUS");
$course[2] = new Course("RAH0211", "Informaatika 1", 4,"E","EST");
?>

<?php
for($x=0; $x<3;$x++){
echo '<div class="card">
<div class="card-header">
  '; echo $course[0]->Getcodecourse().'
</div>
<div class="card-body">
  <h4 class="card-title">'; echo $course[0]->Getnamecourse().'</h4>
  <p class="card-text">EAP: '; echo $course[0]->Geteap().', Оценивание: '; echo $course[0]->Getmark().', Язык: '; echo $course[0]->Getlanguage().'</p>
  <a href="infocourse.php" class="btn btn-primary">Подробнее</a>
</div>
</div>';
}?>
</div>
</body>
<footer style="padding-top: 80px;"><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>
