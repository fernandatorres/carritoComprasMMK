<?php 
session_start();
if(isset($_SESSION['admins']))
{
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        
$sql ="SELECT * FROM categorias";
$consulta=  mysql_query($sql);
}
 else {
    echo "<script>
                alert('usuario invalido');
                location.href='index.php';
                </script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estiloCategoria.css" type="text/css" media="screen" />
        <title>Administrador de categorias</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>Categorias</h1>
        <br>
        <br>
        <table class="tg">
  <tr>
    <th class="tg-n0zm" colspan="4">Agregar Categoria</th>
  </tr>
  <tr>
    <td class="tg-wy3v">Id Categoria</td>
    <td class="tg-wy3v">Nombre</td>
    <td class="tg-wy3v" colspan="2">Acciones</td>
  </tr>
   <?php while($campos=mysql_fetch_object($consulta)){?>
  <tr>
    <td class="tg-031e"><?php echo $campos->idCat; ?></td>
    <td class="tg-031e"><?php echo $campos->nombreCat; ?></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="modificarCategoria(<?php echo $campos->idCat; ?>)"><img src="../img/modificar.png" width="30px" height="30px"/></a></td>
    <td class="tg-031e"><a class="ac"href="#"  onclick="eliminarCategoria(<?php echo $campos->idCat; ?>)"><img src="../img/remove_event_256.png" width="30px" height="30px"/></a></td>
  </tr>
  <?php }?>
</table>
    </body>
</html>