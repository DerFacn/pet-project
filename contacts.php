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
	<link rel="stylesheet" type="text/css" href="./assets/css/contacts.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="./assets/css/details-styles.css?v=<?php echo rand(); ?>">
	<script type="application/javascript" src="./assets/js/jq.js?v=<?php echo rand(); ?>"></script>
	<script src="./assets/js/contacts.js?v=<?php echo rand(); ?>"></script>
	<title>Portfolio</title>
</head>
<body>

<header>
	<nav>
		<div class="flex-space-between">
			<ul class="flex-space-between col-gap40px"> <!-- блок выровненный слева -->
				<li><a target="_blank" href="./index.php">Портфолио</a></li>
				<li><a target="_blank" href="#">Проекты</a></li>
				<li><a target="_blank" class="active-page-text" href="#">Контакты</a></li>
			</ul>

			<ul class="flex-space-between col-gap40px">
				<li><a target="_blank" href="./login.php">Вход</a></li>
				<li><a target="_blank" href="#">Регистрация</a></li>
			</ul>
		</div>
	</nav>
</header>
<!-- КУСОК СВЕРХУ ДОЛЖЕН БЫТЬ ТЕМПЛЕЙТОМ HEADER-А -->

<div class="contacts-flex">
<a target="_blank" class="contact" href="google.com">
        <div class="social-logo">
            <img class="logo-pic" src="https://vk.com/favicon.ico" alt="VK icon">
        </div>
        <span class="social-text"> vk.com/derfacn </span>
    </a>
    <a target="_blank" class="contact" href="#">
        <div class="social-logo">
            <img class="logo-pic" src="https://www.instagram.com/favicon.ico" alt="INST icon">
        </div>
        <span class="social-text"> instagram.com/derfacn </span>
    </a>
    <a target="_blank" class="contact" href="#">
        <div class="social-logo">
            <img class="logo-pic" src="https://vk.com/favicon.ico" alt="VK icon">
        </div>
        <span class="social-text"> hello </span>
    </a>
    <a target="_blank" class="contact" href="#">
        <div class="social-logo">
            <img class="logo-pic" src="https://vk.com/favicon.ico" alt="VK icon">
        </div>
        <span class="social-text"> hello </span>
    </a>
    <a target="_blank" class="contact" href="#">
        <div class="social-logo">
            <img class="logo-pic" src="https://vk.com/favicon.ico" alt="VK icon">
        </div>
        <span class="social-text"> hello </span>
    </a>
    <a target="_blank" class="contact" href="#">
        <div class="social-logo">
            <img class="logo-pic" src="https://vk.com/favicon.ico" alt="VK icon">
        </div>
        <span class="social-text"> hello </span>
    </a>
</div>

</body>
</html>