<?php
// Declaración de variables
$xmes = "" ; $año = "" ; $ymes = "" ; $dia = "" ; 

if(isset($_POST["btnCalcular"])){
    $xmes = (int) $_POST["txtxmes"];
    $año = (int) $_POST["txtaño"];
switch($xmes){
    case 1:
        $dia=31;
        $ymes="Enero";
        break;
    case 2:
            if ($año % 4 == 0 and ($año % 100 != 0 or $año % 400 == 0))
            {
                $dia=29;
            }
            else
            $dia=28;
        $ymes="Febrero";
        break;
    case 3:
        $dia=31;
        $ymes="Marzo";
        break;
    case 4:
        $dia=30;
        $ymes="Abril";
        break;
    case 5:
        $dia=31;
        $ymes="Mayo";
        break;
    case 6:
        $dia=30;
        $ymes="Junio";
        break;
    case 7:
        $dia=31;
        $ymes="Julio";
        break;
    case 8:
        $dia=31;
        $ymes="Agosto";
        break;
    case 9:
        $dia=30;
        $ymes="Septiembre";
        break;
    case 10:
        $dia=31;
        $ymes="Octubre";
        break;
    case 11:
        $dia=30;
        $ymes="Noviembre";
        break;
    case 12:
        $dia=31;
        $ymes="Diciembre";
        break;
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo_problema35.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <h1>Problema 35</h1>
    <p>
        Determine, en letras el nombre del mes y cuantos días tiene.
    </p>

<br>

    <form method="post" action="problema35.php">
    <table width="400" class="tabla-formulario">
        <tr>
            <td colspan="2"><strong>Problema 35</strong></td>
        </tr>
        <tr>
            <td width="100">Mes</td>
            <td>
                <input name="txtxmes" type="text"  id="txtxmes" value="<?=$xmes?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Año</td>
            <td>
                <input name="txtaño" type="text"  id="txtaño" value="<?=$año?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Mes</td>
            <td>
                <input name="txtymes" type="text"  id="txtymes" value="<?=$ymes?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Días</td>
            <td>
                <input name="txtdia" type="text"  id="txtdia" value="<?=$dia?>"/>
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