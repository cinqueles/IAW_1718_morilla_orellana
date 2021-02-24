<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Vehiculos</title>
    <style media="screen">
      td {
        width: 150px;
      }
    </style>
  </head>
  <body>
    <?php if (!isset($_POST['matri'])) : ?>
    <form method="post">
      <fieldset>
        <legend>Insertar datos del coche</legend>
        <span>Matricula </span>
        <input type="text" name="matri" required><br>
        <span>Fecha Matriculacion </span>
        <input type="date" name="fecha" required><br>
        <span>Marca </span>
        <input type="text" name="marca"><br>
        <span>Modelo </span>
        <input type="text" name="modelo"><br>
        <span>Color</span>
        <input type="text" name="color"><br>
        <span>Cliente</span>
        <select name="cliente">
          <?php
          $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
          $connection->set_charset("uft8");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $client="SELECT * FROM CLIENTES";
          if ($result = $connection->query($client)) {

          while($obj = $result->fetch_object()) {
              echo "<option value='".$obj->CodCliente."'>".$obj->Apellidos.",".$obj->Nombre."</option>";
          }

          $result->close();
          unset($obj);
          unset($connection);
          }
           ?>
        </select><br>

        <input type="submit" value="INSERTAR"><br>

      <?php else: ?>
        <?php
               $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
               $connection->set_charset("uft8");


               if ($connection->connect_errno) {
                   printf("Connection failed: %s\n", $connection->connect_error);
                   exit();
               }

                 $query="INSERT INTO VEHICULOS VALUES
                 ('".$_POST['matri']."','".$_POST['marca']."','".
                 $_POST['modelo']."','".$_POST['color']."','".$_POST['fecha']."','".$_POST['cliente']."')";
                

                 if ($result = $connection->query($query)) {
                  //  printf("<p>The select query returned %d rows.</p>", $result->num_rows);
                  printf("<h1>COCHE INSERTADO</h1>");
                 ?>

                 <table style="border:1px solid black">
                 <thead>
                   <tr>
                     <th>Matricula</th>
                     <th>Marca</th>
                     <th>Modelo</th>
                     <th>Color</th>
                     <th>Fecha Matriculacion</th>
                     <th>CodCliente</th>
                 </thead>

             <?php
             $datos="SELECT * FROM VEHICULOS";
             if ($result = $connection->query($datos)) {
                printf("<p>Filas mostradas por pantalla: %d.</p>", $result->num_rows);

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
               }
            }

        ?>
      <?php endif ?>
    </form>
  </body>
</html>
