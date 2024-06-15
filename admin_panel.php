<?php
    session_start();
    require_once 'vendor/connect.php';
?>
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
    <title>Админпанель</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/free-icon-programing-2463478.png">
            <p>Изучение программирования</p>
        </div>
        <nav>
            <button><a href="index.html">Главная</a></button>
            <button onclick="scrollToSection('about')"><a href="index.html">О проекте</a></button>
            <button onclick="scrollToSection('study')"><a href="index.html">Начать изучение</a></button>
        </nav>
    </header>
    <section class="support_3">
    <article class="sup_3">

        <div class="s_4">
            <button>
                <img src="img/free-icon-team-5064984.png" alt="Пользователи">
                <p>Пользователи</p>
                <a href="users.php">Перейти</a>
            </button>
            <button>
                <img src="img/free-icon-test-4345398.png" alt="Тесты">
                <p>Тесты</p>
                <a href="https://forms.yandex.ru/cloud/admin">Перейти</a>
            </button>
            <button>
                <img src="img/free-icon-instructions-2618595.png" alt="Инструкция">
                <p>Инструкция</p>
                <a href="inst.php">Перейти</a>
            </button>
        </div>
       
    </article>
    
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
    ?>
 
    </section>
    <a class="circle red" data-text="Далее" href="logout_admin_panel.php">Выход</a>
    <footer>
        <div class="sup_f">
            <div class="logo">
                <img src="img/free-icon-programing-2463478.png">
                <p>Изучение программирования</p>
            </div>
            <div class="support_footer">
                <a href="">О проекте</a>
                <a href="">Начать изучение</a>
            </div>
        </div>
        <p>
            &#169; Все права защищены
        </p>
    </footer>
    <script src="script.js"></script>
    <script src="script_kyrs.js"></script>
</body>
</html>