<?php
// Declaracion de variables
$promedio = "" ; $categ = "" ;

if (isset($_POST["btnCalcular"])){
    $promedio = (int) $_POST["txtpromedio"];
    $categ = (string) $_POST["txtcateg"];

    switch($promedio){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            $categ = "Pesimo";
        break;
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
            $categ = "Malo";
        break;
        case 11:
        case 12:
        case 13:
        case 14:
            $categ = "Regular";
        break;
        case 15:
        case 16:
        case 17:
            $categ = "Bueno";
        break;
        case 18:
        case 19:
        case 20:
            $categ = "Excelente";
        break;
    }

    if($promedio > 20){
        $categ = "Fuera de rango";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-n31.css">
    <title>Problema 31</title>
</head>
<body>
    <h1>Problema 31</h1>
    <p>Dada la nota promedio de un alumno, obtener la categoría, según la siguinete tabla.</p>

    <table border=1 class="tabla-promedio">
        <tr>
            <td>Promedio</td>
            <td>Categoría</td>
        </tr>
        <tr>
            <td>Entre 0 y 5</td>
            <td>Pésimo</td>
        </tr>
        <tr>
            <td>Entre 6 y 10</td>
            <td>Malo</td>
        </tr>
        <tr>
            <td>Entre 11 y 14</td>
            <td>Regular</td>
        </tr>
        <tr>
            <td>Entre 15 y 17</td>
            <td>Bueno</td>
        </tr>
        <tr>
            <td>Entre 18 y 20</td>
            <td>Excelente</td>
        </tr>
    </table>

    <br>

    <form method="post" action="cap051.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 31</strong></td>
        </tr>
        <tr>
            <td width="83">Promedio</td>
            <td>
                <input name="txtpromedio" type="text"  id="txtpromedio" value="<?=$promedio?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Categoria</td>
            <td>
                <input class="Texto-fondo" name="txtcateg" type="text"  id="txtcateg" value="<?=$categ?>"/>
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