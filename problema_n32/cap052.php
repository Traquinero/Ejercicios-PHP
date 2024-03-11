<?php
// Declaración de variables 
$dia = "" ; $mes = "" ; $estacion = "" ;

if (isset($_POST["btnCalcular"])){
    $dia = (int) $_POST["txtdia"];
    $mes = (int) $_POST["txtmes"];
    $estacion = (string) $_POST["txtestacion"];

    switch($mes){
        case 1:
        case 2:
        case 3:
            $estacion = "VERANO";
        if($mes == 3 and $dia >20){
            $estacion = "OTOÑO";
        }
        break;
        case 4:
        case 5:
        case 6:
            $estacion = "OTOÑO";
            if($mes==6 and $dia > 21){
                $estacion = "INVIERNO";
            }
        break;
        case 7:
        case 8:
        case 9:
                $estacion = "INVIERNO";
                if($mes==9 and $dia > 22){
                    $estacion = "PRIMAVERA";
                }
            break;
        case 10:
        case 11:
        case 12:
                $estacion = "PRIMAVERA";
                if($mes==12 and $dia > 20){
                        $estacion = "VERANO";
                    }
            break;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-n32.css">
    <title>Problema 32</title>
</head>
<body>
    <h1>Problema 32</h1>
    <p>Al ingresar el día y el número de un mes, devolver la estación del año de acuerdo a la siguiente tabla.</p>

    <table border=1 class="tabla-estacion">
        <tr class="celda-color">
            <td>Estación</td>
            <td>Tiempo</td>
        </tr>
        <tr>
            <td>Verano</td>
            <td>Del 21 de diciembre al 20 de marzo</td>
        </tr>
        <tr>
            <td>Otoño</td>
            <td>Del 21 de marzo al 21 de junio</td>
        </tr>
        <tr>
            <td>Invierno</td>
            <td>Del 22 de junio al 22 de septiembre</td>
        </tr>
        <tr>
            <td>Primavera</td>
            <td>Del 23 de septiembre al 20 de diciembre</td>
        </tr>
    </table>

    <br>

    <form method="post" action="cap052.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 32</strong></td>
        </tr>
        <tr>
            <td width="83">Día</td>
            <td>
                <input name="txtdia" type="text"  id="txtdia" value="<?=$dia?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Mes</td>
            <td>
                <input name="txtmes" type="text"  id="txtmes" value="<?=$mes?>"/>
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