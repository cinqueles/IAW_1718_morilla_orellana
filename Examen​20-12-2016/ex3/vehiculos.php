<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <style media="screen">
    #rojo{
      background-color: red;
    }
    #verde{
      background-color: green;
    }
  </style>
  <body>
    <table border="1">
      <tr>
        <th>Matricula</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>

      </tr>
      <?php
          $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
          $connection->set_charset("uft8");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          $client="SELECT v.Matricula as Matri, Marca, Modelo, Color, km
                    FROM vehiculos v join reparaciones r
                    on v.Matricula = r.Matricula;";
          if ($result = $connection->query($client)) {
          while($obj = $result->fetch_object()) {
            $km=$obj->km;
            if ($km>50000) {
              echo "<tr id='rojo'>";
              echo "<td><a href='propietario.php?matri=".$obj->Matri."'>".$obj->Matri."</td>";
              echo "<td>".$obj->Marca."</td>";
              echo "<td>".$obj->Modelo."</td>";
              echo "<td>".$obj->Color."</td>";
              echo "</tr>";
            }elseif ($km>30000 && $km<40000) {
              echo "<tr id='verde'>";
              echo "<td><a href='propietario.php?matri=".$obj->Matri."'>".$obj->Matri."</td>";
              echo "<td>".$obj->Marca."</td>";
              echo "<td>".$obj->Modelo."</td>";
              echo "<td>".$obj->Color."</td>";
              echo "</tr>";
            }else {
              echo "<tr>";
              echo "<td><a href='propietario.php?matri=".$obj->Matri."'>".$obj->Matri."</td>";
              echo "<td>".$obj->Marca."</td>";
              echo "<td>".$obj->Modelo."</td>";
              echo "<td>".$obj->Color."</td>";
              echo "</tr>";
            }

          }

          $result->close();
          unset($obj);
          unset($connection);
          }
       ?>
    </table>
  </body>
</html>
