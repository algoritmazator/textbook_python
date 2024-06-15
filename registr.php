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
    <title>Решистрация</title>
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
    <section class="support_2">
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <input type="text" name="full_name" placeholder="Введите ФИО"><br>  
        <input type="text" name="login" placeholder="Введите логин"><br>
        <input type="email" name="email" placeholder="Введите адрес электронной почты"><br>
        <input type="file" name="avatar" placeholder="Загрузите аватар"><br>
        <input type="password" name="password" placeholder="Введите пароль"><br>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль"><br>
        <button type="submit">Войти</button><br>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
    ?>
    </form>
    </section>
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
</body>
</html>