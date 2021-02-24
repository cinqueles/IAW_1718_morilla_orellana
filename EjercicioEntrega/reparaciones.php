<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reparaciones</title>
    <style media="screen">
        img {
          width: 30px;
          height: 30px;
        }
        h1 {
          text-align: center;
        }
        table{
          border-style: solid;

        }
    </style>
  </head>
  <body>
    <h1>REPARACIONES</h1>
    <table border="1px">

    <?php
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $rep="SELECT * FROM reparaciones";
      if ($result = $connection->query($rep)) {
        while($obj = $result->fetch_object()) {
            echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td><a href='asignar.php?id=".$obj->IdReparacion."'><img src='usuario.jpg'/></a></td>";
              echo "<td><a href='informe.php?id=".$obj->IdReparacion."'><img src='ver.png'/></a></td>";
              echo "<td><a href='borrar.php?id=".$obj->IdReparacion."'><img src='eliminar.png'/></a></td>";
            echo "</tr>";
        }

        $result->close();
        unset($obj);
        unset($connection);
      }

      ?>
  </body>
</html>
