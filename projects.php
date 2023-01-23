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
	<link rel="stylesheet" type="text/css" href="./assets/css/projects.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/details-styles.css?v=<?php echo rand(); ?>">
	<script type="application/javascript" src="./assets/js/jq.js?v=<?php echo rand(); ?>"></script>
	<script type="application/javascript" src="./assets/js/projects.js?v=<?php echo rand(); ?>"></script>
	<title>Portfolio</title>
</head>
<body>

<header>
	<nav>
		<div class="flex-space-between">
			<ul class="flex-space-between col-gap40px"> <!-- блок выровненный слева -->
				<li><a href="./index.php">Портфолио</a></li>
				<li><a class="active-page-text" href="#">Проекты</a></li>
				<li><a href="./contacts.php">Контакты</a></li>
			</ul>

			<ul class="flex-space-between col-gap40px">
				<li><a href="./login.php">Вход</a></li>
				<li><a href="#">Регистрация</a></li>
			</ul>
		</div>
	</nav>
</header>

<div class="wrapped-row">
    <div class="project">
		<img class="project-img" src="./assets/images/nig.jpg">
	</div>

</div>

</body>
</html>