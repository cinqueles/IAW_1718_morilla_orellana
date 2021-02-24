<?php if (empty($_GET)) {
  echo "<p>No tengo datos</p>";
  exit();
}
?>
<?php
  $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
  $connection->set_charset("uft8");

  if ($connection->connect_errno) {
      printf("Connection failed: %s\n", $connection->connect_error);
      exit();
  }

  $rep="DELETE FROM reparaciones where IdReparacion=".$_GET['id'].";";
  if ($result = $connection->query($rep)) {
    header('Location: reparaciones.php');
  }else{
        printf("Borrado fallido: %s\n", $connection->connect_errno);
  }
?>
