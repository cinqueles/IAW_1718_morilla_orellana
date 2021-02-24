<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coches Viejos</title>
  </head>
  <body>

     <?php if (!isset($_POST['km'])) : ?>
       <form method="post">
         <span>KM: </span>
         <input type="text" name="km" required>
         <input type="submit" name="enviar">
       </form>
    <?php else: ?>
      <?php
          echo "<table border='1'>";
          echo "<tr>";
          echo "<td>Matricula</td>";
          echo "<td>Marca</td>";
          echo "<td>Modelo</td>";
          echo "<td>Color</td>";
          echo "<td>FechaMatriculacion</td>";
          echo "<td>CodCliente</td>";
          echo "</tr>";
          $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
          $connection->set_charset("uft8");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $vehi="select *
                  from vehiculos v join reparaciones r
                  on v.matricula = r.matricula
                  where Km=".$_POST['km'];

          // Correccion:
          /*$vehi="select *, max(Km) as total
                  from vehiculos v join reparaciones r
                  on v.matricula = r.matricula
                  group by v.Matricula".
                  having Km=".$_POST['km'];*/
          if ($result = $connection->query($vehi)) {
          while($obj = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>".$obj->Matricula."</td>";
            echo "<td>".$obj->Marca."</td>";
            echo "<td>".$obj->Modelo."</td>";
            echo "<td>".$obj->Color."</td>";
            echo "<td>".$obj->FechaMatriculacion."</td>";
            echo "<td>".$obj->CodCliente."</td>";
            echo "</tr>";
          }

          $result->close();
          unset($obj);
          unset($connection);
          echo "</table>";

        }

       ?>

    <?php endif ?>
  </body>
</html>
