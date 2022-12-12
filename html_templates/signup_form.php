<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<form method="post" action="./login.php">  
<!-- ТУТ НУЖНО ПОДСТАВИТЬ ИМЯ ЭТОГО (РАНЕЕ ./LOGIN.PHP) 
    ЖЕ ФАЙЛА ПОСЛЕ СМЕНЫ .PHP НА ФОРМАТ DJANGO, НЕ УБИРАТЬ И НЕ МЕНЯТЬ "./"
    В ПУТИ К ФАЙЛУ  -->
    <input name="username" type="text" placeholder="username">
    <input name="password" type="password" placeholder="password">
    <button type="submit"> войти </button>
<!-- ПОСЛЕ НАЖАТИЯ КНОПКИ НА URL ФАЙЛА ./LOGIN.PHP ( НУ ИЛИ НА ТОТ КОТОРЫЙ ТЫ ПОСТАВИЛ ) 
    ПРИЛЕТИТ POST-ЗАПРОС В КОТОРОМ ДАННЫЕ username со значением 'юзернейм указанный в форме'
    И password со значением из формы -->
</form>

</body>
</html>