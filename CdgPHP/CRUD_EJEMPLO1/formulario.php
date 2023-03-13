<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Basico</title>
</head>
<body>
    <?php include"recolectar.php";
           iniciarBD();    
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Ingresa tu nombre
        <input type="text" name="name"><br/><br/>
        Ingresa tu edad
        <input type="text" name="age"><br/><br/>
        <input type="submit">
    </form>
</body>
</html>
