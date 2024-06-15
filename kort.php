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
    <title>Кортежи</title>
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
            <h2>Кортежи(tuple)</h2>
            <p>Кортеж, по сути - неизменяемый список.</p>
<p>Отличия от списков</p>
<ul>
        <li>Защита от дурака. То есть кортеж защищен от изменений, как намеренных (что плохо), так и случайных (что хорошо).</li>
        <li>Меньший размер.</li>
    </ul>
    <div class="primer">
        <p> a = (1, 2, 3, 4, 5, 6)</p>
        <p>b = [1, 2, 3, 4, 5, 6]</p>
        <p>a.__sizeof__()</p>
        <p>36</p>
        <p> b.__sizeof__()</p>
        <p>44</p>
    </div>
    <ul>
        <li>Возможность использовать кортежи в качестве ключей словаря:</li>
    </ul>
    <div class="primer">
        <p> d = {(1, 1, 1) : 1}</p>
        <p>d</p>
        <p>{(1, 1, 1): 1}</p>
        <p>d = {[1, 1, 1] : 1}</p>
        <p> Traceback (most recent call last):</p>
        <p>File "", line 1, in</p>
        <p>d = {[1, 1, 1] : 1}</p>
        <p>TypeError: unhashable type: 'list'</p>
    </div>
    <h2>Как работать с кортежами</h2>
<p>Примерно так же, как и со списками.</p>
    <p>Создаем пустой кортеж:</p>
    <div class="primer">
        <p> a = tuple() # С помощью встроенной функции tuple()</p>
        <p>a</p>
        <p>()</p>
        <p>a = () # С помощью литерала кортежа</p>
        <p>a</p>
        <p>()</p>
    </div>
    <p>Создаем кортеж из одного элемента:</p>
      <div class="primer">
        <p> a = ('s')</p>
        <p>a</p>
        <p>'s'</p>
    </div>
    <p> Получилась строка. Но как же так? Мы же кортеж хотели! Как же нам кортеж получить?</p>
    <div class="primer">
        <p> a = ('s', )</p>
        <p>a</p>
        <p>('s',)</p>
    </div>
    <p> Все дело - в запятой. Сами по себе скобки ничего не значат, точнее, 
        значат то, что внутри них находится одна инструкция, 
        которая может быть отделена пробелами, переносом строк и прочим мусором.
         Кстати, кортеж можно создать и так:</p>
         <div class="primer">
        <p> a = 's',</p>
        <p>a</p>
        <p>('s',)</p>
    </div>
    <p> Но все же не увлекайтесь, и ставьте скобки, тем более, что бывают случаи, когда скобки необходимы.</p>
    <p> Ну и создать кортеж из итерируемого объекта можно с помощью все той же пресловутой функции tuple()</p>
    <div class="primer">
        <p> a = tuple('hello, world!')</p>
        <p>a</p>
        <p>('h', 'e', 'l', 'l', 'o', ',', ' ', 'w', 'o', 'r', 'l', 'd', '!')</p>
    </div>
    <h2>Операции с кортежами</h2>
            <p>Все операции над списками, не изменяющие список (сложение, умножение на число, методы index() и count() и некоторые другие операции). Можно также по-разному менять элементы местами и так далее.</p>
            <h2>Посмотрите видео</h2>
            <iframe width="677" height="392" src="https://www.youtube.com/embed/cQfu-hYo2o4" title="Уроки Python с нуля / #9 – Кортежи (tuple)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>Пройдите тест</h2>
<iframe src="https://forms.yandex.ru/cloud/665cb3b973cee74982f80060/?iframe=1" frameborder="0" name="ya-form-665cb3b973cee74982f80060" width="650"></iframe>
    <div class="support_5">
<a class="circle blue" data-text="Назад" href="spiski.php">Назад</a>
<a class="circle blue" data-text="Далее" href="stroki.php">Далее</a>
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
    <script src="https://forms.yandex.ru/_static/embed.js"></script>
</body>
</html>