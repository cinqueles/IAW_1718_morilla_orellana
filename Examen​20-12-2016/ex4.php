<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>Crear Facturas</h1>
    <?php if (!isset($_POST['id'])) : ?>
    <form method="post">
      <?php
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $idf="SELECT max(IdFactura) as IdFac FROM facturas;";
      if ($result = $connection->query($idf)) {
      $obj = $result->fetch_object();
        $id=($obj->IdFac)+1;

      $result->close();
      unset($obj);
      unset($connection);
      }
      ?>
      <input type="hidden" name="id" value="<?php echo "$id"; ?>"> <br><br>
      <span>Cliente</span>
      <select name="cliente" required>
          <?php
              $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
              $connection->set_charset("uft8");

              if ($connection->connect_errno) {
                  printf("Connection failed: %s\n", $connection->connect_error);
                  exit();
              }

              $client="SELECT CodCliente, DNI, Nombre, Apellidos FROM clientes";
              if ($result = $connection->query($client)) {
                while($obj = $result->fetch_object()) {
                  echo "<option value='".$obj->CodCliente."'>".
                  $obj->DNI." ".
                  $obj->Nombre." ".
                  $obj->Apellidos
                  ."</option>";
              }

              $result->close();
              unset($obj);
              unset($connection);
              }
           ?>
      </select><br><br>
      <span>Reparacion</span>
      <select name="reparacion"required>
        <?php
            $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
            $connection->set_charset("uft8");

            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }

            $rep="SELECT IdReparacion, Matricula, FechaEntrada, FechaSalida
                  FROM reparaciones
                  WHERE FechaSalida IS NOT NULL";
            if ($result = $connection->query($rep)) {
              while($obj = $result->fetch_object()) {
                echo "<option value='".$obj->IdReparacion."'>".
                $obj->Matricula." ".
                $obj->FechaEntrada." -> ".
                $obj->FechaSalida
                ."</option>";
            }

            $result->close();
            unset($obj);
            unset($connection);
            }
         ?>
      </select><br><br>
      <span>Fecha</span>
      <input type="text" name="fecha" required><br><br>
      <input type="submit" value="Crear factura">
    </form>
  <?php else: ?>
    <?php
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $fact="INSERT INTO facturas VALUES(".
      $_POST['id'].",'".
      $_POST['fecha']."','".
      $_POST['cliente']."',".
      $_POST['reparacion']
      .")";
      if ($result = $connection->query($fact)) {
          //echo "$fact";
          echo "<p>Todo correcto</p>";
        }else {
          echo "<p>Error en la inserccion</p><br>";
          //echo "$fact";
        }
     ?>

  <?php endif ?>
  </body>
</html>
