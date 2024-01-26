<?php

if(isset($_POST["btnCalcular"])){
   
   
    
   
}
?>

<html>
    <head>
    <title>Problema x</title>
    <style style type="text/css">
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
            <td colspan="2"><strong>Problema x</strong></td>
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