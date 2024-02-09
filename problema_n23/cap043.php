<?php
// Declaración de variables
$a = "" ; $b = "" ; $x = 0 ;
// Proceso

if (isset($_POST["btnCalcular"])){
    $a = (float) $_POST["txta"];
    $b = (float) $_POST["txtb"];

    if ($a <> 0){
        $x = -$b / $a;
    }
    else{
        $x = "X es cero";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Problema 23</title>
</head>
<body>
<form method="post" action="cap043.php">
    <table width="500">
    <h1>Problema 23</h1>
    <p>Interfaz para resolver una ecuación de primer grado</p>
        <tr>
            <td colspan="2"><strong>Problema 23</strong></td>
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
            <td width="83">x</td>
            <td>
                <input name="txtx" type="text"  id="txtx" value="<?=$x?>" class="TextoFondo"/>
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
