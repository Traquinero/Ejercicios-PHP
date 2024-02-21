<?php
//Realiza un programa que reciba una cantidad de minutos y muestre por 
//pantalla a cuantas horas y minutos corresponde. Por ejemplo: 1000 minutos son 16 horas y 40 minutos. 

// Declaración de variables
$tiempo = "" ; $horas = "" ; $minutos = "" ; $num = "";

if (isset($_POST["btnCalcular"])){
    $tiempo = (int) $_POST["txttiempo"];
    // proceso

    $num = $tiempo * (1/60);
    $horas = floor($num); 
    /* Pero si lo que quieres es redondear a entero tienes dos opciones:
        con ceil(float) te devuelve el entero superior
        con floor(float) el inferior
    */
    $minutos = $tiempo % 60;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 25</title>
</head>
<body>

<h1>Problema 25</h1>

<p>
    Realiza un programa que reciba una cantidad de minutos y muestre por <br>
    pantalla a cuantas horas y minutos corresponde. Por ejemplo: 1000 minutos son 16 horas y 40 minutos. 
</p>

 
<form method="post" action="cap045.php">
    <table>
        <tr>
            <td colspan="2"><strong>Problema 25</strong></td>
        </tr>
        <tr>
            <td width="200">Ingresa la cantidad de minutos:</td>
            <td>
                <input name="txttiempo" type="text"  id="txttiempo" value="<?=$tiempo?>"/>
            </td>
        </tr>
         <tr>
            <td width="200">Horas</td>
            <td>
                <input name="txthoras" type="text"  id="txthoras" value="<?=$horas?>" />
            </td>
        </tr>
        <tr>
            <td width="200">Minutos</td>
            <td>
                <input name="txtminutos" type="text"  id="txtminutos" value="<?=$minutos?>" />
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