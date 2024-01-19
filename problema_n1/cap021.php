<?php
// variables
$n1 = 0 ; $n2 = 0 ; $s = 0;


if(isset($_POST["btnCalcular"]))
{
    // Entradas
    $n1 = (int)$_POST["txtn1"];
    $n2 = (int)$_POST["txtn2"];
    // Proceso
    $s = $n1 + $n2  ;
}
?>
<html>
<head>
    <title>Problema 01</title>
	<style type="text/css">
	<!--
	.TextoFondo{
		background-color: #CCAFFF;
	}
	-->
	</style>
</head>
<body>
<form method="post" action="cap021.php">
    <table width="241" border="0">
        <tr>
            <td colspan="2"><strong>Problema 01</strong></td>
        </tr>
        <tr>
			<td width="81"> Numero_1</td>
			<td width="150">
            <input name="txtn1" type="text" id="txtn1" value="<?=$n1?>" />
			</td>
        </tr>

        <tr>
			<td> Numero_2</td>
			<td>
            <input name="txtn2" type="text" id="txtn2" value="<?=$n2?>" />
			</td>
        </tr>
		
        <tr>
            <td>Suma</td>
            <td>
                <input name="txts" type="text" class="TextoFondo" id="txts" value="<?=$s?>" />
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