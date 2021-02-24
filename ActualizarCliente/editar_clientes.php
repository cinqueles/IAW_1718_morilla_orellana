
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

    <?php
        if (empty($_GET)) {
          echo "No se han recibido datos del cliente";
          exit();
        }
     ?>
    <?php if (!isset($_POST['codigo'])) : ?>
     <?php
     $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
     $connection->set_charset("uft8");

     if ($connection->connect_errno) {
         printf("Connection failed: %s\n", $connection->connect_error);
         exit();
     }
     $client="SELECT * FROM CLIENTES WHERE CodCliente='".$_GET['codigo']."'";
     if ($result = $connection->query($client)) {

       $obj = $result->fetch_object();
       if ($result->num_rows==0) {
         echo "No existe ese cliente";
         exit();
       }
       $cod=$obj->CodCliente;
       $dni=$obj->DNI;
       $apellidos=$obj->Apellidos;
       $nombre=$obj->Nombre;
       $direc=$obj->Direccion;
       $tel=$obj->Telefono;

       }else {
         echo "No se han recuperado datos";
         exit();
       }
      ?>

        <form method="post">
          <fieldset>
              <legend>Personal Info</legend>
              <input type="hidden" name="codigo" value="<?php echo $cod;?>" required><br><br>
              <span>DNI: </span>
              <input type="text" name="dni" value="<?php echo $dni;?>" required><br><br>
              <span>Apellido: </span>
              <input type="text" name="ape" value="<?php echo $apellidos;?>" required><br><br>
              <span>Nombre: </span>
              <input type="text" name="nom" value="<?php echo $nombre;?>" required><br><br>
              <span>Direccion: </span>
              <input type="text" name="dir" value="<?php echo $direc;?>" required><br><br>
              <span>Telefono: </span>
              <input type="number" name="tel" value="<?php echo $tel;?>" required><br><br>

            <p><input type="submit" value="Editar"></p>
          </fieldset>
        </form>

      <?php else: ?>

        <?php
            $cod=$_POST['codigo'];
            $dni=$_POST['dni'];
            $apellidos=$_POST['ape'];
            $nombre=$_POST['nom'];
            $direc=$_POST['dir'];
            $tel=$_POST['tel'];

            $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
            $connection->set_charset("uft8");

            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }

            $client="UPDATE CLIENTES SET
            DNI='$dni',
            Nombre='$nombre',
            Apellidos='$apellidos',
            Direccion='$direc',
            Telefono='$tel'
            WHERE CodCliente='$cod'";

            if ($result = $connection->query($client)) {
              echo "Datos actualizados";
            } else {
              echo "Error al actualizar los datos";
            }

         ?>


      <?php endif ?>

  </body>
</html>
