<?php 
$host = "localhost"; // Имя хоста для подключения к БД
$user = "root"; // Пользователь базы данных
$pass = ""; // Пароль к базе данных
$dbname = "vladis"; // Имя базы данных
 
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

// Параметры задают что в качестве ответа получаем ассоциативный массив
$opt = array(
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

// Проверка корректности подключения
try { $pdo = new PDO($dsn, $user, $pass, $opt); } 
catch (PDOException $e) { die('Подключение не удалось: ' . $e->getMessage()); }
