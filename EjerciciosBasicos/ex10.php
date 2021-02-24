<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla</title>
  </head>
  <body>
    <?php
      $a=1;
      $num=3;
      while ($a <= 10) {
        $resu=$num*$a;
        echo $num." x ".$a." = ".$resu."<br>";
        $a++;
      }
     ?>
  </body>
</html>
