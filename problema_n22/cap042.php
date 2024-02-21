<?php
/* Un negocio tiene dos tipos de cliente: cliente general (G) y cliente afiliado (A). Tambien acepta dos 
formas de pago: al contado (c) y en plazos (p). Nos pidem crear un programa que al ingresar el monto de la 
compra se obtenga el monto del descuento o el monto del regargo y el total a pagar, según la siguiente tabla.
*/
// Declaración de variable
$mc = "" ; $tc = "" ; $fp = "" ; $m = "" ; $r = "" ; $tp = "" ;

if (isset($_POST["btnCalcular"])){
    $mc = (float) $_POST["txtmc"];
    $tc = (String) $_POST["txttc"];
    $fp = (String) $_POST["txtfp"];

    if($tc == "G"){
        if($fp == "C"){
            $m = $mc * 0.15;
            $tp = $mc - $m ;
            $r = "Descuento 15%";
        }else{
            if($fp == "P"){
                $m = $mc * 0.10;
                $tp = $mc + $m ;
                $r = "Recargo 10%";
            }
        }
    }

    if($tc == "A"){
        if($fp == "C"){
            $m = $mc * 0.20;
            $tp = $mc - $m ;
            $r = "Descuento 20%";
        }else{
            if($fp == "P"){
                $m = $mc * 0.05;
                $tp = $mc + $m ;
                $r = "Recargo 5%";
            }
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 22</title>
</head>
<body>
    <h1>Problema 22</h1>
    <p>
        Un negocio tiene dos tipos de cliente: cliente general (G) y cliente afiliado (A). <br> 
        Tambien acepta dos formas de pago: al contado (c) y en plazos (p). Nos pidem crear un programa <br>
        que al ingresar el monto de la compra se obtenga el monto del descuento o el monto del regargo y el total a pagar, según la siguiente tabla.
    </p>

    <table border="1" class="tabla-clientes">
        <tr class="fondo-negro">
            <td>Tipo</td>
            <td>Contado (C) <br> Descuento</td>
            <td>Plazos (P) <br> Recargo</td>
        </tr>

        <tr>
            <td>Cliente general (G)</td>
            <td>15%</td>
            <td>10%</td>
        </tr>

        <tr>
            <td>Cliente afiliado (A)</td>
            <td>20%</td>
            <td>5%</td>
        </tr>
    </table>
    
    <br>

<form method="post" action="cap042.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 22</strong></td>
        </tr>
        <tr>
            <td width="130">Monto de compra</td>
            <td>
                <input name="txtmc" type="text"  id="txtmc" value="<?=$mc?>"/>
            </td>
        </tr>
        <tr>
            <td width="130">Tipo de cliente</td>
            <td>
                <input name="txttc" type="text"  id="txttc" value="<?=$tc?>" />
            </td>
        </tr>
        <tr>
            <td width="130">Forma de pago</td>
            <td>
                <input name="txtfp" type="text"  id="txtfp" value="<?=$fp?>" />
            </td>
        </tr>
       <tr>
            <td>
                <input name="txtr" type="text"  id="txtr" value="<?=$r?>" class="fondo"/>
            </td>
            <td>
                <input name="txtm" type="text"  id="txtm" value="<?=$m?>" class="fondo" />
            </td>
        </tr>
        <tr>
            <td width="130">Total a pagar</td>
            <td>
                <input name="txttp" type="text"  id="txttp" value="<?=$tp?>" />
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