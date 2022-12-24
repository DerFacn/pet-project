<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./assets/css/normalize.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/basic-styles.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/details-styles.css?v=<?php echo rand(); ?>">
	<script type="application/javascript" src="./assets/js/jq.js?v=<?php echo rand(); ?>"></script>
	<script src="./assets/js/main.js?v=<?php echo rand(); ?>"></script>
	<title>Portfolio</title>
</head>
<body>

<header>
	<nav>
		<div class="flex-space-between">
			<ul class="flex-space-between col-gap40px"> <!-- блок выровненный слева -->
				<li><a class="header-link active-page-text" href="#">Портфолио</a></li>
				<li><a class="header-link" href="#">Проекты</a></li>
				<li><a class="header-link" href="./contacts.php">Контакты</a></li>
			</ul>

			<ul class="flex-space-between col-gap40px">
				<li><a class="header-link" href="./login.php">Вход</a></li>
				<li><a class="header-link" href="#">Регистрация</a></li>
			</ul>
		</div>
	</nav>
</header>
<!-- КУСОК СВЕРХУ ДОЛЖЕН БЫТЬ ТЕМПЛЕЙТОМ HEADER-А -->

<div class="light-green-bg">
	<div class="container">
		<div class="about-me">
			<img class="picture-of-me" src="./assets/images/me.png"  alt="my photo">

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
		<details class="skill-details">
			<summary class="skill-summary">
				skill 1 
			</summary>
			<div class="skill-content">
				content
			</div>
		</details>

	</div>
</div>
</body>
</html>