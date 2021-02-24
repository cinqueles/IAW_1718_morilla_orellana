<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Clientes</title>
  </head>
  <body>

    <?php
    $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
    $connection->set_charset("uft8");

    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }

    $client="SELECT * FROM CLIENTES WHERE CodCliente='".$_GET['codigo']."'";
    if ($result = $connection->query($client)) {
      while($obj = $result->fetch_object()) {
          $cod=$obj->CodCliente;
          $dni=$obj->DNI;
          $apellidos=$obj->Apellidos;
          $nombre=$obj->Nombre;
          $direc=$obj->Direccion;
          $tel=$obj->Telefono;
      }
    $result->close();
    unset($obj);
    unset($connection);
}
     ?>
     <form  method="post">
       <legend>Registro</legend>
       <span>DNI: </span>
       <input type="text" name="dni" value="<?php echo $dni?>" required><br><br>
       <span>Apellido: </span>
       <input type="text" name="ape" value="<?php echo $apellidos?>" required><br><br>
       <span>Nombre: </span>
       <input type="text" name="nom" value="<?php echo $nombre?>" required><br><br>
       <span>Direccion: </span>
       <input type="text" name="dir" value="<?php echo $direc?>" required><br><br>
       <span>Telefono: </span>
       <input type="number" name="tel" value="<?php echo $tel?>" required><br><br>

       <p><input type="submit" value="Editar"></p>
     </form>
     <?php
     $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
     $connection->set_charset("uft8");

     if ($connection->connect_errno) {
         printf("Connection failed: %s\n", $connection->connect_error);
         exit();
     }

     $client="UPDATE CLIENTES
     SET DNI=".$_POST['dni'].
     "Apellidos='".$_POST['ape']."'".
     "Nombre='".$_POST['nom']."'".
     "Direccion='".$_POST['dir']."'".
     "Telefono='".$_POST['tel']."WHERE CodCliente='".$_GET['codigo']."'";
      ?>
  </body>
</html>
