<?php
// Dado un número entero de un dígito (0 al 9), devolver el número en letras.
// Declaración de variables

$num = "" ; $letra = "";

if (isset($_POST["btnCalcular"])){
    $num = (int) $_POST["txtnum"];
    $letra = (string) $_POST["txtletra"];

    switch ($num){
        case 0:
            $letra = "CERO";
        break;
        case 1:
            $letra = "UNO";
        break;
        case 2:
            $letra = "DOS";
        break;
        case 3:
            $letra = "TRES";
        break;
        case 4:
            $letra = "CUATRO";
        break;
        case 5:
            $letra = "CINCO";
        break;
        case 6:
            $letra = "SEIS";
        break;
        case 7:
            $letra = "SIETE";
        break;
        case 8:
            $letra = "OCHO";
        break;
        case 9:
            $letra = "NUEVE";
        break;
    }

    if ($num > 9){
        $letra = "Números validos del 0 al 9";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 27</title>
</head>

<body>
<h1>Problema 27</h1>
<p>Dado un número entero de un dígito (0 al 9), devolver el número en letras.</p>
<form method="post" action="cap047.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 27</strong></td>
        </tr>
        <tr>
            <td width="83">Número</td>
            <td>
                <input name="txtnum" type="text"  id="txtnum" value="<?=$num?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Letra</td>
            <td>
                <input name="txtletra" type="text"  id="txtletra" value="<?=$letra?>" class="TextoFondo"/>
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