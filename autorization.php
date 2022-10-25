<?php
	require "db.php";
	$data = $_POST;
?>
<?php if( isset($data['do_login'])) :?>	
<?php 
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
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
	 <?php if($user) :?>	
	 <?php if(password_verify($data['password'], $user->password)) :?>
	 <?php	
	 	$_SESSION['logged_user'] = $user;
	 	$_SESSION['logged_id'] = $user->id; 
	 ?>
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
			<div class="header__wrapper">
				<img src="img/header/img.png" alt="photo" class="header__img">
				<div class="header__info">
					<h1 class="header__title">
						Информационный портал
						по истории Брейк Данса
						на территории РФ
					</h1>
					<p class="header__descr">
						На нашем сайте вы найдете информацию о том, что такое брейк данс, о том как он развивался, сможете сами попробовать и научиться базовым 
						элементам. 
					</p>
					<a href="lessons.php" class="header__button button">Начать</a>
				</div>
			</div>
		</div>
	</header>
	
	<main class="main">

		<section class="offer">
			<div class="offer__container">
				<div class="offer__info">
					<h2 class="offer__title">
						что мы можем вам
						предложить
					</h2>
					<p class="offer__descr">
						Мы обеспечим вам погружение с головой в мир Брейк-данса.  
						На нашем портале: история зарождения Брейк данса, обучающие материалы и новости.
					</p>
					<a href="literature.php" class="offer__button button">Смотреть больше</a>
				</div>
				<div class="offer__block">
					<div class="offer__block-item">
						<img src="img/offer/1.png" alt="1" class="offer__img" width="50" height="50">
						<span class="offer__name">История</span>
						<p class="offer__text">
							Узнайте, откуда пошли истоки Брейк Данса, как он развивался и его путь на территории Российской Федерации
						</p>
					</div>
					<div class="offer__block-item">
						<img src="img/offer/2.png" alt="2" class="offer__img" width="50" height="50">
						<span class="offer__name">Обучение</span>
						<p class="offer__text">
							На нашем образовательном портале,  вы не только можете узнать об истории 
						</p>
					</div>
					<div class="offer__block-item">
						<img src="img/offer/4.png" alt="4" class="offer__img" width="50" height="50">
						<span class="offer__name">Обратная связь</span>
						<p class="offer__text">
							Напишите нам и получите ответ, подписывайтесь на уведомления, чтобы не пропустить новые посты
						</p>
					</div>
				</div>
				<a href="literature.php" class="offer__button-mobile button">Смотреть больше</a>
			</div>
		</section>

		<section class="galary">
			<div class="galary__container">
				<h2 class="galary__title">Фото Галерея</h2>
				<span class="galary__subtitle">ИСТОРИЯ В КАРТИНКАХ</span>
				<span class="galary__descr">Брейк данс 1980-2000</span>
				<div class="galary__photo">
					<img src="img/galary/1.png" alt="1" class="galary__photo-element" id="galary__photo-element-1" width="395" height="270">
					<img src="img/galary/1.png" alt="1" class="galary__photo-element_mobile" id="galary__photo-element-1_mobile" width="1028" height="760">
					<img src="img/galary/2.png" alt="2" class="galary__photo-element" id="galary__photo-element-2" width="395" height="270">
					<img src="img/galary/2.png" alt="2" class="galary__photo-element_mobile" id="galary__photo-element-2_mobile" width="1028" height="760">
					<img src="img/galary/3.png" alt="3" class="galary__photo-element" id="galary__photo-element-3" width="395" height="270">
					<img src="img/galary/3.png" alt="3" class="galary__photo-element_mobile" id="galary__photo-element-3_mobile" width="1028" height="760">
					<img src="img/galary/4.png" alt="4" class="galary__photo-element" id="galary__photo-element-4" width="395" height="270">
					<img src="img/galary/4.png" alt="4" class="galary__photo-element_mobile" id="galary__photo-element-4_mobile" width="1028" height="760">
					<img src="img/galary/5.png" alt="5" class="galary__photo-element" id="galary__photo-element-5" width="395" height="270">
					<img src="img/galary/5.png" alt="5" class="galary__photo-element_mobile" id="galary__photo-element-5_mobile" width="1028" height="760">
					<img src="img/galary/6.png" alt="6" class="galary__photo-element" id="galary__photo-element-6" width="395" height="270">
					<img src="img/galary/6.png" alt="6" class="galary__photo-element_mobile" id="galary__photo-element-6_mobile" width="1028" height="760">
				</div>
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
		</div>
	</header>

	<main class="main">
		<section class="autorization">
			<div class="autorization__container">
				<?php
						$errors[]='Неверно введен пароль';
							if (!empty($errors))
								{
							echo '<div class="autorization__errors" style="color: red;">'.array_shift($errors).'</div>
						<hr>';
								}
				?>
				<h1 class="autorization__title">Авторизация</h1>
				<form action="autorization.php" method="POST" class="autorization__form">
					<label for="login" class="autorization__name-label">
						<span class="autorization__name">Логин</span>
						<input type="text" name="login" class="autorization__field-name" placeholder="Login" <?php echo @$data['login'];?>>
					</label>
					<label for="password" class="autorization__password-label">
						<span class="autorization__password">Пароль</span>
						<input type="password" name="password" class="autorization__field-password" placeholder="Password" <?php echo @$data['password'];?>>
					</label>
					<input type="submit" class="autorization__submit button" name ="do_login" value="войти">
				</form>
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

	<?php endif; ?>
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
		</div>
	</header>

	<main class="main">
		<section class="autorization">
			<div class="autorization__container">
				<?php
					$errors[]='Пользователь с таким логином не найден';
					if (!empty($errors))
					{
						echo '<div class="autorization__errors" style="color: red;">'.array_shift($errors).'</div>';
					}
				?>
				<h1 class="autorization__title">Авторизация</h1>
				<form action="autorization.php" method="POST" class="autorization__form">
					<label for="login" class="autorization__name-label">
						<span class="autorization__name">Логин</span>
						<input type="text" name="login" class="autorization__field-name" placeholder="Login" <?php echo @$data['login'];?>>
					</label>
					<label for="password" class="autorization__password-label">
						<span class="autorization__password">Пароль</span>
						<input type="password" name="password" class="autorization__field-password" placeholder="Password" <?php echo @$data['password'];?>>
					</label>
					<input type="submit" class="autorization__submit button" name ="do_login" value="войти">
				</form>
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
		
		<?php endif; ?>	
		<?php else : ?>
		
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Break Dance Education</title>
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/fonts.css">
		</head>
		<body>
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
		</div>
	</header>

	<main class="main">
		<section class="autorization">
			<div class="autorization__container">
				<h1 class="autorization__title">Авторизация</h1>
				<form action="autorization.php" method="POST" class="autorization__form">
					<label for="login" class="autorization__name-label">
						<span class="autorization__name">Логин</span>
						<input type="text" name="login" class="autorization__field-name" placeholder="Login" <?php echo @$data['login'];?>>
					</label>
					<label for="password" class="autorization__password-label">
						<span class="autorization__password">Пароль</span>
						<input type="password" name="password" class="autorization__field-password" placeholder="Password" <?php echo @$data['password'];?>>
					</label>
					<input type="submit" class="autorization__submit button" name ="do_login" value="войти">
				</form>
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

	<?php endif; ?>	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>