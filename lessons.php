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
</head>
<body>
<?php if( isset($_SESSION['logged_user']) ) :?>

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
			<h1 class="header__title-lessons">Научись танцевать брейк данс Занимайся по видео!</h1>
		</div>
	</header>

	<main class="main">
		<section class="lessons">
			<div class="lessons__container">
				<?php if($_SESSION['logged_id']== '1'  ) :?>
				<div class="lessons__add">
					<form class="lessons__add-form" action="addvideos.php" method="post">
						<label for="video-name" class="lessons__add-name-label">
							Название
							<input class="lessons__add-name" type="text" name="videoName" id="video-name">
						</label>
						<label for="video-descr" class="lessons__add-descr-label">
							Описание
							<input class="lessons__add-descr" type="textarea" id="video-descr" name="videoDescr">
						</label>
						<label for="video-frame" class="lessons__add-frame-label">
							Ссылка на видео
							<input class="lessons__add-frame" type="textarea" id="video-frame" name="videoFrame">
						</label>
						<input class="lessons__upload button" type="submit" value="Загрузить" name="upload">
					</form> 
				</div>
				<?php endif; ?>
				<?php
						$videos = R::findCollection('videos');
						while($video = $videos->next() ){	
							$videosPath = $video->path;
							$videoId = $video->id;
							echo '<div class="lessons__block">
											<div class="lessons__video">' . $videosPath . '</div>
											<div class="lessons__wrapper">
											 <p class="lessons__name"> ' . $video->name . ' </p>
											 <p class="lessons__descr"> ' . $video->descr . ' </p>
											</div>
										</div>
										<form class="lessons__fav-form" action="addvideos.php" method="post">
											<input type="hidden" value="'. $_SESSION["logged_id"] .'" name="userId">
											<input type="hidden" value="'. $videoId .'" name="videoId">
											<input class="lessons__fav button" type="submit" value="Добавить в избранное" name="favorite">
										</form>';

							if($_SESSION['logged_id']== '1' ){
								echo '<div class="lessons__wrapper">
												<form class="lessons__del-form" action="addvideos.php" method="post"> 
													<input type="hidden" value="'. $videoId .'" name="videoId">
													<input class="lessons__del button" type="submit" value="Удалить" name="delete">
												</form> 
											</div>'; 
							}				
						}
					?>
		</section>
<?php else : ?>
	<header class="header">
		<div class="header__background">
			<a href="autorization.php" class="header__entrance button">Войти</a>
			<a href="registration.php" class="header__registration button">Регистрация</a>
		</div>
		<div class="header__container">
			<ul class="header__menu">
				<a href="index.php" class="header__menu-item-link"><li class="header__menu-item">Главная</li></a>
				<a href="lessons.php" class="header__menu-item-link"><li class="header__menu-item">Видео уроки</li></a>
				<a href="literature.php" class="header__menu-item-link"><li class="header__menu-item">Литература</li></a>
				<a href="quiz/index.php" class="header__menu-item-link"><li class="header__menu-item">Тест</li></a>
			</ul>
			<h1 class="header__title-lessons">Научись танцевать брейк данс Занимайся по видео!</h1>
		</div>
	</header>

	<main class="main">
		<section class="lessons">
			<div class="lessons__container">
				<?php
						$videos = R::findCollection('videos');
						while($video = $videos->next() ){	
							$videosPath = $video->path;
							$videoId = $video->id;
							echo '<div class="lessons__block">
											<div class="lessons__video">' . $videosPath . '</div>
											<div class="lessons__wrapper">
											 <p class="lessons__name"> ' . $video->name . ' </p>
											 <p class="lessons__descr"> ' . $video->descr . ' </p>
											</div>
										</div>
										<form class="lessons__fav-form" action="addvideos.php" method="post">
											<input type="hidden" value="'. $_SESSION["logged_id"] .'" name="userId">
											<input type="hidden" value="'. $videoId .'" name="videoId">
										</form>';			
						}
					?>
			</div>
		</section>
	</main>
<?php endif; ?>
	<footer class="footer">
		<div class="footer__background">
			<div class="footer__wrapper">
				<p class="footer__text">(с) Nuthing But Selena</p>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>