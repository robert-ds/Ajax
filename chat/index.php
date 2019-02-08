<!DOCTYPE HTML>
<html>
<head>
    <title>CHAT</title>
    <meta  charset="utf-16" />

    <script type="text/javascript">
        function ventanachat()
        {
            var xmlhttp;

            if(window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }else
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            var fetch_unix_timestamp = "";
            fetch_unix_timestamp = function()
            {
                return parseInt(new Date().getTime().toString().substring(0, 10))
            }
            var timestamp = fetch_unix_timestamp();

            var xmlhttp.onreadystatechange = function()
            {
                if( xmlhttp.readyState == 4 )
                {
                    document.getElementById("ventanachat").innerHTML = xmlhttp.responseText;
                    setTimeout('ventanachat()',1000);
                }
            }

            xmlhttp.open("GET","db.php"+"?t="+timestamp,true);
            xmlhttp.send(null);
            
        }

        window.onload = function startrefresh()
        {
            setTimeout('ventanachat()',1000);
        }
    </script>
</head>
<body>
    <form action="insert.php" method="GET">
        <input type="text" name="mensaje" id="enviachat">
        <input type="submit">
    </form><br>
    <div id="ventanachat" style="width:200px;height:200px;border:1px solid Black;overflow:hidden;">
        <script type="text/javascript">
            ventanachat();
        </script>
    </div>
</body>
</html>