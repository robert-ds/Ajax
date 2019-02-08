<?php

require_once 'data.php';

if($_GET)
{
    $sql = 'SELECT * FROM clientes';

    while( $fila = fetch_array($sql) )
    {
        if($fila['nombre'] == $_GET['c']){
								echo $fila['nombre'];
								echo ' - ';
								echo $fila['direccion'];
								echo ' - ';
								
								echo $fila['telefono'];
								echo ' - ';
								echo $fila['codigopostal'];
								echo ' - ';
								echo $fila['poblacion'];
								echo ' - ';	
								echo $fila['pais'];
								echo ' - ';
							}
    }
    

}

<html>
    <head>
        <title>Ajax Database</title>
        <meta charset="UTF-16" />

        <script type="text/javascript">
            function muestracliente(str)
            {
               var xmlhttp;
            //Comprobamos si no hay alguna selecion, si es asi, no devolvera nada.   
               if(str == "")
               {
                document.getElementById("txtHint").innerHTML="";
                return;
               }

            //Comprobamos las versiones de los navegadores y se crea la instancia del objeto XMLHttpRequest    
               if(window.XMLHttpRequest)
               {
                xmlhttp = new XMLHttpRequest();
               }
               else
               {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
               }

            //Comprobamos si realmente se creo la instancia de ajax   
               xmlhttp.onreadystatechange = function()
               {
                   if(xmlhttp.status == 200 && xmlhttp.readyState == 4 )
                   {
                        document.getElementById("cliente").innerHTML = xmlhttp.responseText;
                   }
               }
               xmlhttp.open("GET","db.php?c="+str,true);
               xmlhttp.send();
            }        
        </script>
    </head>

  <body>
      <h1>Detalles de Clientes</h1>
      <form action="">
          <select name="clientes" id="" onchange="muestracliente(this.value)">
              <option value="">Seleciona un cliente</option>
              <option value="Robert">Robert</option>
              <option value="Ronny">Ronny</option>
              <option value="Alexander">Alexander</option>
              <option value="Carlos">Carlos</option>
          </select>
          <div id="cliente"> La información de Su Cliente:</div>
      </form>
  </body>  
</html>

?>