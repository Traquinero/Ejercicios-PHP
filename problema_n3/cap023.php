<?php
// Dado el valor de venta de un producto, hallar el IGV (19%) y el precio de venta.
// Para la solución de este problema, se requiere que el usuario ingrese el valor de venta del producto.
// luego que el sistema realice el calculo respectivo para hallar el IGV y el precio de venta.
// El Impuesto General a las Ventas IGV
// igv <- vv * 0.19
// pv <- vv + igt
// Entrada: valor de la venta (vv)
// salida: el IGV (igv) y el precio de venta (pv)

// variables
$vv = 0.0 ; $igv = 0.0 ; $pv = 0.0 ;

if (isset($_POST["btnCalcular"])){
    // Entrada
    $vv = (float) $_POST["txtvv"];
    // proceso
    $igv = $vv * 0.19;
    $pv = $vv + $igv;

}

?>

<html>
<head>
    <title>Problema 03</title>
    <style type="text/css">
    <!--
    .TextoFondo{
        background-color: #CCFFFF;
    }
    -->
    </style>
</head>
<body>
    <form method="post" action="cap023.php">
        <table width="270" border="0">
            <tr>
                <td colspan="2"><strong>Problema 03</strong></td>
            </tr>
            <tr>
                <td width="109"> Valor_de_venta</td>
                <td width="151">
                <input name="txtvv" type="text" id="textvv" value="<?=$vv?>" />
                </td>
            </tr>
            <tr>
                <td>IGV</td>
                <td>
                <input name="textigv" type="text" id="textigv" class="TextoFondo" value="<?=$igv?>" />
                </td>
            </tr>
            <tr>
                <td>Precio venta</td>
                <td>
                <input name="textpv" type="text" id="txtpv" class="TextoFondo" value="<?=$pv?>" />
                </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>
                <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />
            </td>
            </tr>
        </table>
    </form>
</body>
</html>