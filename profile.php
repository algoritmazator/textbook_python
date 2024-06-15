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
    <title>Личный кабинет</title>
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
    <aside>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt=""><br>
                <h2 ><?= $_SESSION['user']['full_name'] ?></h2><br>
                <a href="#"><?= $_SESSION['user']['email'] ?></a><br> 
                <a href="vendor/logout.php" class="logout">Выход</a><br>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }
        ?>
    </aside>
    <article class="sup_3">
    <p>Мои курсы</p>
        <div class="s_3" id="my-courses">

        </div>
        <p>Начать изучение</p>
        <div id="available-courses" class="s_3">
            <button id="python-course" onclick="moveCourse(this)">
                <img src="img/free-icon-python-3098090.png" alt="Python">
                <p>Python</p>
                <a href="textbook_python.php">Начать</a>
            </button>
            <button class="not-available">
                <img src="img/free-icon-c-sharp-6132221.png" alt="C#">
                <p>C#</p>
                <a href="#">Начать</a>
                <div class="overlay">Пока не доступно</div>
            </button>
            <button class="not-available">
                <img src="img/free-icon-js-5968292.png" alt="JavaScript">
                <p>JavaScript</p>
                <a href="#">Начать</a>
                <div class="overlay">Пока не доступно</div>
            </button>
        </div>
    </article>
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
    <script src="script_kyrs.js"></script>
</body>
</html>