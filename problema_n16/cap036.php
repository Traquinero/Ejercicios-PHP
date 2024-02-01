<?php
// Declaración de variable 
$num1 = 0 ; $num2 = 0 ; $num3 = 0 ; $m = 0 ;

if (isset($_POST["btnCalcular"])){
    // Declaración de las entradas
    $num1 = (int) $_POST["txtnum1"];
    $num2 = (int) $_POST["txtnum2"];
    $num3 = (int) $_POST["txtnum3"];
    if($num1 > $num2){
        if($num1 > $num3){
            $m = $num1;
        }
        else{
            $m = $num3;
        }
    }else{
        if($num2 > $num3){
            $m = $num2;
        }else{
            $m = $num3;
        }
    }
}

?>

<html>
    <head>
    <title>Problema 16</title>
    <style style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap036.php">
    <table width="237" border="0">
    <h1>Dados tres numeros enteros, devolver el numero mayor</h1>
        <tr>
            <td colspan="2"><strong>Problema 16</strong></td>
        </tr>
        <tr>
            <td width="83">Numero_1</td>
            <td>
                <input name="txtnum1" type="text"  id="txtnum1" value="<?=$num1?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Numero_2</td>
            <td>
                <input name="txtnum2" type="text"  id="txtnum2" value="<?=$num2?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Numero_3</td>
            <td>
                <input name="txtnum3" type="text"  id="txtnum3" value="<?=$num3?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">Mayor</td>
            <td>
                <input name="txtm" type="text"  id="txtm" value="<?=$m?>" class="TextoFondo" />
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