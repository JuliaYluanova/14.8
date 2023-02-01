<?php
session_start();
include_once 'profile.php';
include_once 'head.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>SPA-САЛОН</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

    <main>
    <div class="wrapper">
        <div class="container">
        <header>
            <h1>Licoris</h1>
            <ul class="menu">
            <a href="#">Главная</a>
            <a href="pages/face.php">Для лица</a>
            <a href="pages/telo.php">Для тела</a>
            <a href="pages/ruky.php">Для рук</a>
            <a href="pages/hair.php">Для волос</a>
            <?php
            if (isset($_SESSION['authorized'])) {
                echo '<div class="login">
                <a class="login_text">Приветствуем:' . ' ' . getCurrentUser() . '</a>
                <a class="log_out" href="logout.php">Выйти</a>
                </div>';
            } else {
                echo '<div class>
                <a class="sign_in" href="login.php">Войти</a>
             </div>';
            }
            ?>
</ul>
            </header>
            <?php
        if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
            echo '<h2 class = "user">Здравствуйте,' . ' ' . getCurrentUser() . '!</h2>';
            if ($_SESSION['checkDayBirth'] > 0) {
                echo '
                <div>
                <p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
                </div>';
            } else if ($_SESSION['checkDayBirth'] === 0) {
                echo '
                <div>
                <p> Поздравляем с Днем Рождения! Мы подготовили вам специальную акцию!</p>
                </div>';
            }
        };
        ?>
            <div class="sale">
            <?php if (isset($_SESSION['authorized']) && $_SESSION['checkDayBirth'] === 0) {
                        echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Скидка в честь Вашего Дня Рождения!</h2>
                                    <div class="action_card_text">
                                        <p>Скидка 10% на все услуги нашего Spa-салона!</p>
                                    </div>
                                </div>
                        </div>';
                    } ?>
                    <?php if($salet) { ?>
                    <div class="sale">
                    <p>Персональная скидка 5% на все закончивается через: <?php echo $hours . " часов ". $minutes ." минут ". $seconds ." секунд"; ?></p>
                    </div> 
                    <?php } ?>

                    <h2>Для лица</h2>
                    <div class="article-meta">
                    <a href="pages/face.php">Ознакомиться</a>
                    </div>
                    <img src="images/uhod_za_licom_i_telom5.jpg" >
                   
                    <h2>Для тела</h2>
                    <div class="article-meta">
                    <a href="pages/telo.php">Ознакомится</a>
                    </div>
                    <img src="images/ui374nj3blu5av9a7mabup0glz3z097c.jpg" >
                    
                    <h2>Для рук</h2>
                    <div class="article-meta">
                    <a href="pages/ruky.php">Ознакомиться</a>
                    </div>
                    <img src="images/23366466c0d83a40d202441aced1af93-1.jpg" >
                   
                    <h2>Для волос</h2>
                    <div class="article-meta">
                    <a href="pages/hair.php">Ознакомиться</a>
                    </div>
                    <img src="images/sunmag-3-spa-procedura-dlya-volos.jpg" >
            </div>
        </main>
    </div>
    <footer>
        <hr>
    <div class="links">
            <a href="#">Главная</a>
            <a href="pages/vacancies.php">Вакансии</a>
            <a href="pages/contacts.php">Контакты</a>
            <a href="pages/advertising.php">Акции</a>
            <a href="pages/about.php">Отзовы</a>
        </div>
        <div class="copyright">Copyright (c) Licoris</div>
        <hr>
    </footer>
</body>
</html>