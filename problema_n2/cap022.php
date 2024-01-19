<?php
// Variables

$n1 = 0 ; $n2 = 0 ; $c = 0 ; $r = 0;

if(isset($_POST["btnCalcular"])){
    // Entradas
    $n1 = (int) $_POST["txtn1"];
    $n2 = (int) $_POST["txtn2"];

    if($n1==0 and $n2 == 0 or $n1!=0 and $n2 == 0 ){
        print("No se puede dividir entre cero, ingrese otro Numero_2 diferente ");
    } 
    else
    if($n1!=0 and $n2!=0){
        // proceso
    $c = (int)($n1 / $n2);  // la divicion
    $r = $n1 % $n2;         // el residuo
    }

}
   
?>

<html>
<head>
    <br>
    <br>
    <title>Problema 02 </title>
    <style type="text/css">
    <!--
    .TextoFondo{
        background-color: #CCFFFF;
    }
    -->
    </style>
</head>
<body>
    <form method="post" action="cap022.php">
    <table width="241" border="0">
    <tr>
        <strong>Problema 02</strong></td>
    </tr>
    <tr>
        <td width="81">Numero_1</td>
        <td width="150">
            <input name="txtn1" type="text" id="txtn1" value="<?=$n1?>" />
        </td>
    <tr>
        <td>Numero_2</td>
        <td>
            <input name="txtn2" type="text" id="txtn2" value="<?=$n2?>" />
        </td>
    </tr>
    <tr>
        <td>Cociente</td>
        <td>
            <input name="txtc" type="text" id="txtc" class="TextoFondo" value="<?=$c?>" />
        </td>
    </tr>
    <tr>
        <td>Residuo</td>
        <td>
            <input name="txtr" type="text" id="txtr" class="TextoFondo" value="<?=$r?>" />
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td> 
            <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />
        </td>
    </tr>
    </table>
</form>
</body>
</html>
