<?php 
include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();


if(isset($_POST['op']))
{
   $cedula=$_POST['idAd'];
   $nombreAdmin = $_POST['nomA'];
   $contrasena = $_POST['cont'];
   $email =$_POST['ema'];

$sql ="INSERT INTO admin(idAdmin, nombreAdmi, contrasena, email) VALUES($cedula,'$nombreAdmin', '$contrasena', '$email')";
$consulta=  mysql_query($sql);
if ($consulta)
{
    echo "<script>
    alert('Datos registrados');
    location.href='administrador.php';
    </script>";
}  
                
}                         
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estiloAgregarAdministrador.css" type="text/css" media="screen" />
        <script src="sropys/script.js"></script>
        <title>Administrador</title>
    </head>
    <?php include 'header.php';?>
    <body>
        <h1>Administradores</h1>
        <br>
        <br>
        <form action="" method="POST" enctype="multipart/form-data">

<table class="tg">
   <tr>
    <td class="tg-3bsj" colspan="2">Agregar Administradores</td>
  </tr>
  <tr>
    <td class="tg-031e">Cedula</td>
    <td class="tg-031e"><input type="text" name="idAd" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Nombre usuario</td>
    <td class="tg-031e"><input type="text" name="nomA" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Contraseña</td>
    <td class="tg-031e"><input type="text" name="cont" required></td>
  </tr>
  <tr>
    <td class="tg-031e">Email</td>
    <td class="tg-031e"><input type="email" name="ema" required></td>
  </tr>
  <tr>
    <td class="tg-ymxz" colspan="2"><input type="submit" name="op" value="Agregar Administrador"></td>
  </tr>
</table>
       </form> 
    </body>
</html>