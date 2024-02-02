<?php
// Un restaurante ofrece un descuento del 10% para consumos de hasta s/.1000; y un descuento del 20% para consumos
// mayores. En ambos casos se aplica un impuesto del 19%. 
// Determinar el monto del descuento, el impuesto y el importe a pagar.

// costantes

define("D1",0.1);
define("D2",0.2);
define("IGV",0.19);

// Declaración de variables
$csumo = 0 ; $m_d = 0 ; $imp = 0 ; $imp_apar = 0 ;
if (isset($_POST["btnCalcular"])){
    // Entrada
    $csumo = (float) $_POST["txtcsumo"];

    // proceso
    if($csumo <=100){
        $m_d = $csumo * D1 ;
    }else{
        $m_d = $csumo * D2 ;
    }

    $imp = ($csumo-$m_d) * IGV;
    $imp_apar = $csumo - $m_d + $imp ;

}

?>

<html>
    <head>
    <title>Problema 19</title>
    <style style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap039.php">
    <table width="237" border="0">
    <p>Determinar el monto del descuento, el impuesto y el importe a pagar.</p>
        <tr>
            <td colspan="2"><strong>Problema 19</strong></td>
        </tr>
        <tr>
            <td width="83">Consumo</td>
            <td>
                <input name="txtcsumo" type="text"  id="txtcsumo" value="<?=$csumo?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">Monto_descuento</td>
            <td>
                <input name="txtm_d" type="text"  id="txtm_d" value="<?=$m_d?>" class="TextoFondo"/>
            </td>
        </tr>
        <tr>
            <td width="83">Impuesto_IGV</td>
            <td>
                <input name="txtimp" type="text"  id="txtimp" value="<?=$imp?>" class="TextoFondo"/>
            </td>
        </tr>
        <tr>
            <td width="83">Importe_a_pagar</td>
            <td>
                <input name="txtimp_apar" type="text"  id="txtimp_apar" value="<?=$imp_apar?>" class="TextoFondo"/>
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