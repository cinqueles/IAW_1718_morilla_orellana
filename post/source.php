<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio POST</title>
  </head>
  <body>
  <form action="destination.php" method="post">
    <fieldset >
      <legend>Registro</legend>
      <span>Name: </span><input type="text" name="name" required><br><br>
      <span>Apellido: </span><input type="text" name="apellido" required><br><br>
      <span>Email: </span><input type="email" name="email" required><br><br>
      <span>Contraseña: </span> <input type="password" name="contra" required><br><br>
      <span>Foto perfil: </span><input type="file" name="foto">

      <p><input type="submit" value="Enviar"></p>

    </fieldset>
  </form>
  </body>
</html>
