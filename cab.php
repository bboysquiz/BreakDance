<?php	
		require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Break Dance Education</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/upload.css">
</head>
<body>

	<header class="header">
		<div class="header__background">
			<a href="logout.php" class="header__registration button">Выйти</a>
		</div>
		<div class="header__container">
			<ul class="header__menu">
				<a href="index.php" class="header__menu-item-link"><li class="header__menu-item">Главная</li></a>
				<a href="lessons.php" class="header__menu-item-link"><li class="header__menu-item">Видео уроки</li></a>
				<a href="literature.php" class="header__menu-item-link"><li class="header__menu-item">Литература</li></a>
				<a href="cab.php" class="header__menu-item-link"><li class="header__menu-item">Личный кабинет</li></a>
				<a href="quiz/index.php" class="header__menu-item-link"><li class="header__menu-item">Тест</li></a>
			</ul>
		</div>
	</header>

	<main class="main">
		<section class="user">
			<div class="user__container">
					<h2 class="user__name">
						<?php 
							$users = R::load('users', $_SESSION['logged_id']);
							echo $users->name;
							echo ' ';
							echo $users->surname;
						?>
					</h2>
					<?php 
						$currentUserImage = R::findOne( 'images', "`user_id`=?", array($_SESSION['logged_id']));
						$imagePath=$currentUserImage->path;
						echo '<img src="'. $imagePath .'" alt="avatar" class="user__photo" width="204" height="204">'; 
					?>
					<!--заменяем фотографию, если уже есть какая-то-->
					<?php if(R::count('images',"user_id = ?", array($_SESSION['logged_id']))>0): ?>
					<div class="user__wrapper">
						<span class="user__edit button">Редактировать</span>
					</div>
					<div class="user__wrapper example-3">
						<form class="user__photo-menu form-group" action="addimages.php" method="post" enctype="multipart/form-data"> 
						<label for="custom-file-upload" class="filupp user__file-element user__choose-label">
							<span class="filupp-file-name js-value">Загрузить файл</span>
							<input class="user__choose" value="1" type="file" id="custom-file-upload" name="image"> 
						</label>
						<input class="button user__file-element user__accept-edit" type="submit" value="Применить изменения" name="reupload"> 
						<input class="button user__file-element user__del" type="submit" value="Удалить фотографию" name="delete">
						<span class="user__edit-cancel button">Отмена</span>
						</form> 
					</div>
					<?php else :?>
					<!--вставляем фотографию поумолчанию, если пользователь удалил фотку-->
					<?php
					 $images = R::dispense('images'); 
					 $images->name= "nophoto.png"; 
					 $images->path="img/cab/nophoto.png"; 
					 $images->user_id=$_SESSION['logged_id'];
					 R::store($images); 
					 $_SESSION['file_name'] = "nophoto.png";
					?>
					<!--загружаем фотографию в первый раз-->
					<form action="addimages.php" method="post" enctype="multipart/form-data"> 
					<input type="file" name="image"> 
					<input type="submit" value="Загрузить фотографию" name="upload"> 
					</form> 
					<?php endif;?>
					<h3 class="user__experience">Танцевальный стаж</h3>
					<span class="user__experience">
						<?php 
							$users = R::load('users', $_SESSION['logged_id']);
							$year = $users->beginning;
							$current_year = date('Y');
							echo $current_year - $year - 1;
							echo ' лет'
						?>
					</span>
			</div>
		</section>

		<section class="favorites">
			<div class="favorites__container">
				<h2 class="favorites__title">Избранное</h2>
				<div class="favorites__slider">
						<?php
						 $favorites = R::findLike('favorites', array('user' => array($_SESSION["logged_id"])));
						 foreach ($favorites as $favVideo) {
						 	$videoId = $favVideo->video;
						 	$ourVideo = R::load('videos', $videoId);
						 	echo '<div class="favorites__block-slider">
						 					<div class="favorites__element-slider">
						 						<div class="favorites__video-slider">' . $ourVideo->path . '</div>
						 						<div class="favorites__wrapper">
						 							<form class="favorites__del-form" action="deletefav.php" method="post"> 
						 								<input type="hidden" value="'. $favVideo->id .'" name="favVideoId">
						 								<input class="favorites__del button" type="submit" value="Убрать из избранных" name="deleteFav">
						 							</form> 
						 						</div>
						 						<div class="favorites__wrapper">
						 				 			<p class="favorites__name-slider"> ' . $ourVideo->name . ' </p>
						 				 			<p class="favorites__descr-slider"> ' . $ourVideo->descr . ' </p>
						 						</div>
						 					</div>
						 			 </div>';		
						 } 
						?>
			</div>
		</section>
	</main>

	<footer class="footer">
		<div class="footer__background">
			<div class="footer__wrapper">
				<p class="footer__text">(с) Nuthing But Selena</p>
			</div>
		</div>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="slick/slick.min.js"></script>
</body>
</html>