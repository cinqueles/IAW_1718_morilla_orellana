<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <?php
      include_once('db.php');
      if (!$connection=conectar_db()) {
        exit();
      }

      $query="SELECT * from VEHICULOS";

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
