<?php
// Crear un programa para encontrar el área de un circulo, usando la siguiente formula
// A = 3.1416 * r al cuadrado

// variables

$a = 0.0 ; $r = 0.0 ; 

if(isset($_POST["btnCalcular"])){
    // Entrada
    $r = (float) $_POST["txtr"];
    
    // Proceso
    $a = pow (($r),2) * 3.1416 ;
}
?>

<html>
    <head>
    <title>Problema 09</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap029.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 09</strong></td>
        </tr>
        <tr>
            <td width="83">Radio</td>
            <td>
            <input name="txtr" type="text"  id="txtr" value="<?=$r?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Area</td>
            <td>
            <input name="txta" type="text"  class="TextoFondo" id="txta" value="<?=$a?>"/>
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