<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dia de la semana</title>
  </head>
  <body>
    <?php 
        $nombre = "Kenneth";
        $apellido = "Andradr"; 
        $copiaNombre = $nombre;
        echo "Mi nombre es: $nombre";
        echo "<br>";
        echo "Mi apellido es: $apellido";
        echo "<br>";
        echo "COPIA: $nombre";
        echo "<br>";
        $anio = 21;
        echo "Tengo: $anio";
        $team = array('Kenneth','Luis','Richard','Nissel','Estrella','Yandro','Fakundo');
        echo "<br>";
        echo "Equipo 2: $team[2]";
        $teamDinamita = array(array('a','b','c'),array('d','e','f'),array('g','h','i'));
        echo "<br>";
        echo $teamDinamita[2][2];
        $numeroNomral = 3;
        echo "<br>";
        echo "LADOOo: ";
        echo $numeroNomral.$anio;
        echo "<br>";
        echo $numeroNomral**3;
        echo "<br>";
    ?>
  </body>
</html>
