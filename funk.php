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
    <title>Функции</title>
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
            <h2>Функции и их аргументы</h2>
            <h2>Именные функции, инструкция def</h2>
            <p>Функция в python - объект, принимающий аргументы и возвращающий значение. Обычно функция определяется с помощью инструкции def.</p>
            <p>Определим простейшую функцию:</p>
    <div class="primer">
        <p> def add(x, y):</p>
        <p>return x + y</p>
    </div>
    <p>Инструкция return говорит, что нужно вернуть значение. В нашем случае функция возвращает сумму x и y.</p>
    <p>Теперь мы ее можем вызвать:</p>
    <div class="primer">
        <p>add(1, 10)</p>
        <p>11</p>
        <p>  add('abc', 'def')</p>
        <p>'abcdef'</p>
    </div>
    <p>Функция может быть любой сложности и возвращать любые объекты (списки, кортежи, и даже функции!):</p>
    <div class="primer">
        <p> def newfunc(n):</p>
        <p> def myfunc(x):</p>
        <p>  return x + n</p>
        <p> return myfunc</p>
        <p>  new = newfunc(100)  # new - это функция</p>
        <p>new(200)</p>
        <p>300</p>
    </div>
    <p>Функция может и не заканчиваться инструкцией return, при этом функция вернет значение None:</p>
    <div class="primer">
        <p>  def func():</p>
        <p> pass</p>
        <p>  print(func())</p>
        <p>None</p>
    </div>
    <h2>Аргументы функции</h2>
    <p>Функция может принимать произвольное количество аргументов или не принимать их вовсе. Также распространены функции с произвольным числом аргументов, функции с позиционными и именованными аргументами, обязательными и необязательными.</p>
    <div class="primer">
    <p> def func(a, b, c=2): # c - необязательный аргумент</p>
        <p>return a + b + c</p>
        <p>  func(1, 2)  # a = 1, b = 2, c = 2 (по умолчанию)</p>
        <p>5</p>
        <p>  func(1, 2, 3)  # a = 1, b = 2, c = 3</p>
        <p>6</p>
        <p>func(a=1, b=3)  # a = 1, b = 3, c = 2</p>
        <p>6</p>
        <p>func(a=3, c=6)  # a = 3, c = 6, b не определен</p>
        <p>Traceback (most recent call last):</p>
        <p>File "", line 1, in</p>
        <p> func(a=3, c=6)</p>
        <p>TypeError: func() takes at least 2 arguments (2 given)</p>
    </div>
    <p>Функция также может принимать переменное количество позиционных аргументов, тогда перед именем ставится *:</p>
    <div class="primer">
    <p> def func(*args):</p>
        <p>return args</p>
        <p> func(1, 2, 3, 'abc')</p>
        <p>(1, 2, 3, 'abc')</p>
        <p> func()</p>
        <p>()</p>
        <p>func(1)</p>
        <p>  (1,)</p>
    </div>
    <p>Как видно из примера, args - это кортеж из всех переданных аргументов функции, и с переменной можно работать также, как и с кортежем.</p>
    <p>Функция может принимать и произвольное число именованных аргументов, тогда перед именем ставится **:</p>
    <div class="primer">
    <p> def func(**kwargs):</p>
        <p> return kwargs</p>
        <p> func(a=1, b=2, c=3)</p>
        <p>{'a': 1, 'c': 3, 'b': 2}</p>
        <p> func()</p>
        <p>{}</p>
        <p>func(a='python')</p>
        <p>  {'a': 'python'}</p>
    </div>
    <p>В переменной kwargs у нас хранится словарь, с которым мы, опять-таки, можем делать все, что нам заблагорассудится.</p>
    <h2>Анонимные функции, инструкция lambda</h2>
<p>Анонимные функции могут содержать лишь одно выражение, но и выполняются они быстрее. Анонимные функции создаются с помощью инструкции lambda. Кроме этого, их не обязательно присваивать переменной, как делали мы инструкцией def func():</p>
    <div class="primer">
        <p>func = lambda x, y: x + y</p>
        <p>func(1, 2)</p>
        <p>3</p>
        <p>func('a', 'b')</p>
        <p> 'ab'</p>
        <p>(lambda x, y: x + y)(1, 2)</p>
        <p>3</p>
        <p>(lambda x, y: x + y)('a', 'b')</p>
        <p>'ab'</p>
    </div>
    <p>lambda функции, в отличие от обычной, не требуется инструкция return, а в остальном, ведет себя точно так же:</p>
    <div class="primer">
        <p>func = lambda *args: args</p>
        <p>func(1, 2, 3, 4)</p>
        <p>(1, 2, 3, 4)</p>
    </div>
            <h2>Посмотрите видео</h2>
            <iframe width="677" height="392" src="https://www.youtube.com/embed/6K5v4--G__U" title="Уроки Python с нуля / #12 – Функции (def, lambda)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>Пройдите тест</h2>
            <iframe src="https://forms.yandex.ru/cloud/665df747c417f315536e3f2e/?iframe=1" frameborder="0" name="ya-form-665df747c417f315536e3f2e" width="650"></iframe>

<a class="circle blue" data-text="Далее" href="stroki.php">Назад</a>

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