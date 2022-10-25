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
		<div class="header__container-literature">
			<ul class="header__menu">
				<a href="index.php" class="header__menu-item-link"><li class="header__menu-item">Главная</li></a>
				<a href="lessons.php" class="header__menu-item-link"><li class="header__menu-item">Видео уроки</li></a>
				<a href="literature.php" class="header__menu-item-link"><li class="header__menu-item">Литература</li></a>
				<a href="cab.php" class="header__menu-item-link"><li class="header__menu-item">Личный кабинет</li></a>
				<a href="quiz/index.php" class="header__menu-item-link"><li class="header__menu-item">Тест</li></a>
			</ul>
			<h1 class="header__title-literature">История развития брейк данса в СССР</h1>
		</div>
	</header>
<?php else : ?>
	<header class="header">
		<div class="header__background">
			<a href="autorization.php" class="header__entrance button">Войти</a>
			<a href="registration.php" class="header__registration button">Регистрация</a>
		</div>
		<div class="header__container-literature">
			<ul class="header__menu">
				<a href="index.php" class="header__menu-item-link"><li class="header__menu-item">Главная</li></a>
				<a href="lessons.php" class="header__menu-item-link"><li class="header__menu-item">Видео уроки</li></a>
				<a href="literature.php" class="header__menu-item-link"><li class="header__menu-item">Литература</li></a>
				<a href="quiz/index.php" class="header__menu-item-link"><li class="header__menu-item">Тест</li></a>
			</ul>
			<h1 class="header__title-literature">История развития брейк данса в СССР</h1>
		</div>
	</header>
<?php endif; ?>
	<main class="main">
		<section class="literature">
			<div class="literature__container">
				<div class="literature__block">
					<p class="literature__text">
						Брейк-данс зародился в Нью-Йорке еще в конце 60-х годов,
						но обрёл настоящую популярность только в 80-е.
						В 1984 году с момента выхода на экраны американского
						фильма «Брейк-данс», танец начал набирать популярность
						и в Советском Союзе.
					</p>
					<img src="img/literature/1.png" alt="1" class="literature__photo" width="518" height="342">
				</div>
				<div class="literature__block">
					<img src="img/literature/2.png" alt="2" class="literature__photo" width="518" height="342">
					<p class="literature__text">
						Мировая волна увлечения хип-хоп культурой 
						не обошла стороной Советский Союз.
						Как и в случае с Европой, катализатором стали
						фильмы о танцах. Однако, существование 
						железного занавеса, и, как следствие, скудность
						информации, существенно повлияли на 
						развитие уличных танцев в нашей стране.
						В то время как Африка Бамбаатаа и 
						«Rock Steady Crew» колесили по всему миру,
						демонстрируя хип-хоп от самих создателей,
						в СССР могли попасть лишь редкие кассеты
						с записью фильмов.
					</p>
				</div>
				  <div class="literature__block">
					<p class="literature__text_big">
						Видеомагнитофонами обладали единицы – дипломаты, высокопоставленные чиновники,
						поэтому "брейк-данс" у нас в стране зародился в среде «золотой молодежи» и «особо прибли-
						женных» к ней. Интересную шутку сыграло отсутствие корректной информации о самой куль-
						туре, показанной в фильмах. В кинокартинах изображалась идеализированная сказка, имеющая
						малое отношение к уличной действительности в Америке. Именно эта романтическая 
						атмосфера заразила наших подростков, заставляя поверить в красивый миф, показанный на 
						экране видеомагнитофона. "Брейк-данс" стал чем-то невероятным и фантастическим, какой-то
						немыслимой отдушиной и свободой, параллельной реальностью внутри советской 
						действительности.
					</p>
					</div>
					<div class="literature__block">
					<p class="literature__text">
						Точкой отсчета можно считать 1983-84 годы.
						Первым человеком, который начал танцевать
						в СССР и демонстрировать брейк-данс вместе
						с электрик-буги на сцене для широких масс,
						был известный музыкант и лидер группы 
						«Арсенал» Алексей Козлов.

						В кафе «Молоко» в Москве проходили первые 
						батлы и фестивали. Также танцоров можно 
						было увидеть в клубе «Резонанс» и в кафе 
						«Колхида». Чуть позже брейк-данс занесли на
						Старый Арбат, где его можно увидеть и сегодня.
						Танец набирает популярность и появляется на
						советском киноэкране. 
						В 1985 году выходит фильм «Танцы на крыше»,
						а в 1986 фильм «Курьер», получивший любовь
						и признание широкой публики.
					</p>
					<img src="img/literature/3.png" alt="3" class="literature__photo" width="518" height="342">
					</div>
					<div class="literature__block">
					<img src="img/literature/4.png" alt="4" class="literature__photo" width="518" height="342">
					<p class="literature__text">
						Брейк-данс становится действительно 
						массовым видом танца, им повально «болеет»
						молодежь, образ танцора моден и притягателен
						в глазах подростков. С 1986 стартуют 
						многочисленные фестивали по всей стране. 
						Наиболее «культовым» становится «Папуга», 
						проводимый в Паланге. На него съезжались 
						тысячи танцоров со всего СССР!
					</p>
					</div>
					<div class="literature__block">
					<p class="literature__text">
						Очень многие современные диджеи, музыка-
						нты, теле- и радиоведущие отметились в рядах 
						поклонников брейк-данса. К 1988 году 
						популярность танца начинает спадать, а к де-
						вяностым о танце почти забывают, наступает 
						волна "танцевального рэпа", в которой 
						приняли участие многие танцоры
						 «первой волны».
					</p>
					<img src="img/literature/5.png" alt="5" class="literature__photo" width="518" height="342">
					</div>
					<div class="literature__block">
					<img src="img/literature/6.png" alt="6" class="literature__photo" width="518" height="342">
					<p class="literature__text">
						Пионерами и идеологами отечественного
						брейк-данса 90-х становиться команда 
						“Da Boogie Crew”. Усилиями этого коллектива 
						на радио появляется передача «Фристайл» о 
						танцах, в модном журнале «Птюч» ведется 
						рубрика о брейк-дансе. Начинают проходить 
						первые регулярные джемы в клубе «Гетто», 
						открывается первая школа брейк-данса.
					</p>
					</div>
					<div class="literature__block">
					<p class="literature__text">
						В 1998 на телевидение выходит видеоклип команды
						Da Boogie Crew «Вы хотели пати». Ролик снят 
						довольно незатейливо, на фоне расписанного 
						граффити бетонного забора ребята показывают
						 элементы верхнего и нижнего брейк-данса. Но этого
						 оказалось достаточно. За месяц клип занимает 
						второе место в рейтинге MTV Russia. Подростки чуть
						 не поголовно «начитывают» его! В течение очень 
						короткого времени брейком заболевает вся страна. 
						Причем повально и серьезно! Снова во дворах 
						начинают тренироваться на кусках оргалита 
						доморощенные танцоры.
					</p>
					<img src="img/literature/7.png" alt="7" class="literature__photo" width="518" height="342">
					</div>
					<div class="literature__block">
					<img src="img/literature/8.png" alt="8" class="literature__photo" width="518" height="342">
					<p class="literature__text">
						Другая московская команда «B.People» 
						начинает делать регулярные масштабные 
						джемы в ДК «Компрессор», чуть позже 
						проводит фестиваль “Open”, на который 
						съезжаются танцоры со всей страны. 
						Начинается мощная вторая волна 
						брейк-данса в России.
					</p>
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


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>