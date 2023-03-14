<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Питомник «ELZAR iz EDEL»</title>
    
	<link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet" >
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="питомник, собаки">
    <meta name="description" content="Питомник «ELZAR iz EDEL»">
    <meta name="robots" content="all"/>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
	
	<link href="css/video.css" rel="stylesheet" >
	<link href="css/Dog.css" rel="stylesheet" >
	<link href="css/gall.css" rel="stylesheet" >
	<link href="css/breed.css" rel="stylesheet">

</head>
<body>
<div class="wrapper b3radius">
    <div class="header">
        <a class="mail" href="index.php"><div class="inner-header">
            <h1>Питомник «ELZAR iz EDEL»</h1>

            <p>Зарегистрирован в FCI: 12.07.2012 г.</p>

            <p>Владелец: Азарко Евгений Михайлович</p>

            <p>Республика Беларусь, г.Слоним</p>

            <p>Телефон: +37529-7075805(МТС); +37529-3534884(Вел)</p>

            <p>Email: <a class="mail" href="mailto:Azarko83@mail.ru">Azarko83@mail.ru</a></p>
        </div></a>

    </div >

    <ul class="menu clearfix">
        <li>
            <a href="index.php">Главная</a>
        </li>
        <li>
            <a href="index.php?&a=1">Наши собаки</a>
		
		</li>
        <li>
            <a href="">Фотогалерея</a>
			<ul>
	            <li><a class="Pull-down1 first" href="index.php?&a=11">Фото</a></li>
	            <li><a class="Pull-down1" href="index.php?&a=12">Видео</a></li>
 		    </ul>
        </li>
        <li>
            <a href="#">Щенки на продажу</a>
		<ul>
	            <li><a class="Pull-down2 first" href="">Актуальные пометы</a></li>
	            <li><a class="Pull-down2" href="">Планируемые пометы </a></li>
	        </ul>
        </li>
        <li>
            <a href="#">Статьи</a>
		<ul>
	            <li><a class="Pull-down1 first" href="index.php?&a=31">История породы</a></li>
	            <li><a class="Pull-down1" href="index.php?&a=32">Стандарт породы</a></li>
                <li><a class="Pull-down1" href="index.php?&a=33">Выбор щенка</a></li>
	            <li><a class="Pull-down1" href="index.php?&a=34">Кормление</a></li>
                <li><a class="Pull-down1" href="index.php?&a=35">Содержание и уход</a></li>
	            <li><a class="Pull-down1" href="index.php?&a=36">Дрессировка</a></li>
       
	        </ul>
        </li>
        <li>
            <a class="last" href="index.php?&a=41">Контакты</a>
        </li>
    </ul>
	

	<!------------------------------------------------------------------------------------------------>
	<?php 
		switch ($_GET['a']){
		case 1:{include ('myDogs/dog.html');}; break;
		
		case 11:{include ('gallery/photo.html');} break;
		case 12:{include ('gallery/video.html');} break;
		
		case 31:{include ('breed/history.html');} break;
		case 32:{include ('breed/standart.html');} break;
		case 33:{include ('breed/choosing.html');} break;
		case 34:{include ('breed/feeding.html');} break;
		case 35:{include ('breed/care.html');} break;
		case 36:{include ('breed/taining.html');} break;
		
		case 41:{include ('cont/contacts.html');} break;
		  
		default: {include ('content/content.html');}; break;
		  }
	?>	
	<!------------------------------------------------------------------------------------------------>
  	


  <div class="developers">
	<p> 2013 &copy Timofeichik I.N. </p>
  </div>
</div>
</body>
</html>