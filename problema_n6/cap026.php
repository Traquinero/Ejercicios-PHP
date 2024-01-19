<?php
// Dado un numero de 5 digitos, devolver el numero en orden inverso.
// Para la solucion de este problema, se requiere que el usuario ingrese un numero <<n>>; luego, que el sistema procese y obtenga el numero 
// inverso <<ni>>, realizando 4 divisiones sucesivas entre 10, para acumular el residuo y el ultimo cociente. 


// variable
$n = 0 ; $ni = 0 ; $r = 0 ; $tmp = 0 ;

if(isset($_POST["btnCalcular"])){
    // Entradas
    $n = (int) $_POST["txtn"];

    // proceso
    $tmp = $n;
    
    $r = $n % 10;
    $n = (int) ($n/10);
    $ni = $r * 10;

    $r = $n % 10;
    $n = (int) ($n/10);
    $ni = ($ni + $r) * 10;

    $r = $n % 10;
    $n = (int) ($n/10);
    $ni = ($ni + $r) * 10;

    $r = $n % 10;
    $n = (int) ($n/10);
    $ni = ($ni + $r) * 10;

    $ni = $ni + $n;
    $n = $tmp;
    
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
<form method="post" action="cap026.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><trong>Problema 06</strong>
        </tr>
        <tr>
            <td width="83">Numero</td>
            <td width="144">
                <input name="txtn" id="txtn" type="text" value="<?=$n?>" />
            </td>
        </tr>
        <tr>
            <td>Inverso</td>
            <td>
                <input name="txtni" id="txtni" type="text" value="<?=$ni?>" />
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