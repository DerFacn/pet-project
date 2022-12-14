<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/normalize.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/details-styles.css?php echo rand(); ?>">
	<script type="application/javascript" src="./assets/js/jq.js"></script>
	<script src="./assets/js/main.js"></script>
	<title>Portfolio</title>
</head>
<body>

<header>
	<nav>
		<div class="flex-space-between">
			<ul class="flex-space-between col-gap40px"> <!-- блок выровненный слева -->
				<li><a class="header-link active-page-text" href="#">Портфолио</a></li>
				<li><a class="header-link" href="#">Проекты</a></li>
				<li><a class="header-link" href="#">Контакты</a></li>
			</ul>

			<ul class="flex-space-between col-gap40px">
				<li><a class="header-link" href="./login.php">Вход</a></li>
				<li><a class="header-link" href="#">Регистрация</a></li>
			</ul>
		</div>
	</nav>
</header>

<div class="light-green-bg">
	<div class="container">
		<div class="about-me">
			<img id="my-image" src="./assets/images/me.png"  alt="my photo">

			<div class="about-me-text">
				<p>Алекс Алексеев</p>
				<p>Мне Х лет</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="whatican-text">
		<!--Что я умею?-->
		whatican
	</div>
	<hr>
</div>

<div class="flex-center">
		<details>
			<summary>
				skill 1 
			</summary>

			<p> some text</p>
		</details>

	</div>
</div>

</body>
</html>