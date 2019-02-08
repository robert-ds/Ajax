<?php 
class conex extends SQLite3
{
    function __construct()
    {
        $this->open("chat.db");
    }
}

$db = new conex();
$resultado = $db->query("INSERT INTO mensajes VALUES ('".date('U')."','jocarsa','".$_GET['mensaje']."');"); 
                    

$db->close();

echo '<meta http-equiv="REFRESH" content="0;url=index.php"/>';


?>