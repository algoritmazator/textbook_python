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
    <title>Списки</title>
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
            <h2>Списки</h2>
            <p>Списки в Python - упорядоченные изменяемые коллекции объектов произвольных типов (почти как массив, но типы могут отличаться).</p>
            <p>Чтобы использовать списки, их нужно создать. Создать список можно несколькими способами. Например, можно обработать любой итерируемый объект (например, строку) встроенной функцией list:</p>
    <p>Пример</p>
    <div class="primer">
        <p>list('список')</p>
        <p>['с', 'п', 'и', 'с', 'о', 'к']</p>
    </div>
    <p>Список можно создать и при помощи литерала:</p>
<p>Пример</p>
<div class="primer">
        <p>s = []  # Пустой список</p>
        <p>l = ['s', 'p', ['isok'], 2]</p>
        <p>s</p>
        <p>[]</p>
        <p>l</p>
        <p>['s', 'p', ['isok'], 2]</p>
    </div>
    <p>Как видно из примера, список может содержать любое количество любых объектов (в том числе и вложенные списки), или не содержать ничего.</p>
    <p>И еще один способ создать список - это генераторы списков.
         Генератор списков - способ построить новый список, применяя выражение к каждому элементу последовательности. Генераторы списков очень похожи на цикл for.</p>
    <p>Пример</p>
    <div class="primer">
        <p>c = [c * 3 for c in 'list']</p>
        <p>  c</p>
        <p>['lll', 'iii', 'sss', 'ttt']</p>
    </div>
    <p>Возможна и более сложная конструкция генератора списков:</p>
    <p>Пример</p>
    <div class="primer">
        <p>c = [c * 3 for c in 'list' if c != 'i']</p>
        <p>  c</p>
        <p>['lll', 'sss', 'ttt']</p><br>
        <p> c = [c + d for c in 'list' if c != 'i' for d in 'spam' if d != 'a']</p>
        <p>c</p>
        <p>  ['ls', 'lp', 'lm', 'ss', 'sp', 'sm', 'ts', 'tp', 'tm']</p>
    </div>
    <p>Но в сложных случаях лучше пользоваться обычным циклом for для генерации списков.</p>
    <h2>Функции и методы списков</h2>
    <p>Для списков доступны основные встроенные функции, а также методы списков.</p>
    <div class="table-wrapper">
    <table border="1" class="docutils">
        <thead valign="bottom">
            <tr>
                <th class="head">Метод</th>
                <th class="head">Что делает</th>
            </tr>
        </thead>
        <tbody valign="top">
            <tr>
                <td><b>list.append</b>(x)</td>
                <td>Добавляет элемент в конец списка</td>
            </tr>
            <tr>
                <td><b>list.extend</b>(L)</td>
                <td>Расширяет список list, добавляя в конец все элементы списка L</td>
            </tr>
            <tr>
                <td><b>list.insert</b>(i, x)</td>
                <td>Вставляет на i-ый элемент значение x</td>
            </tr>
            <tr>
                <td><b>list.remove</b>(x)</td>
                <td>Удаляет первый элемент в списке, имеющий значение x. ValueError, если такого элемента не существует</td>
            </tr>
            <tr>
                <td><b>list.pop</b>([i])</td>
                <td>Удаляет i-ый элемент и возвращает его. Если индекс не указан, удаляется последний элемент</td>
            </tr>
            <tr>
                <td><b>list.index</b>(x, [start [, end]])</td>
                <td>Возвращает положение первого элемента со значением x (при этом поиск ведется от start до end)</td></tr><tr><td><b>list.count</b>(x)</td><td>Возвращает количество элементов со значением x</td></tr><tr><td><b>list.sort</b>([key=функция])</td><td>Сортирует список на основе функции</td></tr><tr><td><b>list.reverse</b>()</td><td>Разворачивает список</td></tr><tr><td><b>list.copy</b>()</td><td>Поверхностная копия списка</td>
            </tr>
            <tr>
                <td><b>list.clear</b>()</td>
                <td>Очищает список</td>
            </tr>
        </tbody>
    </table>
</div>
<p>Нужно отметить, что методы списков, в отличие от строковых методов, изменяют сам список, а потому результат выполнения не нужно записывать в эту переменную.</p>
<p>Пример</p>
    <div class="primer">
        <p>l = [1, 2, 3, 5, 7]</p>
        <p>l.sort()</p>
        <p>l</p><br>
        <p> [1, 2, 3, 5, 7]</p>
        <p>l = l.sort()</p>
        <p>  ['ls', 'lp', 'lm', 'ss', 'sp', 'sm', 'ts', 'tp', 'tm']</p>
        <p>  print(l)</p>
        <p>  None</p>
    </div>
    <h2>Посмотрите видео</h2>
    <iframe width="677" height="392" src="https://www.youtube.com/embed/-X2ubBdP2Ak" title="Уроки Python с нуля / #7 – Списки (list). Функции и их методы" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<h2>Пройдите тест</h2>
<iframe src="https://forms.yandex.ru/cloud/665caaa643f74f458b20e507/?iframe=1" frameborder="0" name="ya-form-665caaa643f74f458b20e507" width="650"></iframe>
    <div class="support_5">
<a class="circle blue" data-text="Назад" href="cycle.php">Назад</a>
<a class="circle blue" data-text="Далее" href="kort.php">Далее</a>
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
