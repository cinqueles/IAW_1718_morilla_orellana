<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Coche</title>
  </head>
  <body>
    <?php if (!isset($_POST['matri'])) : ?>
    <form method="post">
      <fieldset>
        <legend>Insertar datos del coche</legend>
        <span>Matricula </span>
        <input type="text" name="matri" required><br>
        <span>KM </span>
        <input type="number" name="km"><br>
        <span>Fecha Matriculacion </span>
        <input type="date" name="fecha" required><br>
        <span>Marca </span>
        <input type="text" name="marca"><br>
        <span>Modelo </span>
        <input type="text" name="modelo"><br>

        <input type="submit" value="INSERTAR"><br>

      <?php else: ?>
        <?php
           if (empty($_POST)) {
             echo "No tengo datos del coche";
           }else {
             echo "<a href='ficha_coche.php?".
             "matri=".$_POST['matri'].
             "&km=".$_POST['km'].
             "&fecha=".$_POST['fecha'].
             "&marca=".$_POST['marca'].
             "&modelo=".$_POST['modelo'].
             "'>Coche insertado</a>";
           }
         ?>
       <?php endif ?>

      </fieldset>
    </form>
  </body>
</html>
