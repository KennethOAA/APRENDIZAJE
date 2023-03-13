<!DOCTYPE html>
<html lang="en">
<?php include 'conexionMSQL.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar PHP MYSQL</title>
</head>
<body style="text-align: center;margin:100px;">
<?php 
$con=new ConexionMYSQL("localhost","root","ken123A_.a","pruebaphp","estudiantes");
$con->conectarBD();
$arr = array("Rafaelito",23);
//ESCRIBIR PASANDOLE UN ARRAY
//$con->writeBD($arr);
//ELIMINAR CON PARAMETRO
//$con->deleteBD("edad",23);
//ACTUALIZAR DEPENDIENDO
//$con->updateBD("Nicolas","25","edad","nombre");
?>
<table style="width: 10%; border: 1px solid #000">
        <thead>
            <tr style="border: 1px solid #000;color:cornflowerblue;" >
                <td style="border: 1px solid #000">Nombre</td>
                <td style="border: 1px solid #000">Edad</td>
            </tr>
        </thead>
        <tbody>
            <?php
               $qry=$con->readBD();
               foreach ($qry as $row) {
            ?>
                <tr>
                    <td style="border: 1px solid #000"><?php echo $row['nombre']; ?></td>
                    <td style="border: 1px solid #000"><?php echo $row['edad']; ?></td>
                </tr>    
        <?php
                }
        ?>
        </tbody>
</table>
</body>
</html>