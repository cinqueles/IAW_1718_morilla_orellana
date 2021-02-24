<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <style media="screen">
    td, th{
      width: 100px;
      height: 25px;
      text-align: center;
    }
  </style>
  <body>
    <table border="1">
      <tr>
        <th>Numero</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
      </tr>

      <?php
        $i=0;
        while ($i <= 100):
          echo "<tr>";
          echo "<td>$i</td>";
          //Si es divisible entre dos
          if ($i%2==0) {
            echo "<td> X </td>";
          }else {
            echo "<td>-</td>";
          }
          //Si es divisible entre tres
          if ($i%3==0) {
            echo "<td> X </td>";
          }else {
            echo "<td>-</td>";
          }
          //Si es divisible entre cuatro
          if ($i%4==0) {
            echo "<td> X </td>";
          }else {
            echo "<td>-</td>";
          }
          //Si es divisible entre cinco
          if ($i%5==0) {
            echo "<td> X </td>";
          }else {
            echo "<td>-</td>";
          }
          echo "</tr>";
          $i++;
        endwhile;

       ?>
    </table>
  </body>
</html>
