<?php
$conn = new mysqli("localhost", "root", "");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
// Создаем базу данных testdb2
$sql = "CREATE DATABASE test";
if($conn->query($sql)){
    echo "База данных успешно создана<br>";
} else{
    echo "Ошибка: " . $conn->error . "<br>";
}
$conn->close();
///////
$conn = new mysqli("localhost", "root", "", "test");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "CREATE TABLE contacts (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20), tel INTEGER, data TEXT);";
if($conn->query($sql)){
    echo "Таблица contacts успешно создана";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
