<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <h1>Examen Big Data Esteban Rivera</h1>
</head>
   

<body>
<?php   
    $nombre = "Esteban Rivera";
   
    $carrera = "Big Data";
 
    $Asignatura = "Programación Web";

    $calificacion="10/10";

    $estado_estudiante="Aprobado";

    $resumen_calificacion = array("La calificación del estudiante es: "=>$calificacion,"el mismo se encuentra"=>$estado_estudiante);
 
    print("Uso de print: El Nombre del estudiante es: ".$nombre);
    echo("<br>");
    echo("Uso de echo: La carrera del estudiante es: ".$carrera);
    echo("<br>");
    printf("Uso de printf: La carrera del estudiante es: ".$Asignatura);
    echo("<br>");
    print_r($resumen_calificacion)




?>
</body>
</html>