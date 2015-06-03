function eliminarProducto(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminarProducto.php?id="+pos;
    else
        return false;
}

function modificarProducto(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificarProducto.php?id="+pos;
    else
        return false;
}

function eliminarUsuario(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminarUsuario.php?id="+pos;
    else
        return false;
}

function modificarUsuario(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificarUsuario.php?id="+pos;
    else
        return false;
}


function eliminarCategoria(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminarCategoria.php?id="+pos;
    else
        return false;
}

function modificarCategoria(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificarCategoria.php?id="+pos;
    else
        return false;
}


function eliminarAdmin(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminarAdmin.php?id="+pos;
    else
        return false;
}

function modificarAdmin(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificarAdmin.php?id="+pos;
    else
        return false;
}