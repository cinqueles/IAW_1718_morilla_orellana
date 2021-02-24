<?php

  function dividir($cadena,$caracter) {

    $v=[];
    $parte1="";
    $parte2="";

    for ($i=0; $i<strlen($cadena) && $cadena[$i]!=$caracter;$i++) {
      $parte1=$parte1.$cadena[$i];

    if ($parte1==$cadena) {
      return false;
    } else {
        $v[]=$parte1;

        for($j=$i;$j<strlen($cadena);$j++) {
         $parte2=$parte2.$cadena[$j];
        }

        $v[]=$parte2;
    }

    return $v;
  }
}
 ?>
