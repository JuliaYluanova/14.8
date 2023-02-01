<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style_personaccount.css">
    <title>Вход</title>
</head>
<body>
    <section>
        <form action="auth.php" method="post">
            <label>Логин</label>
            <input  type="text" name="login" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="password" name="password"  placeholder="Введите пароль">
            <label>Укажите свой день рождения </label>
            <input type="date" name="datebirthday"  placeholder="Введите дату рождения">
            <button type="submit">Войти</button>

            <?php
                if (isset($_SESSION['message'])){
                    echo '<p class="message">'.$_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </section>
</body>
</html>

