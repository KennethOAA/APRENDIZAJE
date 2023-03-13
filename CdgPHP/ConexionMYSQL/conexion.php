<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php

$host = "localhost";
$user = "root";
$clave = "ken123A_.a";
$bd = "pruebaphp";
$conectar = mysqli_connect($host,$user,$clave,$bd);

$consultar  = "SELECT * FROM estudiantes";
$query = mysqli_query($conectar, $consultar);
$array = mysqli_fetch_array($query);
            foreach ($query as $row) {?>
                <tr>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><?php echo $row['Edad']; ?></td>
                </tr>
            
        </tbody>
        <?php
            }
        ?>
    </table>

</body>
</html>