<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destination</title>
  </head>
  <body>

     <?php if (isset($_GET['nombre']) && !isset($_POST['nom'])) : ?>
     <form  method="post">
       <legend>Registro</legend>
       <span>Name: </span>
       <input type="text" name="nom" value="<?php echo $_GET['nombre']?>" required><br><br>
       <span>Apellido: </span>
       <input type="text" name="ape" value="<?php echo $_GET['apellido']?>" required><br><br>
       <span>Email: </span>
       <input type="email" name="ema" value="<?php echo $_GET['email']?>" required><br><br>

       <p><input type="submit" value="Editar"></p>
     </form>

   <?php else: ?>
     <?php
        if (empty($_GET)) {
          echo "No tengo datos del alumno a editar";
        }else {
          echo "<h1>Datos actualizados</h1>";
          echo "<b>Nombre: </b>".$_POST['nom']."<br>";
          echo "<b>Apellido: </b>".$_POST['ape']."<br>";
          echo "<b>Email: </b>".$_POST['ema']."<br><br>";
          echo "<a href='alumnos.php'>Volver</a>";
        }
      ?>
    <?php endif ?>

  </body>
</html>
