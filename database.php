<?php
  $host = 'localhost';  
  $user = 'root';   
  $pass = '';
  $db_name = 'zarplatalab';  
  $link = mysqli_connect($host, $user, $pass, $db_name); 

 
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>

<?php
  $sql = mysqli_query($link, 'SELECT * FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['id']} {$result['name']} {$result['surname']} {$result['otch']} <br>";
  }
?>