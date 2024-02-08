<?php
// Determinar si un número entero es positivo, negativo o neutro
// variables

$num = " " ; $res = " " ; 

if(isset($_POST["btnCalcular"])){
// Entrada
  $num = (float) $_POST["txtnum"] ; 

    if($num == 0){
        $res = "Neutro";
    }
    else{
        if($num>0){
            $res = "Positivo";
        }
        else{
            $res = "Negativo";
        }
}

}

?>

<html>
    <head>
    <title>Problema 12</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    <!--
    .TextoFondo2 {
        background-color: #CCFFAA;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap032.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 12</strong></td>
        </tr>
        <tr class="TextoFondo2">
            <td colspan="2"><strong></strong></td>
        </tr>
        <tr>
            <td width="83">Numero</td>
            <td>
            <input name="txtnum" type="text"  id="txtnum" value="<?=$num?>"/>
            </td>
        </tr>
        <tr>
            <td width="83">Resultado</td>
            <td>
            <input name="txtres" type="text"  id="txtres" value="<?=$res?>" class="TextoFondo"/>
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