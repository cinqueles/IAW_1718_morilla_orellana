<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php if (!isset($_POST['num'])) : ?>
    <form method="post">
      <input type="text" name="num" required>
      <input type="submit" name="enviar" value="Enviar">
    <?php else: ?>
      <?php
      function es_primo($num){
        $a=0;
        $num1=1;
        while ($a <= $num) {
          if ($num1%$num1==0 && $num1%1==0) {
            echo "<p>".$num1."</p>";
          }else {
            $num1++;
          }
          $num1++;
          $a++;
        }
      }


       ?>
    <?php endif ?>
    </form>
  </body>
</html>
