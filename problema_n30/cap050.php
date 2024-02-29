<?php
// Declaración de variables
$num = "" ; $estacion = "" ;

if (isset($_POST["btnCalcular"])){
    // Declaracion de entradas
    $num = (int) $_POST["txtnum"];
    
    switch($num){
        case 1:
        case 2:
        case 3:
            $estacion = "Verano";
        break;
        case 4:
        case 5:
        case 6:
            $estacion = "Otoño";
        break;
        case 7:
        case 8:
        case 9:
            $estacion = "Invierno";
        break;
        case 10:
        case 11:
        case 12:
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
    <link rel="stylesheet" href="styles.css">
    <title>Problema 30</title>
</head>
<body>
    <h1>Problema 30</h1>
    <p>Al ingresar el número de un mes, devolver la estación del año de acuerdo a la siguiente tabla.</p>

    <table border=1 class="tabla-estaciones">
        <tr>
            <td>Mes</td>
            <td>Estación</td>
        </tr>
        <tr>
            <td>1,2,3</td>
            <td>Verano</td>
        </tr>
        <tr>
            <td>4,5,6</td>
            <td>Otoño</td>
        </tr>
        <tr>
            <td>7,8,9</td>
            <td>Invierno</td>
        </tr>
        <tr>
            <td>10,11,12</td>
            <td>Primavera</td>
        </tr>
    </table>

    <br>

    <form method="post" action="cap050.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 30</strong></td>
        </tr>
        <tr>
            <td width="83">Mes</td>
            <td>
                <input name="txtnum" type="text"  id="txtnum" value="<?=$num?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Estación</td>
            <td>
                <input class="Texto-fondo" name="txtestacion" type="text"  id="txtestacion" value="<?=$estacion?>"/>
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