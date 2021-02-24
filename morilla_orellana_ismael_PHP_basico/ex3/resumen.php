<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resumen</title>
  </head>
  <body>
    <?php
      if (empty($_GET['id'])) {
        echo "NO HAY DATOS NINGUNO";
        exit();
      }
      if (isset($_GET['id'])) {
        //DATOS DEL CLIENTE
        echo "<h3>Datos Cliente</h3>";
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $client="SELECT Nombre, Apellidos, Direccion FROM facturas f
                JOIN clientes c
                on f.codCliente=c.codcliente
                where IdReparacion=".$_GET['id'];
        if ($result = $connection->query($client)) {
        while($obj = $result->fetch_object()) {
            /*Correccion:
            if ($result->num_rows==0) {
              echo "No se ha pagado la reparacion";
            }else{
              echo "<ul>";
              echo "<li>".$obj->Nombre."</li>";
              echo "<li>".$obj->Apellidos."</li>";
              echo "<li>".$obj->Direccion."</li>";
              echo "</ul>";
          }
            */
            echo "<ul>";
            echo "<li>".$obj->Nombre."</li>";
            echo "<li>".$obj->Apellidos."</li>";
            echo "<li>".$obj->Direccion."</li>";
            echo "</ul>";
        }

        $result->close();
        unset($obj);
        unset($connection);
      }
        //DATOS DEL VEHICULO
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $coche="SELECT v.Matricula as Matricula, Modelo, Marca, FechaEntrada
                from vehiculos v join reparaciones r
                on v.matricula = r.matricula
                where IdReparacion=".$_GET['id'];
        if ($result = $connection->query($coche)) {
        $obj = $result->fetch_object();
          /*Correccion:
          if ($result->num_rows==0) {
            echo "No se ha pagado la reparacion";
          }else{
            echo "<ul>";
            echo "<li><b>Matricula: </b>".$obj->Matricula."</li>";
            echo "<li><b>Modelo: </b>".$obj->Modelo."</li>";
            echo "<li><b>Marca: </b>".$obj->Marca."</li>";
            echo "</ul>";
          }
          */
          echo "<h3>Datos coche</h3>";
          echo "<ul>";

          echo "<li><b>Matricula: </b>".$obj->Matricula."</li>";
          echo "<li><b>Modelo: </b>".$obj->Modelo."</li>";
          echo "<li><b>Marca: </b>".$obj->Marca."</li>";
          //Correccion:
          echo "<li><b>Fecha de entrada: </b>".$obj->FechaEntrada."</li>";
          echo "</ul>";
        $result->close();
        unset($obj);
        unset($connection);
        }

        //DATOS DE LAS PIEZAS
        echo "<h3>Piezas utilizadas</h3>";
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $piezas="SELECT Descripcion, PrecioReferencia, Unidades, unidades*PrecioReferencia as Total
                  from incluyen i join recambios r
                  on i.idrecambio=r.idrecambio
                  where IdReparacion=".$_GET['id'];
        if ($result = $connection->query($piezas)) {
        while($obj = $result->fetch_object()) {
          echo "<ul>";
          echo "<li><b>".$obj->Descripcion." : </b>".$obj->Unidades." * ".$obj->PrecioReferencia." = ".$obj->Total."</li>";
          echo "</ul>";
        }
        $result->close();
        unset($obj);
        unset($connection);
        }
        //TOTAL DE PIEZAS
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $total="SELECT sum(unidades*PrecioReferencia) as Suma
                  from incluyen i join recambios r
                  on i.idrecambio=r.idrecambio
                  where IdReparacion=".$_GET['id'];
        if ($result = $connection->query($total)) {
          $obj = $result->fetch_object();
          echo "<p>Total: ".$obj->Suma."</p>";
        $result->close();
        unset($obj);
        unset($connection);
        }

      }
     ?>
  </body>
</html>
