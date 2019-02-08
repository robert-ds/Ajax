<?php


echo '<select name="customers">';
class conex extends SQLite3
{
    function __construct()
    {
        $this->open('select.db');
    }
}

$db = new conex();
$resultado = $db->query("SELECT * FROM animavegetalmineral;");
while( $fila = $resultado->fetchArray(SQLITE3_ASSOC) )
{       
    if( $fila['tipo'] == $_GET['c'] )
    {
        echo "<option value='".$fila['elemento']."'>".$fila['elemento']."</option>";
    }
}
$db->close();
echo '</select>';

?>