<?php
// Hallar la radicación de un numero positivo, considere solo numeros enteros

// variable
$a = 0 ; $n = 0 ; $r = 0;

if(isset($_POST["btnCalcular"])){
    // Entradas
    $a = (int) $_POST["txta"];
    $n = (int) $_POST["txtn"];

    // proceso

    if ($n > 0 and $a > 0){
        $r = pow ($a,(1/$n)); 
    }

    
}

?>

<html>
<head>
        <title>Problema 5</title>
    <style type="text/css">
        <!--
            .TextoFondo{
                background-color: #CCFFAA;
            }
        -->
    </style>
</head>
<body>
<form method="post" action="cap025.php">
    <table width="226" border="0">
        <tr>
            <td colspan="2"><trong>Problema 05</strong>
        </tr>
        <tr>
            <td width="67">a_radicando</td>
            <td>
                <input name="txta" id="txta" type="text" value="<?=$a?>" />
            </td>
        </tr>
        <tr>
            <td>n_radical_2_3</td>
            <td>
                <input name="txtn" id="txtn" type="text" value="<?=$n?>" />
            </td>
        </tr>
        <tr>
            <td>Radicación</td>
            <td>
                <input name="txtr" id="txtr" type="text" value="<?=$r?>" class="TextoFondo" />
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