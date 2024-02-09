<?php
// Declaración de variables
$tem = "" ; $clima = "" ;

if (isset($_POST["btnCalcular"])){
    $tem = (float) $_POST["txttem"];
    if($tem<10){
        $clima = "Frío";
    }else{
        if($tem >= 10 and $tem <= 20){
            $clima = "Nublado";
        }else{
            if(($tem >= 21 and $tem <= 30)){
                $clima = "Calor";
            }else{
                if($tem>=30){
                    $clima = "Tropical";
                }
            }
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Problema 21</title>
</head>
<body>
    <h1>Problema 21</h1>
    <p>Obtener el tipo de temperatura según la siguiente tabla</p>

    <table border="1" class="tabla">
        <tr class="tablaTitulos" >
            <td>Temperatura</td>
            <td>Tipo de clima</td>
        </tr>
            <td>Temp. &lt;10 </td>
            <td>Frío</td>
        <tr>
            <td>Temp. entre 10 y 20</td>
            <td>Nublado</td>  
        </tr>
        <tr>
            <td>Temp. entre 21 y 30</td>
            <td>Calor</td>  
        </tr>
        <tr>
            <td>Temp. >30 </td>
            <td>Tropical</td>  
        </tr>
    </table>

    <br>
    
<form method="post" action="cap041.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 21</strong></td>
        </tr>
        <tr>
            <td width="83">Temperatura</td>
            <td>
                <input name="txttem" type="text"  id="txttem" value="<?=$tem?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Clima</td>
            <td>
                <input name="txtclima" type="text"  id="txtclima" value="<?=$clima?>" class="TextoFondo"/>
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
