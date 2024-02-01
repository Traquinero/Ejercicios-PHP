<?php
// Declaración de variables
$num = 0 ; $a = 0 ;

if(isset($_POST["btnCalcular"])){
// Declaración de las entradas
$num = (int) $_POST["txtnum"];

if($num %2 == 0){
    $a = $num * 3;
}else{
    $a = $num * 2;
}

}
?>

<html>
    <head>
    <title>Problema 17</title>
    <style style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap037.php">
    <table width="237" border="0">
    <p>Dado un número, devolver el doble si el número no es par, caso contrario, el triple.</p>
        <tr>
            <td colspan="2"><strong>Problema 17</strong></td>
        </tr>
        <tr>
            <td width="83">Numero</td>
            <td>
                <input name="txtnum" type="text"  id="txtnum" value="<?=$num?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">Resultado</td>
            <td>
                <input name="txta" type="text"  id="txta" value="<?=$a?>" class="TextoFondo"/>
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