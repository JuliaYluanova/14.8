<?php
//задаем кодировку страницы
header('Content-type: text/html; charset=UTF-8');

//инициализация сессии
session_start();

print_r($_SERVER);
?>
