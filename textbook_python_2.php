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
    <title>Переменные</title>
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
            <h2>Переменные</h2>
            <p>Переменная — это простейшая именованная структура данных, в которой может быть сохранён промежуточный или конечный результат работы программы.</p>
<p>Переменную в Python создать очень просто — нужно присвоить некоторому идентификатору значение при помощи оператора присваивания «=». </p>
    <p>Пример</p>
    <div class="primer">
        <p>a = 10</p>
        <p>b = 3.1415926</p>
        <p>c = "Hello"</p>
        <p>d = [1, 2, 3]</p>
    </div>
    <p>В этом примере используются четыре переменные:</p>
    <ul>
        <li>переменная a хранит значение типа int (целое число),</li>
        <li>переменная b — типа float (действительное число),</li>
        <li>переменная c — типа str (строка),</li>
        <li>переменная d — типа list (список, в данном случае из трех целых чисел).</li>
    </ul>
<p>Никакого специального объявления переменных не требуется, первое присваивание
     переменной значения и является ее объявлением. Идентификатор в Python является "ссылкой" на хранимые в памяти данные.
    </p>
    <p>Python — язык с динамической типизацией: каждая переменная в каждый момент времени имеет определенный тип, но этот тип может меняться по ходу выполнения программы,
         достаточно просто присвоить ей новое значение другого типа.
    </p>
    <p>На самом деле переменная в python является лишь ссылкой на объект в памяти. При создании любой переменной (число, строка или массив) в неё записывается ссылка на объект, а сам объект находится где-то в оперативной памяти далеко от самой переменной со ссылкой. Таким образом, несколько переменных могут указывать на один объект, и при изменении объекта (например, списка)
         изменится результат обращения к нему с использованием каждой переменной.
    </p>
    <p>Происходящее при выполнении следующего кода схематично можно изобразить так:
    </p>
    <div class="primer">
        <p>arr = [1, 2, 3]</p>
    </div>
<img src="img/переменные.webp" width="400px">
<h2>Пройдите тест</h2>
<script src="https://forms.yandex.ru/_static/embed.js"></script><iframe src="https://forms.yandex.ru/cloud/6659d138d0468805469bed03/?iframe=1" frameborder="0" name="ya-form-6659d138d0468805469bed03" width="650"></iframe>
    <div class="support_5">
<a class="circle blue" data-text="Назад" href="textbook_python.php">Назад</a>
<a class="circle blue" data-text="Далее" href="usl_op.php">Далее</a>
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