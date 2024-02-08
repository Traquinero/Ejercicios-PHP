<?php
// Dado dos nùmeros enteros diferentes, devolver el nùmero mayor.
// variables

$n1 = 0 ; $n2 = 0 ; $mayor = 0 ;

if(isset($_POST["btnCalcular"])){
// Entradas
   $n1 = (float)$_POST["txtn1"];
   $n2 = (float)$_POST["txtn2"];
// Salida 
if( $n1 > $n2)
    $mayor = $n1;
else
    $mayor = $n2;
}
?>

<html>
    <head>
    <title>Problema 11</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap031.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 11</strong></td>
        </tr>
        <tr>
            <td width="83">Numero_1</td>
            <td>
            <input name="txtn1" type="text"  id="txtn1" value="<?=$n1?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Numero_2</td>
            <td>
            <input name="txtn2" type="text"  id="txtn2" value="<?=$n2?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Mayor</td>
            <td>
            <input name="txtmayor" type="text"  id="txtmayor" value="<?=$mayor?>" class="TextoFondo"/>
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