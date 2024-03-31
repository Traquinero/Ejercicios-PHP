<?php
// Declaración de variables
$op="" ; $nivel="" ; $monto=0;

if(isset($_POST["btnCalcular"])){
    $op = strtoupper((string)$_POST["txtop"]);
    $nivel = strtoupper((string) $_POST["txtnivel"]);


    if($op=="N"){
        if($nivel=="A"){
            $monto=300;
        }
        elseif($nivel=="B"){
            $monto=200;
        }
        elseif($nivel=="C"){
            $monto=100;
        }
    }

    if($op=="P"){
        if($nivel=="A"){
            $monto=400;
        }
        elseif($nivel=="B"){
            $monto=300;
        }
        elseif($nivel=="C"){
            $monto=200;
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-n34.css">
    <title>Problema 34</title>
</head>
<body>
    <h1>Problema 34</h1>
    <p>Determine el importe a pagar para el examen de admisión de una universidad, cuyo valor depende
        del nivel socioeconomico y el colegio de precedencia.
    </p>

<table border=1 class="tabla-colegio">
    <tr>
        <td></td>
        <td colspan="3" class="celda-color">Nivel Social</td>
    </tr>
    <tr>
        <td class="celda-color">Colegio</td>
        <td><b>A</b></td>
        <td><b>B</b></td>
        <td><b>C</b></td>
    </tr>
    <tr>
        <td><b>N</b>acional</td>
        <td>300</td>
        <td>200</td>
        <td>100</td>
    </tr>
    <tr>
        <td><b>P</b>articular</td>
        <td>400</td>
        <td>300</td>
        <td>200</td>
    </tr>
</table>

<br>

    <form method="post" action="cap054.php">
    <table width="400" class="tabla-formulario">
        <tr>
            <td colspan="2"><strong>Problema 34</strong></td>
        </tr>
        <tr>
            <td width="100">Colegio</td>
            <td>
                <input name="txtop" type="text"  id="txtop" value="<?=$op?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Nivel</td>
            <td>
                <input name="txtnivel" type="text"  id="txtnivel" value="<?=$nivel?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Monto a pagar</td>
            <td>
                <input name="txtmonto" type="text"  id="txtmonto" value="<?=$monto?>"/>
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