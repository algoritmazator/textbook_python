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
    <title>Циклы</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/free-icon-programing-2463478.png">
            <p>Изучение программирования</p>
        </div>
        <nav>
            <button><a href="index.html">На главную</a></button>
            <button><a href="profile.php">В личный кабинет</a></button>
        </nav>
    </header>
    <section class="tbp">
        <aside class="yroki">
            <a href="textbook_python.php">Знакомство и настройка</a>
            <a href="textbook_python_2.php">Переменные</a>
            <a href="usl_op.php">Условные операторы</a>
            <a href="cycle.php">Циклы</a>
            <a href="spiski.php">Списки</a>
            <a href="kort.php">Кортежи</a>
            <a href="stroki.php">Строки</a>
            <a href="funk.php">Функции</a>
        </aside>
        <atricle>
        <div class="text_inf">
            <h2>Циклы</h2>
            <h2>Цикл while</h2>
            <p>While - один из самых универсальных циклов в Python, поэтому довольно медленный. Выполняет тело цикла до тех пор, пока условие цикла истинно.</p>
    <p>Пример</p>
    <div class="primer">
        <p>i = 5</p>
        <p>while i < 15:</p>
        <p> print(i)</p>
        <p>i = i + 2</p>
    </div>
    <h2>Цикл for</h2>
    <p>Цикл for уже чуточку сложнее, чуть менее универсальный, но выполняется гораздо быстрее цикла while. Этот цикл проходится по любому итерируемому объекту (например строке или списку),
         и во время каждого прохода выполняет тело цикла.
</p>
<p>Пример</p>
<div class="primer">
        <p>for i in 'hello world':</p>
        <p>print(i * 2, end='')</p>
        <p>hheelllloo  wwoorrlldd</p>
    </div>
    <h2>Оператор continue</h2>
    <p>Оператор continue начинает следующий проход цикла, минуя оставшееся тело цикла (for или while)</p>
    <p>Пример</p>
    <div class="primer">
        <p>for i in 'hello world':</p>
        <p>  if i == 'o':</p>
        <p>continue</p>
        <p> print(i * 2, end='')</p>
        <p>hheellll  wwrrlldd</p>
    </div>
    <h2>Оператор break</h2>
    <p>Оператор break досрочно прерывает цикл.</p>
    <p>Пример</p>
    <div class="primer">
        <p>for i in 'hello world':</p>
        <p>  if i == 'o':</p>
        <p>break</p>
        <p>  print(i * 2, end='')</p>
        <p>hheellll</p>
    </div>
    <h2>Посмотрите видео</h2>
    <iframe width="677" height="392" src="https://www.youtube.com/embed/vMD6-jzgDvI" title="Уроки Python с нуля / #6 – Циклы и операторы в них (for, while)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<h2>Пройдите тест</h2>
<script src="https://forms.yandex.ru/_static/embed.js"></script><iframe src="https://forms.yandex.ru/cloud/665ca2ca5d2a064715b4cfd2/?iframe=1" frameborder="0" name="ya-form-665ca2ca5d2a064715b4cfd2" width="650"></iframe>
    <div class="support_5">
<a class="circle blue" data-text="Далее" href="usl_op.php">Назад</a>
<a class="circle blue" data-text="Далее" href="spiski.php">Далее</a>
            </div>
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