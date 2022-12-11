<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form method="post" action="./register.php">  
<!-- ТУТ ТОЖЕ УКАЖИ КАК ТЫ ПЕРЕИМЕНОВАЛ ФАЙЛ В АТТРИБУТЕ action -->
    <input name="username" type="text" placeholder="username">
    <input name="password" type="password" placeholder="password">
    <button type="submit"> войти </button>
<!-- ПОСЛЕ НАЖАТИЯ КНОПКИ НА URL ФАЙЛА
    ПРИЛЕТИТ POST-ЗАПРОС В КОТОРОМ ДАННЫЕ username со значением 'юзернейм указанный в форме'
    И password со значением из формы, ТОЛЬКО ТУТ НЕ ВХОД, А РЕГИСТРАЦИЯ -->
</form>

</body>
</html>