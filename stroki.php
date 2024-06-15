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
    <title>Строки</title>
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
            <h2>Строки. Базовые операции</h2>
            <p>Конкатенация (сложение)</p>
    <div class="primer">
        <p> S1 = 'spam'</p>
        <p>S2 = 'eggs'</p>
        <p>print(S1 + S2)</p>
        <p>'spameggs'</p>
    </div>
    <p>Дублирование строки</p>
    <div class="primer">
        <p>  print('spam' * 3)</p>
        <p>spamspamspam</p>
    </div>
    <p>Длина строки (функция len)</p>
    <div class="primer">
        <p>  len('spam')</p>
        <p>4</p>
    </div>
    <p>Доступ по индексу</p>
    <div class="primer">
        <p>  S = 'spam'</p>
        <p>S[0]</p>
        <p>  's'</p>
        <p>S[2]</p>
        <p>  'a'</p>
        <p>S[-2]</p>
        <p>'a'</p>
    </div>
    <p>Как видно из примера, в Python возможен и доступ по отрицательному индексу, при этом отсчет идет от конца строки.</p>
    <p>Извлечение среза</p>
    <p>Оператор извлечения среза: [X:Y]. X – начало среза, а Y – окончание;
символ с номером Y в срез не входит. По умолчанию первый индекс равен 0, а второй - длине строки.</p>
    <div class="primer">
    <p>  s = 'spameggs'</p>
        <p>s[3:5]</p>
        <p>  'me'</p>
        <p>s[2:-2]</p>
        <p>  'ameg'</p>
        <p>s[:6]</p>
        <p>'spameg'</p>
        <p>s[1:]</p>
        <p>'pameggs'</p>
        <p>s[:]</p>
        <p>'spameggs'</p>
    </div>
    <p>Кроме того, можно задать шаг, с которым нужно извлекать срез.</p>
    <div class="primer">
    <p>  s = 'spameggs'</p>
        <p>s[::-1]</p>
        <p>  'sggemaps'</p>
        <p>s[3:5:-1]</p>
        <p> ''</p>
        <p>s[2::2]</p>
    </div>

    <h2>Другие функции и методы строк</h2>
<p>При вызове методов необходимо помнить, что строки в Python относятся к категории неизменяемых последовательностей, то есть все функции и методы могут лишь создавать новую строку.</p>
    <div class="primer">
        <p> s = 'spam'/p>
        <p>s[1] = 'b'</p>
        <p>Traceback (most recent call last):</p>
        <p> File "", line 1, in</p>
        <p> s[1] = 'b'</p>
        <p>TypeError: 'str' object does not support item assignment</p>
        <p>s = s[0] + 'b' + s[2:]</p>
        <p>s</p>
        <p>'sbam'</p>
    </div>
    <p>Поэтому все строковые методы возвращают новую строку, которую потом следует присвоить переменной.</p>


    <h2>Таблица "Функции и методы строк"</h2>
<div class="table-wrapper">
    <table border="1" class="docutils">
        <thead valign="bottom">
            <tr>
                <th class="head">Функция или метод</th>
                <th class="head">Назначение</th>
            </tr>
        </thead>
        <tbody valign="top">
            <tr>
                <td><b>S = 'str'; S = "str"; S = '''str'''; S = """str"""</b></td>
                <td><a href="https://pythonworld.ru/tipy-dannyx-v-python/stroki-literaly-strok.html" target="_blank">Литералы строк</a></td>
            </tr>
            <tr>
                <td><b>S = "s\np\ta\nbbb"</b></td>
                <td>Экранированные последовательности</td>
            </tr>
            <tr>
                <td><b>S = r"C:\temp\new"</b></td>
                <td>Неформатированные строки (подавляют экранирование)</td>
            </tr>
            <tr>
                <td><b>S = b"byte"</b></td>
                <td>Строка <a href="https://pythonworld.ru/tipy-dannyx-v-python/bajty-bytes-i-bytearray.html" target="_blank">байтов</a></td>
            </tr>
            <tr>
                <td><b>S1 + S2</b></td>
                <td>Конкатенация (сложение строк)</td>
            </tr>
            <tr>
                <td><b>S1 * 3</b></td>
                <td>Повторение строки</td>
            </tr>
            <tr>
                <td><b>S[i]</b></td>
                <td>Обращение по индексу</td>
            </tr>
            <tr>
                <td><b>S[i:j:step]</b></td>
                <td>Извлечение среза</td>
            </tr>
            <tr>
                <td><b>len</b>(S)</td>
                <td>Длина строки</td>
            </tr>
            <tr>
                <td><b>S.find</b>(str, [start],[end])</td>
                <td>Поиск подстроки в строке. Возвращает номер первого вхождения или -1</td>
            </tr>
            <tr>
                <td><b>S.rfind</b>(str, [start],[end])</td>
                <td>Поиск подстроки в строке. Возвращает номер последнего вхождения или -1</td>
            </tr>
            <tr>
                <td><b>S.index</b>(str, [start],[end])</td>
                <td>Поиск подстроки в строке. Возвращает номер первого вхождения или вызывает ValueError</td>
            </tr>
            <tr>
                <td><b>S.rindex</b>(str, [start],[end])</td>
                <td>Поиск подстроки в строке. Возвращает номер последнего вхождения или вызывает ValueError</td>
            </tr>
            <tr>
                <td><b>S.replace</b>(шаблон, замена[, maxcount])</td>
                <td>Замена шаблона на замену. maxcount ограничивает количество замен</td>
            </tr>
            <tr>
                <td><b>S.split</b>(символ)</td>
                <td>Разбиение строки по разделителю</td>
            </tr>
            <tr>
                <td><b>S.isdigit</b>()</td>
                <td>Состоит ли строка из цифр</td>
            </tr>
            <tr>
                <td><b>S.isalpha</b>()</td>
                <td>Состоит ли строка из букв</td>
            </tr>
            <tr>
                <td><b>S.isalnum</b>()</td>
                <td>Состоит ли строка из цифр или букв</td>
            </tr>
            <tr>
                <td><b>S.islower</b>()</td>
                <td>Состоит ли строка из символов в нижнем регистре</td>
            </tr>
            <tr>
                <td><b>S.isupper</b>()</td>
                <td>Состоит ли строка из символов в верхнем регистре</td>
            </tr>
            <tr>
                <td><b>S.isspace</b>()</td>
                <td>Состоит ли строка из неотображаемых символов (пробел, символ перевода страницы ('\f'), "новая строка" ('\n'), "перевод каретки" ('\r'), "горизонтальная табуляция" ('\t') и "вертикальная табуляция" ('\v'))</td>
            </tr>
            <tr>
                <td><b>S.istitle</b>()</td>
                <td>Начинаются ли слова в строке с заглавной буквы</td>
            </tr>
            <tr>
                <td><b>S.upper</b>()</td>
                <td>Преобразование строки к верхнему регистру</td>
            </tr>
            <tr>
                <td><b>S.lower</b>()</td>
                <td>Преобразование строки к нижнему регистру</td>
            </tr>
            <tr>
                <td><b>S.startswith</b>(str)</td>
                <td>Начинается ли строка S с шаблона str</td>
            </tr>
            <tr>
                <td><b>S.endswith</b>(str)</td>
                <td>Заканчивается ли строка S шаблоном str</td>
            </tr>
            <tr>
                <td><b>S.join</b>(список)</td>
                <td>Сборка строки из списка с разделителем S</td>
            </tr>
            <tr>
                <td><b>ord</b>(символ)</td>
                <td>Символ в его код ASCII</td>
            </tr>
            <tr>
                <td><b>chr</b>(число)</td>
                <td>Код ASCII в символ</td>
            </tr>
            <tr>
                <td><b>S.capitalize</b>()</td>
                <td>Переводит первый символ строки в верхний регистр, а все остальные в нижний</td>
            </tr>
            <tr>
                <td><b>S.center</b>(width, [fill])</td>
                <td>Возвращает отцентрованную строку, по краям которой стоит символ fill (пробел по умолчанию)</td>
            </tr>
            <tr>
                <td><b>S.count</b>(str, [start],[end])</td>
                <td>Возвращает количество непересекающихся вхождений подстроки в диапазоне [начало, конец] (0 и длина строки по умолчанию)</td>
            </tr>
            <tr>
                <td><b>S.expandtabs</b>([tabsize])</td>
                <td>Возвращает копию строки, в которой все символы табуляции заменяются одним или несколькими пробелами, в зависимости от текущего столбца. Если TabSize не указан, размер табуляции полагается равным 8 пробелам</td>
            </tr>
            <tr>
                <td><b>S.lstrip</b>([chars])</td>
                <td>Удаление пробельных символов в начале строки</td>
            </tr>
            <tr>
                <td><b>S.rstrip</b>([chars])</td>
                <td>Удаление пробельных символов в конце строки</td>
            </tr>
            <tr>
                <td><b>S.strip</b>([chars])</td>
                <td>Удаление пробельных символов в начале и в конце строки</td>
            </tr>
            <tr>
                <td><b>S.partition</b>(шаблон)</td>
                <td>Возвращает кортеж, содержащий часть перед первым шаблоном, сам шаблон, и часть после шаблона. Если шаблон не найден, возвращается кортеж, содержащий саму строку, а затем две пустых строки</td>
            </tr>
            <tr>
                <td><b>S.rpartition</b>(sep)</td>
                <td>Возвращает кортеж, содержащий часть перед последним шаблоном, сам шаблон, и часть после шаблона. Если шаблон не найден, возвращается кортеж, содержащий две пустых строки, а затем саму строку</td>
            </tr>
            <tr>
                <td><b>S.swapcase</b>()</td>
                <td>Переводит символы нижнего регистра в верхний, а верхнего – в нижний</td>
            </tr>
            <tr>
                <td><b>S.title</b>()</td>
                <td>Первую букву каждого слова переводит в верхний регистр, а все остальные в нижний</td>
            </tr>
            <tr>
                <td><b>S.zfill</b>(width)</td>
                <td>Делает длину строки не меньшей width, по необходимости заполняя первые символы нулями</td>
            </tr>
            <tr>
                <td><b>S.ljust</b>(width, fillchar="&nbsp;")</td>
                <td>Делает длину строки не меньшей width, по необходимости заполняя последние символы символом fillchar</td>
            </tr>
            <tr>
                <td><b>S.rjust</b>(width, fillchar="&nbsp;")</td>
                <td>Делает длину строки не меньшей width, по необходимости заполняя первые символы символом fillchar</td>
            </tr>
            <tr>
                <td><b>S.format</b>(*args, **kwargs)</td>
                <td><a href="https://pythonworld.ru/osnovy/formatirovanie-strok-metod-format.html" target="_blank">Форматирование строки</a></td>
            </tr>
        </tbody>
    </table>
</div>
            <h2>Посмотрите видео</h2>
            <iframe width="677" height="392" src="https://www.youtube.com/embed/GmMD6gQYWe4" title="Урок 11 Строки и их методы Python" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>Пройдите тест</h2>
            <iframe src="https://forms.yandex.ru/cloud/665deed784227c13a4888d2c/?iframe=1" frameborder="0" name="ya-form-665deed784227c13a4888d2c" width="650"></iframe>
                <div class="support_5">
<a class="circle blue" data-text="Назад" href="kort.php">Назад</a>
<a class="circle blue" data-text="Далее" href="funk.php">Далее</a>
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