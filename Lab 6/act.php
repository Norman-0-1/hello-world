<?php
//Данные для подключения к серверу MySQL
$servername = "localhost";
$username = "root";
$password = "";
// Вводим название базы данных
$dbname = "norman_conquest";
//Созданиие подключения
$conn = mysqli_connect($servername, $username, $password,
$dbname);
mysql_select_db('norman_conquest');
//Проверка кодировки utf8 
mysql_query('SET NAMES utf8') or die ("не удалось установить
кодировку");
//Проверка соединения с БД
if (!$conn) {
 die("Подключение не выполнено: " . mysqli_connect_error());
}
//Строка с текстом sql запроса для таблицы
$sql = "INSERT INTO register_data (email, parol, parol2,
name, surname, tema, zapomni)
VALUES ('".$_POST['email']."','".$_POST['parol']."',
'".$_POST['parol2']."','".$_POST['name']."',
'".$_POST['surname']."','".$_POST['tema']."',
'".$_POST['zapomni']."');";
// mysqli_query($conn, $sql) - выполнение sql запроса
//Проверка статуса выполнения sql запроса
if (mysqli_query($conn, $sql)) {
 echo "Запись успешно добавлена</br>";
echo "<a href='Register.html'>На главную</a>";
} else {
 echo "Ошибка добавления записи: " . $sql . "<br>" .
mysqli_error($conn);
}
//Закрытие соединения
mysqli_close($conn);
?>