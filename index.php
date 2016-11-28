<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset style="width: 50%">
            <legend>Calculadora</legend>
            <form action=".">
                <h3>Introduce operacion Real o racional</h3>
                <input type="text" name="operacon">
                <br />
                <input type="submit" value="Resuelve" >
            </form>
        </fieldset>

        <?php
        include 'Operacion.php';
        $cadena = "5/5+1/1";
        $tipo = Operacion::tipoOperacion($cadena);
        echo "<h3>Tipo -1 RACIONAL tipo 1 REAL</h3>";
        echo "<h2>La operacion $cadena es de tipo $tipo</h2>";
                
                
                
                
        
        ?>
    </body>
</html>
