<?php 
class cn extends SQLite3
{
    function __construct()
    {
        $this->open('chat.db');
    }
}

$db = new cn();
$consulta = $db->query("SELECT * FROM mensajes ORDER BY utc DESC LIMIT 5;");

while( $fila = $consulta->fetchArray(SQLITE3_ASSOC) )
{
    echo $fila['utc']; echo '-';
    
    echo $fila['autor']; echo '-';

    echo $fila['mensaje']; echo "<br>";

}

$db->close();



?>