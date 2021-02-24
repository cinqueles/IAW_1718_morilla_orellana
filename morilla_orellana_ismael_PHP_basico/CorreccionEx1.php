<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Correccion Ex 1</title>
  </head>
  <body>
    <?php if (!isset($_POST['num'])) : ?>
    <form method="post">
      <input type="text" name="num" required>
      <input type="submit" name="enviar" value="Enviar">
    <?php else: ?>
      <?php
      function es_primo($num){
        if ($num==1) {
          return true;
        }else {
          for ($i=2; $i <$num ; $i++) {
            if ($num%$i==0) {
              return false;
            }
          }
         return true;
        }
      }

      $num_primos=$_POST['num'];
      $cont=0;
      $i=1;

      while ($cont < $num_primos) {
        if (es_primo($i)) {
          echo "$i<br>";
          $cont++;
        }
        $i++;
      }

       ?>
    <?php endif ?>
    </form>
  </body>
</html>
