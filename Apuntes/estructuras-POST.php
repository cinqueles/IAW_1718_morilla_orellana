#Post_single
  <?php if (!isset($_POST['campoquesea'])) : ?>
    <form method="post">
    #Estructura de formulario o lo que sea
  <?php else: ?>
    #Accion que se va a realizar una vez pinchado en el boton de enviar
    <?php

    ?>

  <?php endif ?>


  #POST_source
  <form action="post_destination.php" method="post">
    #Lo que sea dentro del formulario
  </form>

  #POST_destination
  <?php
    #accion que se va a realizar una vez que se le pase los datos
  ?>
