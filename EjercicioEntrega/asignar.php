<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Asignar</title>
  </head>
  <body>

    <?php if (empty($_GET)) {
      echo "<p>No tengo datos</p>";
      exit();
    }
    ?>
    <h1>Asignacion de empleados</h1>
    <p>Reparacion nº <?php echo $_GET['id'] ?></p>
  <?php if (!isset($_POST['emple'])) : ?>

    <form  method="post">
    <?php
      echo "<select name=emple require>";
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }
        $emp="SELECT CodEmpleado, Nombre, Apellidos FROM empleados";
        if ($result = $connection->query($emp)) {
          while($obj = $result->fetch_object()) {
              echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre." , ".
                    $obj->Apellidos."</option>";
          }
              echo "</select><br>";
              $result->close();
              unset($obj);
              unset($connection);
        }
        echo "<br>";

      ?>
    <input type="submit" value="Asignar">
   </from>

  <?php else: ?>
    <?php
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      $emp="INSERT INTO intervienen values(".$_POST['emple'].",".$_GET['id'].",null)";
      if ($result = $connection->query($emp)) {
        header('Location: reparaciones.php');
      }else {
        echo "<p>Error en la inserccion</p>";
      }
     ?>
  <?php endif; ?>
  </body>
</html>
