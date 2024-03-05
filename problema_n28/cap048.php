<?php
// Declaración de variables
$op = "" ; $num1="" ; $num2="" ; $res = "" ;

if (isset($_POST["btnCalcular"])){
    $op = (String) $_POST["txtop"];
    $num1 = (float) $_POST["txtnum1"];
    $num2 = (float) $_POST["txtnum2"];

    switch ($op){
        case "+":
            $res = $num1 + $num2;
        break;
        case "-":
            $res = $num1 - $num2;
        break;
        case "*":
            $res = $num1 * $num2;
        break;    
        case "/":
            if ($num1 == 0 and $num2 == 0){
                $res = "Resultado indefinido";
            }
            else{
                if ($num2 == 0){
                    $res = "Error";
                }
                else{
                    $res = $num1 / $num2;
                }
            }
        break;
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 28</title>
</head>
<body>
    <h1>Problema 28</h1>
    
    <p>
        Dados dos números enteros y un operador (+,-,* y /), debolver la operación de los dos numeros <br>
        según el operador ingresado.    
    </p>

<form method="post" action="cap048.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 28</strong></td>
        </tr>
        <tr>
            <td width="83">Operación</td>
            <td>
                <input name="txtop" type="text"  id="txtop" value="<?=$op?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">Numero 1</td>
            <td>
                <input name="txtnum1" type="text"  id="txtnum1" value="<?=$num1?>" />
            </td>
        </tr>
        <tr>
            <td width="83">Numero 2</td>
            <td>
                <input name="txtnum2" type="text"  id="txtnum2" value="<?=$num2?>" />
            </td>
        </tr>
        <tr>
            <td width="83">Resultado</td>
            <td>
                <input name="txtres" type="text"  id="txtres" value="<?=$res?>" class="TextoFondo"/>
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