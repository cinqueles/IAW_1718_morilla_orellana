<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex2</title>
  </head>
  <body>
    <?php
      //Variables iniciales
      $cadena="Hola alumno, ¿como estas?";
      $distin=",";

      //Ver la longitud de la cadena
      echo "$cadena"."<br>";
      echo strlen($cadena);
      echo "<hr>";
      //Ver si un caracter es distinto o igual

      for ($i=0;$i<strlen($cadena);$i++) {
        if ($cadena[$i]!=$distin) {
          echo $cadena[$i]." es distinto a ".$distin."<br>";
        }else {
          echo "<b>".$cadena[$i]."es igual a ".$distin."</b><br>";
        }
      }

      echo "<hr>";

      //Meter en una variable hasta caracter indicado
      for ($i=0;$i<strlen($cadena);$i++) {
        if ($cadena[$i]!=$distin) {
          $var1=$cadena[$i];
          echo "$var1";
        }
      }

      echo "<hr>";
      //Meter en un vector hasta la coma
      $p1="";
      for ($a=0; $a < strlen($cadena); $a++) {
        if ($cadena[$a]!=$distin) {
          $p1=$p1.$cadena[$a];
        }else {
          $v1[]=$p1;
          $p1="";
          echo "P1= ".$p1."<br>";
          echo "Vector: ";
          var_dump($v1);
        }
      }
echo "<hr>";
      //Meter en un vector palabra por palabra
      $p1="";
      $esp=" ";
      $posicion="";
      for ($a=0; $a < strlen($cadena); $a++) {
        echo "$a - $cadena[$a]";
        echo "<br>";
        if ($cadena[$a]!=$distin) {
          if ($cadena[$a]!=$esp) {
            $posicion=$posicion." ".$a;
            $p1=$p1.$cadena[$a];
          }else {
            echo "Cadena: $p1<br> Posicion: $posicion<br>";
            $v2[]=$p1;
            $p1="";
            $posicion="";
          }
        }else {
          $v2[]=$p1;
          $p1="";
        }
      }
      echo "<br>";
      var_dump($v2);

      echo "<p>Listado del vector v2</p>";
      for ($i=0;$i<sizeof($v2);$i++) {
        echo "Elemento $i---->".$v2[$i]."<br> ";
      }
     ?>
  </body>
</html>
