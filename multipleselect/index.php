<!DOCTYPE HTML>
<html lang="ES">
    <head>
        <title>Multiple Select</title>
        <meta charset="utf-8">
        <script type="text/javascript">
            function showselect(str)
            {
                var xmlhttp;
                //Comprobamos si no se ha seleccionado nada, si es así, no ocurre nada!
                if( str == "" )
                {
                    document.getElementById("textHint").innerHTML = "";
                    return;
                }

                //Comprobamos los tipos de  navegadores y se instancian los objetos de acuerdo
                //al que este instanciado.
                if(window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }

                //Comprobamos si se creo efectivamente la instancia del servidor AJAX
                xmlhttp.onreadystatechange = function()
                {
                    if( xmlhttp.status == 200 && xmlhttp.readyState == 4 )
                    {
                        document.getElementById("cliente").innerHTML = xmlhttp.responseText;
                    }
                }

                //Abrimos la conexion y enviamos las peticiones en modo asincrono
                xmlhttp.open("GET","db.php?c="+str,true);
                xmlhttp.send();
            }    
        </script>
    </head>
<body>
    <form action="">
        <select name="customers" onchange="showselect(this.value)" >
            <?php include "populartipos.php" ?>
        </select>
    </form>

    <div id="cliente">
        <select name="2" >

        </select>
    </div>
</body>    

</html>