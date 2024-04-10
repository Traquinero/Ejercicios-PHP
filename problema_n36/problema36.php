<?php
// Declaración de variables
$calidad = "" ; $producto = "" ; $precio = "" ;

if(isset($_POST["btnCalcular"])){
    $calidad = (int) $_POST["txtcalidad"];
    $producto = (int) $_POST["txtproducto"];

    switch($calidad){
        case 1:
            if($producto==1){
                $precio=5000;
            }
            if($producto==2){
                $precio=4500;
            }
            if($producto==3){
                $precio=4000;
            }
        break;
        case 2:
            if($producto==1){
                $precio=4500;
            }
            if($producto==2){
                $precio=4000;
            }
            if($producto==3){
                $precio=3500;
            }
        break;
        case 3:
            if($producto==1){
                $precio=4000;
            }
            if($producto==2){
                $precio=3500;
            }
            if($producto==3){
                $precio=3000;
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
    <link href="estilo_problema36.css" rel="stylesheet" type="text/css" />
    <title>Problema 36</title>
</head>
<body>
    <h1>Problema 36</h1>
    <p>
        Una empresa ha establecido diferentes precios a sus productos, segun la calidad.
    </p>

    <table border="1" class="tabla-calidad">
        <tr class="color-letra">
            <td class="fondo-celda">Calidad</td>
            <td ></td>
            <td >1</td>
            <td >2</td>
            <td >3</td>
        </tr>
        <tr>
            <td rowspan="3" class="color-letra">Producto</td>
            <td>1</td>
            <td>5000</td>
            <td>4500</td>
            <td>4000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>4500</td>
            <td>4000</td>
            <td>3500</td>
        </tr>
        <tr>
            <td>3</td>
            <td>4000</td>
            <td>3500</td>
            <td>3000</td>
        </tr>

    </table>

<br>

    <form method="post" action="problema36.php">
    <table width="400" class="tabla-formulario">
        <tr>
            <td colspan="2"><strong>Problema 36</strong></td>
        </tr>
        <tr>
            <td width="100">Calidad</td>
            <td>
                <input name="txtcalidad" type="text"  id="txtcalidad" value="<?=$calidad?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Producto</td>
            <td>
                <input name="txtproducto" type="text"  id="txtproducto" value="<?=$producto?>"/>
            </td>
        </tr>
        <tr>
            <td width="100">Precio</td>
            <td>
                <input name="txtprecio" type="text"  id="txtprecio" value="<?=$precio?>"/>
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