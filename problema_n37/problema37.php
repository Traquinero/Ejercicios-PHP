<?php
// Declaración de variables
$d1 = "" ; $d2 = "" ; $d3 = "" ; $premio = "" ; 

if(isset($_POST["btnCalcular"])){
    $d1 = (int) $_POST["txtd1"];
    $d2 = (int) $_POST["txtd2"];
    $d3 = (int) $_POST["txtd3"];

    if($d1==6 and $d2==6 and $d3 == 6){
        $premio="Oro";
    }

    if($d1!=6 and $d2==6 and $d3==6){
        $premio="Plata";
    }

    if($d2!=6 and $d1==6 and $d3==6){
        $premio="Plata";
    }

    if($d3!=6 and $d1==6 and $d2==6){
        $premio="Plata";
    }

    if($d1==6 and $d2!=6 and $d3!= 6){
        $premio="Bronce";
    }

    if($d1!=6 and $d2==6 and $d3!= 6){
        $premio="Bronce";
    }

    if($d1!=6 and $d2!=6 and $d3== 6){
        $premio="Bronce";
    }

    if($d1!=6 and $d2!=6 and $d3!= 6){
        $premio="Perdio";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo_problema37.css" rel="stylesheet" type="text/css" />
    <title>Problema 37</title>
</head>
<body>
    <h1>Problema n° 37</h1>
    <p>
        Diseñe un algoritmo que califique el puntaje obtenido en el lanzamiento de tres dados <br>
        en base a la cantidad de seis obtenidos, de acuerdo a lo siguiente:
    </p>

    <ul>
        <li><b>Tres seis:</b> Oro</li>
        <li><b>Dos seis:</b> Plata</li>
        <li><b>Un seis:</b> Bronce</li>
        <li><b>Ningún seis:</b> Perdió</li>
    </ul>

<br>

    <form method="post" action="problema37.php">
    <table width="400" class="tabla-formulario">
        <tr>
            <td colspan="2"><strong>Problema 37</strong></td>
        </tr>
        <tr>
            <td width="100">Dado1</td>
            <td>
                <input name="txtd1" type="text"  id="txtd1" value="<?=$d1?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Dado2</td>
            <td>
                <input name="txtd2" type="text"  id="txtd2" value="<?=$d2?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Dado3</td>
            <td>
                <input name="txtd3" type="text"  id="txtd3" value="<?=$d3?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Premio</td>
            <td>
                <input name="txtpremio" type="text"  id="txtpremio" value="<?=$premio?>"/>
            </td>
        </tr>
            <td> &nbsp;</td>
            <td>
                <input name="btnCalcular" type="Submit"  id="btnCalcular" value="Calcular"/>
            </td>
         </tr>
    </table>
    </form>   
</body>
</html>