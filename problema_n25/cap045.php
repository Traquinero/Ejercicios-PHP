<?php
// Elabore un algoritmo que obtenga las raices reales de una ecuación de segundo grado. 
// Declaración de variables

$a = "" ; $b = "" ; $c = "" ; $x1 = 0 ; $x2 = 0 ; 


if (isset($_POST["btnCalcular"])){
    // Entradas
$a = (float) $_POST["txta"];
$b = (float) $_POST["txtb"];
$c = (float) $_POST["txtc"];

if($a != 0){
    $x1 = (-$b + pow((pow($b,2)- 4*$a*$c),1/2))/2*$a;
    $x2 = (-$b - pow((pow($b,2)- 4*$a*$c),1/2))/2*$a;
}
else{
    echo "Advertencia: Ingrese un valor a diferente de cero ";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 24</title>
    <style>
    .TextoFondo {
        background-color: #CCFFFF;
    }


    #txta{
        background-color: rgb(188, 167, 229);
    }
 
    #txtb{
        background-color: rgb(188, 167, 229);
    }
 
    #txtc{
        background-color: rgb(188, 167, 229);
    }

    </style>
</head>
<body>
<form method="post" action="cap045.php">
    <table width="500">
    <h1>Problema 24</h1>
    <p>Interfaz para calcular las raices reales de una ecuación de segundo grado.</p>
        <tr>
            <td colspan="2"><strong>Problema 24</strong></td>
        </tr>
        <tr>
            <td width="83">valor a</td>
            <td>
                <input name="txta" type="text"  id="txta" value="<?=$a?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">valor b</td>
            <td>
                <input name="txtb" type="text"  id="txtb" value="<?=$b?>" />
            </td>
        </tr>
        <tr>
            <td width="83">valor c</td>
            <td>
                <input name="txtc" type="text"  id="txtc" value="<?=$c?>" />
            </td>
        </tr>
        <tr>
            <td width="83">x1</td>
            <td>
                <input name="txtx1" type="text"  id="txtx1" value="<?=$x1?>" class="TextoFondo"/>
            </td>
        </tr>
        <tr>
            <td width="83">x2</td>
            <td>
                <input name="txtx2" type="text"  id="txtx2" value="<?=$x2?>" class="TextoFondo"/>
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