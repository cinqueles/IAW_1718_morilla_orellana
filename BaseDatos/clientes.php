<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla clientes</title>
  </head>
  <body>
    <?php


      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");


      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }


        $query="SELECT * from CLIENTES";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>


          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>CodCliente</th>
              <th>DNI</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Direccion</th>
              <th>Teléfono</th>
          </thead>

      <?php


          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td>
                <a href='coches_clientes.php?CodCliente=".$obj->CodCliente.
                "'>".$obj->CodCliente."</a></td>";
                echo "<td>".$obj->Nombre."</td>";
                echo "<td>".$obj->Apellidos."</td>";
                echo "<td>".$obj->DNI."</td>";
                echo "<td>".$obj->Direccion."</td>";
                echo "<td>".$obj->Telefono."</td>";
              echo "</tr>";
          }


          $result->close();
          unset($obj);
          unset($connection);

      }

    ?>
  </body>
</html>
