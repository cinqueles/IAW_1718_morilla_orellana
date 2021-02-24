<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>informe</title>
  </head>
  <body>
    <?php if (empty($_GET)) {
      echo "<p>No tengo datos</p>";
      exit();
    }
    ?>
    <h1>Informe de la reparacion</h1>
    <p>Reparacion nº <?php echo $_GET['id'] ?></p>
    <?php
// LISTAR LAS PIEZAS UTILIZADAS EN LA REPARACION
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $info="SELECT *
              from reparaciones r join incluyen i
              on r.idreparacion=i.idreparacion
              join recambios re
              on i.idrecambio=re.idrecambio
              where r.idreparacion=".$_GET["id"];


      if ($result = $connection->query($info)) {
        if ($result->num_rows == 0) {
          echo "<h3>Piezas</h3>";
          echo "No se han utilizado piezas";
        }else{
          echo "<h3>Piezas</h3>";
          echo "<ul>";
          while($obj = $result->fetch_object()) {
                echo "<li>".$obj->Descripcion."</li>";
          }
          echo "</ul>";
        $result->close();
        unset($obj);
        unset($connection);
        }
      }
//LISTAR LOS EMPLEADOS QUE INTERVIENEN EN LA REPARACION
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $emple="SELECT *
              from reparaciones r join intervienen i
              on r.idreparacion=i.idreparacion
              join empleados em
              on i.CodEmpleado=em.CodEmpleado
              where r.idreparacion=".$_GET["id"];

        if ($result = $connection->query($emple)) {
          if ($result->num_rows == 0) {
            echo "<h3>Empleados</h3>";
            echo "No ha intervenido ningun empleado";
          }else{echo "<h3>Empleados</h3>";
          echo "<ul>";
          while($obj = $result->fetch_object()) {
                echo "<li>".$obj->Nombre." ".$obj->Apellidos."</li>";
          }
          echo "</ul>";
        $result->close();
        unset($obj);
        unset($connection);}

          }

     ?>

  </body>
</html>
