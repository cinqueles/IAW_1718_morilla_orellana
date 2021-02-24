<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Cliente</title>
  </head>
  <style media="screen">
    h1{
      text-align: center;
    }
  </style>
  <body>
    <?php
      if (empty($_GET)) {
        echo "No hay datos para mostrar";
        exit();
      }
     ?>
    <?php if (!isset($_POST['cod'])) : ?>
    <?php
    $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
    $connection->set_charset("uft8");

    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }

    $client="SELECT * FROM clientes where CodCliente=".$_GET['cod'];
    if ($result = $connection->query($client)) {
      $obj = $result->fetch_object();
      $cod=$obj->CodCliente;
      $dni=$obj->DNI;
      $ape=$obj->Apellidos;
      $nom=$obj->Nombre;
      $dir=$obj->Direccion;
      $tel=$obj->Telefono;
    }else {
      echo "No hay datos";
      exit();
    }
  ?>
  <h1>Cliente: <?php echo $nom." ".$ape;  ?></h1>
  <form method="post">
    <input type="hidden" name="cod" value="<?php echo $cod; ?>">
    <span>DNI: </span>
    <input type="text" name="dni" value="<?php echo $dni; ?>" required><br><br>
    <span>Nombre: </span>
    <input type="text" name="nom" value="<?php echo $nom; ?>" required><br><br>
    <span>Apellidos: </span>
    <input type="text" name="ape" value="<?php echo $ape; ?>"><br><br>
    <span>Direccion: </span>
    <input type="text" name="dir" value="<?php echo $dir; ?>"><br><br>
    <span>Telefono: </span>
    <input type="text" name="tel" value="<?php echo $tel; ?>"><br><br>

    <input type="submit" value="Editar">
  </form>
  <?php else: ?>
    <?php
        $cod=$_POST['cod'];
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

        $actu="UPDATE clientes SET
        DNI='$dni',
        Nombre='$nombre',
        Apellidos='$apellidos',
        Direccion='$direc',
        Telefono='$tel'
        WHERE CodCliente='$cod'";

        if ($result = $connection->query($actu)) {
          echo "<p>Datos actualizados</p><br>";
          echo "<a href='clientes.php'>Volver</a>";
        } else {
          echo "<p>Error al actualizar los datos</p><br>";
          echo "<a href='clientes.php'>Volver</a>";
        }

    ?>
  <?php endif ?>
  </body>
</html>
