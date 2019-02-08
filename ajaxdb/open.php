<?php
class base extends SQLite3
{
    function __construct()
    {
        $this->open('clientes.db');
    }
}

$db = new base();

if($db)
{
    echo "Conexion Exitosa";
}else
{
    echo $db->lastErrorMsg();
}


?>