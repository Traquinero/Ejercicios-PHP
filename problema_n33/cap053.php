<?php
// Declaración de variables
$puntaje = "" ; $facultad = "" ;

if(isset($_POST["btnCalcular"])){
    $puntaje = (int) $_POST["txtpuntaje"];
    $facultad = (string) $_POST["txtfacultad"];

    if($puntaje >= 70 and $puntaje<=79){
        $facultad = "ADMINISTRACIÓN";
    }

    if($puntaje >= 80 and $puntaje<=89){
        $facultad = "INDUSTRIAL";
    }
    if($puntaje >= 90 and $puntaje<=99){
        $facultad = "ELECTRONICA";
    }
    if($puntaje >= 100 and $puntaje<=128){
        $facultad = "SISTEMAS";
    }

    if($puntaje <=69 and $puntaje >=20)
        $facultad = "No ingreso";

    if($puntaje > 128){
        $facultad = "PUNTAJE FUERA DE RANGO";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-n33.css">
    <title>Problema 33</title>
</head>
<body>
    <h1>Problema 33</h1>
    <p>En una universidad se han establecido los siguientes puntajes de ingreso a sus respectivas facultades.</p>

    <table border=1 class="tabla-facultad">
        <tr class="celda-color">
            <td>Facultad</td>
            <td>Puntaje mínimo</td>
        </tr>
        <tr>
            <td>Sistemas</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Electrónica</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Industrial</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Administración</td>
            <td>70</td>
        </tr>
    </table>

    <br>

    <form method="post" action="cap053.php">
    <table width="400" class="tabla-formulario">
        <tr>
            <td colspan="2"><strong>Problema 33</strong></td>
        </tr>
        <tr>
            <td width="100">Puntaje</td>
            <td>
                <input name="txtpuntaje" type="text"  id="txtpuntaje" value="<?=$puntaje?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Facultad</td>
            <td>
                <input class="Texto-fondo" name="txtfacultad" type="text"  id="txtfacultad" value="<?=$facultad?>"/>
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