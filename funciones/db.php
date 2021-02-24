<?php
function conectar_db($ip = '192.168.1.104', $usu='root',
                     $contra='Admin2015', $db='tf'){
  $connection = new mysqli($ip, $usu, $contra, $db);
  $connection->set_charset("uft8");

  if ($connection->connect_errno) {
      echo "Error al conectar";
      return false;
  }
  return $connection;
}
 ?>
