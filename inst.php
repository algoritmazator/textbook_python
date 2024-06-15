<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/free-icon-programing-2463478.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Главная</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/free-icon-programing-2463478.png">
            <p>Изучение программирования</p>
        </div>
        <nav>
            <button onclick="scrollToSection('about')"><a href="">О проекте</a></button>
            <button onclick="scrollToSection('study')"><a href="">Начать изучение</a></button>
        </nav>
    </header>
    <section>
        <atricle class="inst">
        <div class="text_inf">
            <h2>Как делать тесты</h2>
            <p>Для создания тестов мы исплользуем сервис YandexForms. Это удобный современный сервис, позволяющий быстро создавать тесты и опросники. 
                Далее показаны основные настройки, на которые стоит обратить внимание:</p>
<p>Преходим в "Тесты и квизы" и ставим галочки на пункты "Показывать результат прохождения теста" и "Показывать правильные и неправильные ответы". Здесь же можно 
    настроить критерии оценивания.
</p>
    <img src="img/инструкция 1.jpg">
    <p>При надобности во вклаке дополнительно можно настроить сколько раз пользователь может пройим тест.</p>
<img src="img/инструкция2.jpg">
<a class="circle blue" data-text="Далее" href="admin_panel.php">Назад</a>
        </div>
        <div class=""></div>
        <div class="text_inf"></div>
    </section>
    <footer>
        <div class="sup_f">
            <div class="logo">
                <img src="img/free-icon-programing-2463478.png">
                <p>Изучение программирования</p>
            </div>
            <div class="support_footer">
                <button onclick="scrollToSection('about')"><a href="">О проекте</a></button>
                <button onclick="scrollToSection('study')"><a href="">Начать изучение</a></button>
            </div>
        </div>
        <p>
            &#169; Все права защищены
        </p>
    </footer>
    <script src="script.js"></script>
</body>
</html>