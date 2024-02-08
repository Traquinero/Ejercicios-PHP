<?php
// Dado un caracter, determinar si es una vocal.
// variables

$letra = "" ; $res = "" ; $cadena = "" ;

if(isset($_POST["btnCalcular"])){
    // Entradas
    $letra = (String)$_POST["txtletra"];
    // proceso
    $cadena = strlen($letra);
    if($cadena==1){
        if($letra=="a" or $letra=="A"){
            $res = "Es una vocal";
        }
        else{
            if($letra=="e" or $letra=="E"){
                $res = "Es una vocal";
            }
            else{
                if($letra=="i" or $letra=="I"){
                    $res = "Es una vocal";
                }
                else{
                   if($letra=="o" or $letra=="O"){
                    $res = "Es una vocal";
                   }
                   else{
                    if($letra=="u" or $letra=="U"){
                        $res = "Es una vocal";
                    }
                    else{
                        $res = "No es una vocal";
                    }
                   }
                }
            }
        }

    }
    else{
        if($cadena >= 2)
        $res = "Ingresa solo una letra";
    }

}
?>

<html>
    <head>
    <title>Problema 13</title>
    <style type="text/css">
    <!--
    .TextoFondo {
        background-color: #CCFFFF;
    }
    -->
    </style>
    </head>
    <body>
    <form method="post" action="cap033.php">
    <table width="237" border="0">
        <tr>
            <td colspan="2"><strong>Problema 13</strong></td>
        </tr>
        <tr>
            <td width="83">Caracter</td>
            <td>
            <input name="txtletra" type="text"  id="txtletra" value="<?=$letra?>"/>
            </td>
        </tr>
         <tr>
            <td width="83">longitud_de_la_cadena</td>
            <td>
            <input name="txtcadena" type="text"  id="txtcadena" value="<?=$cadena?>" class="TextoFondo"/>
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