<?php
require_once 'connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
$username = $_POST['username'];
$text = $_POST['text'];
$email = $_POST['email'];
$phone = $_POST['phone'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `users` (`username`, `text`, `email`, `phone`) VALUES (	'$username', '$text', '$email', '$phone')");

header('Location: form.php');
