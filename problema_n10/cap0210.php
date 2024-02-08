<?php
// crear un programa que permita convertir una cantidad de segundos en horas, minutos y segundos
// Definir las constantes

define ("HORA",3600);
define ("MINUTO",60);

// variables

$t = 0 ; $h = 0 ; $m = 0 ; $s = 0; 

if(isset($_POST["btnCalcular"])){
    // Entrada
    $t = (int) $_POST["txtt"];
    
    // Proceso
    $tt = $t;
    $h = (int)($t / HORA) ;
    $t = $t % HORA ;
    $m = (int)($t /MINUTO) ;
    $s = $t % MINUTO ;
    $t = $tt;
}
?>

<html>
    <head>
    <title>Problema 10</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap0210.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 10</strong></td>
        </tr>
        <tr>
            <td width="83">Tiempo_en_segundos</td>
            <td>
            <input name="txtt" type="text"  id="txtt" value="<?=$t?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Horas</td>
            <td>
            <input name="txth" type="text"  id="txth" value="<?=$h?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Minutos</td>
            <td>
            <input name="txtm" type="text"  id="txtm" value="<?=$m?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">Segundos</td>
            <td>
            <input name="txts" type="text"  id="txts" value="<?=$s?>"/>
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