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
    <title>Условные операторы</title>
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
            <h2>Условные операторы</h2>
            <p>Условные конструкции предоставляют возможность выполнить проверку условия и в зависимости от результата выполнить определенный участок кода. За урок мы научимся использовать if-else,
             а также тернарный оператор в языке Python.</p>
<p>Они отвечают за изменение поведения программы в зависимости от входных параметров, определённых в проверке. Проще говоря: если будет число 1, то программа запустит скрипт one, а если число 2 – скрипт two. Внутри условных операторов могут быть другие такие же условия для уточнения полученных данных. В рамках одного оператора можно сразу проверить пару условий.
     Для того, чтобы проверить несколько условий нужно их разделить элементом and (логическое и).</p>
     <p>Есть возможность произвести проверку с помощью or - логическое или. При использовании данного оператора достаточным поводом для запуска
         сообщения «Заработало» станет соответствие хотя бы одного из условий. </p>
    <p>Пример</p>
    <div class="primer">
        <p>a = 2</p>
        <p>if a != 0 and a != 1:</p>
        <p>print ("Проверка сработала")</p>
    </div>
    <p>На экране будет показана запись лишь в том случае, когда переменная «a» не будет равна значению 0 и значению 1.
         То есть обе проверки в операторе должны выдать результат – true.
</p>
<div class="primer">
        <p>a = 1.1</p>
        <p>if a != 1.1 or a > 0:</p>
        <p>print ("Проверка сработала")</p>
    </div>
    <h2>Код для разбора</h2>
    <div class="primer">
        <p>user_data = int(input("Введите число: "))</p>
        <p>isHappy = True</p>
        <p>if isHappy or user_data == 6:</p>
        <p> print("User is happy")</p>
        <p>elif user_data == 5:</p>
        <p>print("Number is 5")</p>
        <p>elif user_data == 7:</p>
        <p>print("Number is 7")</p>
        <p>else:</p>
        <p>print("User is unhappy")</p>
    </div>
    <h2>Посмотрите видео</h2>
    <iframe width="800" height="400" src="https://www.youtube.com/embed/SUDNfS_0X-Q" title="Уроки Python с нуля / #5 – Условные операторы" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<h2>Пройдите тест</h2>
<iframe src="https://forms.yandex.ru/cloud/665ca2ca5d2a064715b4cfd2/?iframe=1" frameborder="0" name="ya-form-665ca2ca5d2a064715b4cfd2" width="650"></iframe>
    <div class="support_5">
<a class="circle blue" data-text="Назад" href="textbook_python_2.php">Назад</a>
<a class="circle blue" data-text="Далее" href="cycle.php">Далее</a>
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