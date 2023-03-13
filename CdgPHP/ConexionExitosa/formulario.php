<?php // formtest.php
include 'conexionMSQL.php';
$host = "localhost";
$user = "root";
$clave = "ken123A_.a";
$bd = "pruebaphp";
$con=new ConexionMYSQL("localhost","root","ken123A_.a","pruebaphp","estudiantes");
$con->conectarBD();
$arr = array("Rafaelito",23);
 echo <<<_END
 <html>
 <head>
 <title>Formulario Basico</title>
 </head>
 <body>
 <form method="post" action="recolectar.php">
Ingresa tu nombre
 <input type="text" name="name"><br/><br/>
 Ingresa tu edad
 <input type="text" name="age"><br/><br/>
 <input type="submit">
 </form>
 </body>
 </html>
_END;
?>