<?php
//echo $_GET['c'];

//SE crea la clase conex que hereda del objeto SQLite3, pasando y creando el constructor que abri_
//ra la base de datos
//Nota: Se debe habilitar la extension SQLite3 en el archivo php.ini line 920 ~
    class conex extends SQLite3 {
        function __construct(){
            $this->open('clientes.db');
        }
    }
    // Instanciamos la clase conex
    $db = new conex();
    //Creamos una variable que contendra la consulta a la base de datos
    $resultado = $db->query("SELECT * FROM clientes");
    
    //Se crea el bucle para cuando se cumpla los requisitos!
    while($fila = $resultado->fetchArray(SQLITE3_ASSOC) )
    {
        if($fila['nombre'] == $_GET['c'])
        {
            echo $fila['nombre'];
            echo " - ";
            echo $fila['direccion'];
            echo " - ";
            echo $fila['telefono'];
            echo " - ";
            echo $fila['codigopostal'];
            echo " - ";
            echo $fila['poblacion'];
            echo " - ";
            echo $fila['pais'];
        }
    }
//Por seguridad se debe cerrar la conexion a la base de datos
$db->close();
 



 ?>