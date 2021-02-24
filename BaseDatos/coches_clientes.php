<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coches clientes</title>
  </head>
  <body>
    <?php
      if (empty($_GET)) {
        echo "No tengo datos del cliente";
        exit();
      }

      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");


      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

        $query="SELECT * from VEHICULOS
                WHERE CodCliente='".$_GET['CodCliente']."'";

        if ($result = $connection->query($query)) {
            printf("<p>The select query returned %d rows.</p>", $result->num_rows);
        ?>

        <table style="border:1px solid black">
        <thead>
          <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Fecha Matriculacion</th>
        </thead>

    <?php

        while($obj = $result->fetch_object()) {
            echo "<tr>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->Marca."</td>";
              echo "<td>".$obj->Modelo."</td>";
              echo "<td>".$obj->Color."</td>";
              echo "<td>".$obj->FechaMatriculacion."</td>";
            echo "</tr>";
        }

        $result->close();
        unset($obj);
        unset($connection);
      }

?>
  </body>
</html>
