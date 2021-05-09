<?php
// Подключаем коннект к БД
require_once 'db.php';
 
// Проверка есть ли хеш
if ($_REQUEST['hash']) {
    // Кладём этот хеш в отдельную переменную 
    $hash = $_REQUEST['hash'];
    // Проверка на то, что есть пользователь с таки хешом
    if ($result = mysqli_query($db, "SELECT `id` FROM `user` WHERE `hash`='" . $hash . "'")) {
        // Цикл для получение пользователя с таким хешом
        while( $row = mysqli_fetch_assoc($result) ) { 
            // Переменная для хранения символов 
            $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
            // Получаем длину строки
            $numChars = strlen($chars);
            // Переменная для пароля
            $pass = '';
            // Цикл для создания пароля
            for ($i = 0; $i < 8; $i  ) {
                $pass .= substr($chars, rand(1, $numChars) - 1, 1);
            }
            // Обновление пароля
            mysqli_query($db, "UPDATE `user` SET `password`=" . password_hash($pass, PASSWORD_DEFAULT) . " WHERE `id`=". $row['id'] );
            // Вывод нового пароля    
            echo "Ваш новый пароль: " . $pass; 
        } 
    } else {
        echo "Что то пошло не так";
    }
} else {
    echo "Что то пошло не так хеш";
}
?>