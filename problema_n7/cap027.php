<?php
// variables

$n = 0 ; $s = 0 ;

if(isset($_POST["btnCalcular"])){
    // Entrada
    $n = (int) $_POST["txtn"];
    // Proceso 
    $s = ($n * ($n +1))/2;
}
?>

<html>
    <head>
    <title>Problema 07</title>
    <style style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap027.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 07</strong></td>
        </tr>
        <tr>
            <td width="83">Numero</td>
            <td>
            <input name="txtn" type="text" class="TextoFondo" id="txtn" value="<?=$n?>"/>
            </td>
        </tr>
        <tr>
        <td>Suma</td>
        <td>
        <input name="txts" type="text" class="TextoFondo" id="txts" value="<?=$s?>"/>
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