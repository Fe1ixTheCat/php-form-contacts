<?php
  if ($_POST) {
    include 'user.php';

    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    $tel = $_POST['tel'];
    $name =$_POST['name'];
    $data =$_POST['data'];

    $request = "INSERT INTO ".$db_table." (tel, name, data) VALUES ('$tel', '$name', '$data')";
    $sql = mysqli_query($link, $request) or die('Невозможно соединиться с бд');

    if ($sql) {
      print_r("Операция выполнена успешно");
    } else {
      print_r("Что то пошло не так");
    }
  }
 ?>
