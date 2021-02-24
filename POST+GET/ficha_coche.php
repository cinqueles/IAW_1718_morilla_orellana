<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ficha coche</title>
    <style media="screen">
      img{
        height: 150px;
        width: 250px;
      }
      td {
        height: 30px;
        width: 200px;
      }
    </style>
  </head>
  <body>
    
    <h1>Ficha del coche</h1>

    <table>
      <tr>
        <td><b>Matricula</b></td>
        <td><?php echo $_GET['matri'] ?></td>
        <td rowspan="5"><img src="coche.png" alt="coche"></td>
      </tr>
      <tr>
        <td><b>Km</b></td>
        <td><?php echo $_GET['km'] ?></td>
      </tr>
      <tr>
        <td><b>Fecha de Matriculacion</b></td>
        <td><?php echo $_GET['fecha'] ?></td>
      </tr>
      <tr>
        <td><b>Marca</b></td>
        <td><?php echo $_GET['marca'] ?></td>
      </tr>
      <tr>
        <td><b>Modelo</b></td>
        <td><?php echo $_GET['modelo'] ?></td>
      </tr>
    </table>
  </body>
</html>
