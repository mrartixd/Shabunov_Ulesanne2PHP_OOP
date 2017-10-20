<!-- Artur Shabunov RDIR51

Создайте Web приложение, которое содержит информацию о курсах и студентах, которые записались на курсы

На главной странице выводятся название курсов и их код
Пользователь может выбрать курс и посмотреть на другой странице полную информацию о курсе и кто записался на данный курс
Для реализации создайте классы, которые описывают модель системы

При оценивании также будет учитываться внешний вид пользовательского интерфейса

Используйте git при пректировании проекта -->
<?php
require_once 'model/course.php';
require_once 'service/finddata.php';
require_once 'service/courseFindDataImpl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
        <title>Shabunov Ulesanne 2</title>
    </head>
    <body>
    <script href="js/bootstrap.js" type="text/javascript"></script>
    <div class="container" style="padding-top: 30px; padding-bottom:100px">
    <div class="row">
	    <div class="col-12 col-md-12">
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
        $data=new CourseFindDataImpl;
        foreach ($data->findAll() as $course) {
            $id=$course->Getid();?>
            <div class="col col-md-3" style="padding-top: 30px">
            <div class="card">
            <div class="card-header">
              <?php echo $course->Getcodecourse(); ?>
            </div>
            <div class="card-body">
              <h4 class="card-title"><?php echo $course->Getnamecourse();?></h4>
              <a href="infocourse.php?id=<?php echo $id;?>" class="btn btn-primary">Подробнее</a>
            </div>
            </div>
            </div>
       <?php }      
        ?>
    </body>
    <footer><div class="fixed-bottom p-3 bg-info text-white">Artur Shabunov 2017</div></footer>
</html>
