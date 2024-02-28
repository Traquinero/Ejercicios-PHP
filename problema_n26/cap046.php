<?php
// Declaración de variables
$num = "" ; $estacion = "" ;

if (isset($_POST["btnCalcular"])){
    $num = (int) $_POST["txtnum"];
    switch($num){
        case 1:
            $estacion = "Verano";
            break;
        case 2:
            $estacion = "Otoño";
            break;
        case 3:
            $estacion = "Invierno";
            break;
        case 4:
            $estacion = "Primavera";
            break;
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 26</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Problema 26</h1>
   
<p>
    Al Ingresar un número entre 1 y 4, devolver la estación del año de acuerdo a la siguiente tabla.
</p>

<table class="tabla-estaciones">
    <tr class="fondo-fila">
        <td>Número</td>
        <td>Estación</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Verano</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Otoño</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Invierno</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Primavera</td>
    </tr>
</table>

<br>

    <form method="post" action="cap046.php">
    <table width="500">
     <tr>
            <td colspan="2"><strong>Problema 26</strong></td>
        </tr>
        <tr>
            <td width="83">Número</td>
            <td>
                <input name="txtnum" type="text"  id="txtnum" value="<?=$num?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Estación</td>
            <td>
                <input name="txtestacion" type="text"  id="txtestacion" value="<?=$estacion?>" class="fondo-resultado"/>
            </td>
        </tr>
        <tr>
            <td> &nbsp;</td>
            <td>
                <input name="btnCalcular" type="Submit"  id="btnCalcular" value="Calcular"/>
            </td>
         </tr>
    </table>
    </form>   
</body>
</html>