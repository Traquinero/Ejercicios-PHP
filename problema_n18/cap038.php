<?php
// Declaración de variable 
// Dado que se tiene 3 números, devolver los números en orden ascendente.
$num1 = 0 ; $num2 = 0 ; $num3 = 0 ; $may = 0 ; $inter = 0 ; $men = 0 ;

if (isset($_POST["btnCalcular"])){
    // Declaración de las entradas
    $num1 = (int) $_POST["txtnum1"];
    $num2 = (int) $_POST["txtnum2"];
    $num3 = (int) $_POST["txtnum3"];

    if($num1>$num2){
        if($num1>$num3){
            if($num2>$num3){
                $may = $num1;
                $inter = $num2;
                $men = $num3;
            }else{
                $may = $num1;
                $inter = $num3;
                $men = $num2;
            }
        }else{
            if($num1>$num2){
                $may = $num3;
                $inter = $num1;
                $men = $num2;
            }else{
                $may = $num3;
                $inter = $num2;
                $men = $num1;
            }

        }
    }else{
        if($num2>$num3){
            if($num1>$num3){
                $may = $num2;
                $inter = $num1;
                $men = $num3;
            }else{
                $may = $num2;
                $inter = $num3;
                $men = $num1;
            }
        }else{
            if($num1>$num2){
                $may = $num3;
                $inter = $num1;
                $men = $num2;
            }else{
                $may = $num3;
                $inter = $num2;
                $men = $num1;
            }
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
    <form method="post" action="cap038.php">
    <table width="237" border="0">
    <p>Dados tres numeros enteros, devolver los números en orden ascendentes</p>
        <tr>
            <td colspan="2"><strong>Problema 18</strong></td>
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
                <input name="txtmay" type="text"  id="txtmay" value="<?=$may?>" class="TextoFondo" />
            </td>
        </tr>
        <tr>
            <td width="83">Intermedio</td>
            <td>
                <input name="txtinter" type="text"  id="txtinter" value="<?=$inter?>" class="TextoFondo" />
            </td>
        </tr>
        <tr>
        <tr>
            <td width="83">Medio</td>
            <td>
                <input name="txtmen" type="text"  id="txtmen" value="<?=$men?>" class="TextoFondo" />
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