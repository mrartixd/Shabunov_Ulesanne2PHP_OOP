<!-- Artur Shabunov RDIR51

Создайте Web приложение, которое содержит информацию о курсах и студентах, которые записались на курсы

На главной странице выводятся название курсов и их код
Пользователь может выбрать курс и посмотреть на другой странице полную информацию о курсе и кто записался на данный курс
Для реализации создайте классы, которые описывают модель системы

При оценивании также будет учитываться внешний вид пользовательского интерфейса

Используйте git при пректировании проекта -->
<?php error_reporting( E_ERROR ); ?>
<?php 
include course.php;
include students.php; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Shabunov Ulesanne 2</title>
</head>
<body>
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
</div>
<script href="js/bootstrap.js" type="text/javascript"></script>
</body>
<footer style="padding-top: 80px;"><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>
