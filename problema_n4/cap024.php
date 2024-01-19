<?php
// Hallar la potencia de a a la n, donde a y n pertenece a z elevado a la n (numero enteros positivos)
// Para la solución de este problema, se requiere que el uduario ingrese dos numeros positivos a y n.
// luego que el sistema procese y obtenga la potencia p.

// variable
$a = 0 ; $n = 0 ; $p = 0;

if(isset($_POST["btnCalcular"])){
    // Entradas
    $a = (int) $_POST["txta"];
    $n = (int) $_POST["txtn"];

    // proceso

    $p = pow ($a,$n); 
}

?>

<html>
<head>
        <title>Problema 4</title>
    <style type="text/css">
        <!--
            .TextoFondo{
                background-color: #CCFFAA;
            }
        -->
    </style>
</head>
<body>
<form method="post" action="cap024.php">
    <table width="226" border="0">
        <tr>
            <td colspan="2"><trong>Problema 04</strong>
        </tr>
        <tr>
            <td width="67">Base_a</td>
            <td>
                <input name="txta" id="txta" type="text" value="<?=$a?>" />
            </td>
        </tr>
        <tr>
            <td>Exponente_n</td>
            <td>
                <input name="txtn" id="txtn" type="text" value="<?=$n?>" />
            </td>
        </tr>
        <tr>
            <td>Potencia</td>
            <td>
                <input name="txtp" id="txtp" type="text" value="<?=$p?>" class="TextoFondo" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input name="btnCalcular" id="btnCalcular" type="submit" value="Calcular"  />
            </td>
        </tr>
    </table>
</form>
</body>
</html>