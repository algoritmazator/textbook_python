<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = md5($_POST['password']);
$check_admin = mysqli_query($connect, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_admin) > 0) {
    $admin = mysqli_fetch_assoc($check_admin);
    $_SESSION['admin'] = [
        "id" => $admin['id']
    ];
    header('Location: ../admin_panel.php');
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../vhod_admin.php');
}
?>
