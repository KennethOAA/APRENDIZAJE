<?php
    include "conexionMSQL.php";
    $con;
    $Name = $Age = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST["name"]);
    $age = ($_POST["age"]);
    }

    function iniciarBD(){
        GLOBAL $con;
        $con=new ConexionMYSQL("localhost","root","ken123A_.a","pruebaphp","estudiantes");
        $con->conectarBD();
        echo " P ";
    }

    function escribirInfo(){
        GLOBAL $con;
        $nombre=$_REQUEST['name'];
        echo $nombre;
        echo "SI LLEGA";
        //$arr = array($val['name'],$val['age']);
        //echo $arr[0];
        //$con->writeBD($arr);
    }
    //ESCRIBIR PASANDOLE UN ARRAY
    //$con->writeBD($arr);
    //ELIMINAR CON PARAMETRO
    //$con->deleteBD("edad",23);
    //ACTUALIZAR DEPENDIENDO
    //$con->updateBD("Nicolas","25","edad","nombre");
?>