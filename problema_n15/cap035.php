<?php
// Determinar si un numero entero es par o impar.
// variables

$n = ""  ; $r = "" ; 

if(isset($_POST["btnCalcular"])){
// Entrada
$n = (int) $_POST["txtn"];

if($n % 2 == 0){
    $r = "Es PAR";
}
else{
   $r = "Es IMPAR";
}
       
}
?>

<html>
    <head>
    <title>Problema 15</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap035.php">
    <table width="237" border="0">
    <h1>Determinar si un numero entero es par o impar</h1>
        <tr>
            <td colspan="2"><strong>Problema 15</strong></td>
        </tr>
        <tr>
            <td width="83">Numero</td>
            <td>
                <input name="txtn" type="text"  id="txtn" value="<?=$n?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">Resultado</td>
            <td>
                <input name="txtr" type="text"  id="txtr" value="<?=$r?>"/>
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