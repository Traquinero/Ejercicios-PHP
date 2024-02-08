<?php
// variables entrada
// c <- capital
// r <- tasa de interes
// t <- tiempo
// variables de salida
// i <- dinero en interes
// m <- el monto 


$c = 0.0 ; $r = 0.0 ; $t = 0.0 ; $i = 0.0 ; $m = 0.0 ;

if(isset($_POST["btnCalcular"])){
    // Entrada
    $c = (float) $_POST["txtc"];
    $r = (float) $_POST["txtr"];
    $t = (float) $_POST["txtt"];
    // Proceso
    $m = pow ((1 + $r / 100),$t) * $c;
    $i = $m - $c;
}
?>

<html>
    <head>
    <title>Problema 08</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap028.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 08</strong></td>
        </tr>
        <tr>
            <td width="83">Capital</td>
            <td>
            <input name="txtc" type="text"  id="txtc" value="<?=$c?>"/>
            </td>
        </tr>
        <tr>
            <td>Tasa_de_interes</td>
            <td>
            <input name="txtr" type="text"  id="txtr" value="<?=$r?>"/>
            </td>   
        </tr>
        <tr>
            <td>Tiempo</td>
            <td>
            <input name="txtt" type="text"  id="txtt" value="<?=$t?>"/>
            </td>   
        </tr>
        <tr>
            <td>Intereses</td>
            <td>
            <input name="txti" type="text" class="TextoFondo" id="txti" value="<?=$i?>"/>
            </td>   
        </tr>
        <tr>
            <td>Monto</td>
            <td>
            <input name="txtm" type="text" class="TextoFondo" id="txtm" value="<?=$m?>"/>
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