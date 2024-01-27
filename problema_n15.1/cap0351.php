<?php

// Declarando las variables
$n = "" ; 
$valor = "";
$r = " ";

if(isset($_POST["btnCalcular"])){
// Entrada 
$n = $_POST["txtn"];
$valor = is_numeric($n); 

if($valor == 1){
    if($n % 2 == 0){
        $r = "Es PAR";
    }
    else{
        $r = "Es IMPAR";
    }
}

}

?>

<html>
    <head>
    <title>Problema n15 v2</title>
    <style style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap0351.php">
    <table width="237" border="0">
    <h1>Determinar si es PAR o IMPAR</h1>
        <tr>
            <td colspan="2"><strong>Problema n15 V2</strong></td>
        </tr>
        <tr>
            <td width="100">Numero</td>
            <td>
                <input name="txtn" type="text"  id="txtn" value="<?=$n?>"/>
            </td>
        </tr>
         <tr>
            <td width="100">Resultado</td>
            <td>
                <input name="txtr" type="text"  id="txtr" value="<?=$r?>"/>
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