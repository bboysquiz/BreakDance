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
				<a href="cab.php" class="header__menu-item-link"><li class="header__menu-item">Личный кабинет</li></a>
				<a href="quiz/index.php" class="header__menu-item-link"><li class="header__menu-item">Тест</li></a>
			</ul>
		</div>
	</header>

	<main class="main">
		<section class="registration">
			<div class="registration__container">
				<?php
					$data = $_POST;
					if( isset($data['do_signup']))
					{
						$errors = array();
						if(trim($data['login']) == '')
						{
							$errors[] = 'Введите логин';
						}
						if(trim($data['email']) == '')
						{
							$errors[] = 'Введите Email-адрес';
						}
						if(($data['password']) == '')
						{
							$errors[] = 'Введите пароль';
						}
						if(($data['password_2']) != ($data['password']) )
						{
							$errors[] = 'Повторный пароль введен не верно';
						}
						if(R::count('users',"login = ?", array($data['login']))>0)
						{
							$errors[]='Пользователь с таким логином уже существует';
						}
						if(R::count('users',"email = ?", array($data['email']))>0)
						{
							$errors[]='Пользователь с таким email уже существует';
						}
						if(trim($data['name']) == '')
						{
							$errors[] = 'Введите ваше имя';
						}
						if(trim($data['surname']) == '')
						{
							$errors[] = 'Введите вашу фамилию';
						}
						if(trim($data['beginning']) == '')
						{
							$errors[] = 'Введите год начала вашей танцевальной карьеры';
						}
						if (empty($errors))
						{
						$user = R::dispense('users');
						$user->login=$data['login'];
						$user->email=$data['email'];
						$user->password= password_hash($data['password'], PASSWORD_DEFAULT);
						$user->name=$data['name'];
						$user->surname=$data['surname'];
						$user->beginning=$data['beginning'];
						$user->images=$data['images'];
						R::store($user);
						echo '<div class="registration__success" style="color: green;">Вы успешно зарегистрировались</div>';
						}
						else
						{
							echo '<div class="registration__errors" style="color: red;">'.array_shift($errors).'</div>';
						}
					}
				?>
					<h1 class="registration__title">Регистрация</h1>
					<form class="registration__form" action="registration.php" method="POST">		
						<label for="login" class="registration__label">
							<span class="registration__descr">Логин</span>
							<input class="registration__field" type="text" name="login" placeholder="Login" value="<?php echo @$data['login'];?>">
						</label>							
						<label for="email" class="registration__label">
							<span class="registration__descr">Email</span>
							<input class="registration__field" type="email" name="email" placeholder="Email" value="<?php echo @$data['email'];?>">
						</label>								
						<label for="password" class="registration__label">
							<span class="registration__descr">Пароль</span>
							<input class="registration__field" type="password" placeholder="Password" name="password">
						</label>						
						<label for="password_2" class="registration__label">
							<span class="registration__descr">Повторный пароль</span>
							<input class="registration__field" type="password" placeholder="Repeat password" name="password_2">
						</label>		
						<label for="name" class="registration__label">
							<span class="registration__descr">Имя</span>
							<input class="registration__field" type="text" placeholder="Name" name="name" value="<?php echo @$data['name'];?>">
						</label>						
						<label for="surname" class="registration__label">
							<span class="registration__descr">Фамилия</span>
							<input class="registration__field" type="text" placeholder="Surname" name="surname" value="<?php echo @$data['surname'];?>">
						</label>
						<label for="beginning" class="registration__label">
							<span class="registration__descr">Начало танцевальной карьеры</span>
							<input class="registration__field" type="text" placeholder="The year of dancing beginning" name="beginning" value="<?php echo @$data['beginning'];?>">
						</label>
					<input type="submit" class="registration__button button" name="do_signup" value="Зарегистрироваться">
				</form>	
				<form action="index.php">
					<input class="registration__button button" value="назад" type="submit">
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


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>