<?php include '../conexion.php';
include '../conex.php';
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        $id=$_GET['id'];
        $sql ="SELECT * FROM admin where idAdmin=$id ";
        $consulta= $mysqli->query($sql);
        $campos=  mysqli_fetch_object($consulta);
    
        if(isset($_POST['op']))
        {
        if($id > 0 )
        {
            $cedula=$_POST['idAd'];
            $nombreAdmin = $_POST['nomA'];
            $contrasena = $_POST['cont'];
            $email =$_POST['ema'];
        
        }
                 
         $query = "update admin set idAdmin=$cedula, nombreAdmi='$nombreAdmin', contrasena='$contrasena',"
         . "email='$email' WHERE idAdmin=$id";
     
        $mysqli->query($query) or die('Error al procesar consulta: ' . mysql_error());
        echo 'usuario modificada';
        header('Location:administrador.php');               
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
    <td class="tg-3bsj" colspan="2">Modificar Administradores</td>
  </tr>
  <tr>
    <td class="tg-031e">Cedula</td>
    <td class="tg-031e"><input type="text" name="idAd" required value="<?php echo $campos->idAdmin;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Nombre usuario</td>
    <td class="tg-031e"><input type="text" name="nomA" required value="<?php echo $campos->nombreAdmi;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Contraseña</td>
    <td class="tg-031e"><input type="text" name="cont" required value="<?php echo $campos->contrasena;?>"></td>
  </tr>
  <tr>
    <td class="tg-031e">Email</td>
    <td class="tg-031e"><input type="email" name="ema" requiredvalue="<?php echo $campos->email;?>"></td>
  </tr>
  <tr>
    <td class="tg-ymxz" colspan="2"><input type="submit" name="op" value="Modificar Administrador"></td>
  </tr>
</table>
       </form> 
    </body>
</html>