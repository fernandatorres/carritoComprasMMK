<?php
class conexion
{
    public function conctar()
    {
        $mysqli = new mysqli("localhost", "root", "mysql", "MiniMark");

/* comprobar la conexión */
        if (mysqli_connect_errno()) 
            {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
            }
      return $mysqli;
    }
       
}


