<?php
// Determinar si un numero es multiplo de 3 y 5
// variables

$n = "" ; $res = "" ;
if(isset($_POST["btnCalcular"])){
// Entrada
   $n = (int) $_POST["txtn"];
if($n % 3 == 0 and $n % 5 == 0){
    $res = "Si es multiplo de 3 y 5";
}else{
    $res = "No es multiplo de 3 y 5";
}
    
   
}
?>

<html>
    <head>
    <title>Problema 14</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap034.php">
    <table width="237" border="0">
    <h1><b>Determinar si un numero es múltiplo de 3 y 5</b></h1>
        <tr>
            <td colspan="2"><strong>Problema 14</strong></td>
        </tr>
        <tr>
            <td width="83">Numeros</td>
            <td>
            <input name="txtn" type="text"  id="txtn" value="<?=$n?>"/>
            </td>
         <tr>
            <td width="83">Resultado</td>
            <td>
            <input name="txtres" type="text"  id="txtres" value="<?=$res?>"/>
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