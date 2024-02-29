<?php
// Declaracion de variables
$letra = "" ; $r = "" ; $lm = "" ;

if(isset($_POST["btnCalcular"])){
    // Declaración de entradas
    $letra = (String) $_POST["txtletra"];
    
    $lm = strtolower($letra);
    $longitud = strlen($letra);

    if($longitud >= 2){
        echo '<script language="javascript">
                alert ("ERROR INGRESA SOLO UN CARACTER");
                </script>';
    }
    

    if($lm == "a"){
        $r= "ES VOCAL";
    }else
        if($lm == "e"){
            $r = "ES VOCAL";
        }else
            if($lm == "i"){
                $r = "ES VOCAL";
            }else
                if($lm == "o"){
                    $r = "ES VOCAL";
                }else
                    if($lm == "u"){
                        $r = "ES VOCAL";
                    }else
                        $r = "NO ES VOCAL";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 29</title>
</head>
<body>
    <h1>Problema 29</h1>
    <p>Dada una letra, determinar si es una vocal</p>

    <form method="post" action="cap049.php">
    <table width="500">
        <tr>
            <td colspan="2"><strong>Problema 29</strong></td>
        </tr>
        <tr>
            <td width="83">Letra</td>
            <td>
                <input name="txtletra" type="text"  id="txtletra" value="<?=$letra?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Resultado</td>
            <td>
                <input class="Texto-fondo" name="txtr" type="text"  id="txtr" value="<?=$r?>"/>
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