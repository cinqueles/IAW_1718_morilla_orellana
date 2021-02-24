<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>listas</title>
  </head>
  <body>
    <?php
      echo "<ol>";
        for ($i=0; $i < 3; $i++) {
          echo "<li>A";
          echo "<ol>";

            for ($j=0; $j < 3; $j++) {
              echo "<li>A</li>";
            }
          echo "</ol>";
          echo "</li>";
        }
      echo "</ol>";
    ?>
  </body>
</html>
