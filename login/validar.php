<?php
class conex extends SQLite3
{
    function __construct()
    {
        $this->open('usuarios.db');
    }
}

$db = new conex();

$resultado = $db->query("SELECT * FROM usuarios");

while( $fila = $resultado->fetchArray(SQLITE3_ASSOC) )
{
    if( $fila['usuario'] == $_GET['u'] ){
        //<div id="" style="width:180px;height:30px;background:red;border-radius:15px;position:absolute;-webkit-transform:translate(90px,-40px);opacity:0.5;z-index:-100;"></div> 

        echo '
        <div id="" style="width:180px;height:30px;background:red;border-radius:15px;position:absolute;-webkit-transform:translate(90px,-40px);opacity:0.5;z-index:-100;"></div>
        ';
    }else
    {
        echo '
        <div id="" style="width:180px;height:30px;background:green;border-radius:15px;position:absolute;-webkit-transform:translate(90px,-40px);opacity:0.5;z-index:-100;"></div>
        ';
        
        //<div id="" style="width:180px;height:30px;backgraound:green;border-radius:15px;position:absolute;-webkit-transform:translate(90px,-40px);opacity:0.5;z-index:-100;"></div>
    }
}


?>