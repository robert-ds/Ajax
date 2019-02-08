<?php 
class conexion extends SQLite3
{
    function __construct()
    {
        $this->open('select.db');
    }
}

$db = new conexion();
$resultado = $db->query("SELECT * FROM tipos;");

while( $fila = $resultado->fetchArray(SQLITE3_ASSOC) )
{
    echo "<option value='".$fila['tipo']."'>".$fila['tipo']."</option>";
}

$db->close();


?>