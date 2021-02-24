<?php
$connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
$connection->set_charset("uft8");

if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

$client="CONSULTA";
if ($result = $connection->query($client)) {
//si no hay que hacer bucles
$obj = $result->fetch_object();
//si hay que hacer bucles
while($obj = $result->fetch_object()) {

}
//LIMPIAR EL CURSOR
$result->close();
unset($obj);
unset($connection);
}

 ?>
