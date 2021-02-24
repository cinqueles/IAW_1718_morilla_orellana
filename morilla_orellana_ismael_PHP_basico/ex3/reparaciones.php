<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reparaciones</title>
  </head>
  <table border="1">
    <tr>
      <th>IdReparacion</th>
      <th>Matricula</th>
      <th>FechaEntrada</th>
      <th>Km</th>
      <th>Averia</th>
      <th>FechaSalida</th>
      <th>Reparado</th>
      <th>Observaciones</th>
    </tr>

  <body>
    <?php
    $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
    $connection->set_charset("uft8");

    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }

    $client="SELECT * FROM reparaciones";
    if ($result = $connection->query($client)) {
    while($obj = $result->fetch_object()) {
      echo "<tr>";
      echo "<td><a href='resumen.php?id=".$obj->IdReparacion."'>".$obj->IdReparacion."</a></td>";
      echo "<td>".$obj->Matricula."</td>";
      echo "<td>".$obj->FechaEntrada."</td>";
      echo "<td>".$obj->Km."</td>";
      echo "<td>".$obj->Averia."</td>";
      echo "<td>".$obj->FechaSalida."</td>";
      echo "<td>".$obj->Reparado."</td>";
      echo "<td>".$obj->Observaciones."</td>";
      echo "</tr>";
    }

    $result->close();
    unset($obj);
    unset($connection);
    }
     ?>

    </table>
  </body>
</html>
