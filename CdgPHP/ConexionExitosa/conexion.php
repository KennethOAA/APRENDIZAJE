<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    body {
  background-image: url("https://i.pinimg.com/originals/d4/7c/8a/d47c8ae885049396c98d799ffab8fab3.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}
</style>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Logo_ESPE.png" style="position: relative; width: 50%; display: inline-flexbox;margin-left: 25%;"/>

    <table class="table table-striped custab">
    <thead style="background-color: cadetblue;">
       <center><h1>Ingenieria de Seguridad</h1></center> 
       <center><h3>Proyecto Amazon Web Services Grupo 3</h3></center> 
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EDAD</th>
        </tr>
    </thead>
    <?php

$host = "dbserver.cby5sl61nuzb.us-west-1.rds.amazonaws.com";
$user = "admin";
$clave = "admin123";
$bd = "grupo3";

//ken123A_.a
//El valor de XAMPP en la base 
/*
$host = "127.0.0.1:33065";
$user = "kenneth";
$clave = "ken123A";
$bd = "espe";
$conectar = mysqli_connect($host,$user,$clave,$bd);
*/
$conectar = mysqli_connect($host,$user,$clave,$bd);
$val = 1;
$consultar  = "SELECT * FROM estudiantes";
$query = mysqli_query($conectar, $consultar);
$array = mysqli_fetch_array($query);
            foreach ($query as $row) {?>
                <tr>
                    <td><?php echo $val; ?></td> 
                    <td><?php echo $row['nombre']; ?></td>
                    
                    <td><?php echo $row['edad']; ?></td>
                </tr>
            
        </tbody>
        <?php
        $val = $val +1;
            }
        ?>
    </table>
    </div>
</div>



</body>
</html>



