<?php
    session_start();
    require_once 'vendor/connect.php';
    if (!isset($_SESSION['admin'])) {
        header('Location: index.html');
        exit();
    }
    $query = "SELECT id, full_name, email, avatar FROM users";
    $result = mysqli_query($connect, $query);
    
    $users = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    } else {
        $_SESSION['message'] = 'Ошибка: ' . mysqli_error($connect);
    }
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
    <title>Пользователи</title>
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
    <section class="support_4">
    <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Аватар</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['full_name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td>
                            <img src="<?= $user['avatar'] ? htmlspecialchars($user['avatar']) : 'img/default-avatar.png' ?>" alt="Avatar" width="50">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
    ?>
    </section>
    <a class="circle blue" data-text="Далее" href="admin_panel.php">Назад</a>
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