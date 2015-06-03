<?php 
session_start();
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$sql ="SELECT * FROM admin";
$consulta= $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estiloAdmin.css" type="text/css" media="screen" />
        <script src="sropys/script.js"></script>
        <title>Administradores</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>Administradores</h1>
        <br>
        <br>

<table class="tg">
  <tr>
      <th class="tg-hgcj" colspan="6"><a href="agregarAdminitrador.php">Agregar Administrador</a></th>
  </tr>
  <tr>
    <td class="tg-z2zr">Cedula</td>
    <td class="tg-z2zr">Nombre Usuario</td>
    <td class="tg-z2zr">Contraseña</td>
    <td class="tg-z2zr">Email </td>
    <td class="tg-z2zr" colspan="2">Acciones</td>
  </tr>
  <?php while($campos=mysqli_fetch_object($consulta)){?>
  <tr>
    <td class="tg-031e"><?php echo $campos->idAdmin; ?></td>
    <td class="tg-031e"><?php echo $campos->nombreAdmi; ?></td>
    <td class="tg-031e"><?php echo $campos->contrasena; ?></td>
    <td class="tg-031e"><?php echo $campos->email; ?></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="modificarAdmin(<?php echo $campos->idAdmin; ?>)"><img src="../img/modificar.png" width="30px" height="30px"/></a></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="eliminarAdmin(<?php echo $campos->idAdmin; ?>)"><img src="../img/remove_event_256.png" width="30px" height="30px"/></a></td>
  </tr>
  <?php }?>
</table>
    </body>
</html>