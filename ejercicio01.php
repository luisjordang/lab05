<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 1 - Sueldo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilo1.css">
    </head>
    <body>
        <div class="contenedor">
            <h1>Sueldo del trabajador</h1>
            
            <form method="post" action="">
               

                <p class="default">Sueldo basico S/. 600.00</p>
                <p>Número de hijos:</p>
                <input type="text" name="num_hijos"><br>
                <p>Importe del total vendido en el mes:</p>
                <input type="text" name="total_vendido"><br>

                <br/>
                
                <button type="submit" value="calcular" name="calcular">Calcular</button>
            </form>
            
            <?php
                
                $e1 = (!empty($_POST['num_hijos'])) ? $_POST['num_hijos'] : 0;
                $e2 = (!empty($_POST['total_vendido'])) ? $_POST['total_vendido'] : 0;                

                $hijos = $e1*50;
                $vendido = $e2*0.075;
                $s_bruto = 600+$hijos+$vendido;
                $descuento = $s_bruto*0.11;
                $s_neto= $s_bruto*0.89;
                
                echo "<p>Hijos: S/. ".$e1."</p>";
                echo "<p>Importe del total vendido en el mes: S/. ".$e2."</p>";
                echo "<p>Bonificación por hijos (50 por hijo): S/. ".$hijos." </p>";
                echo "<p>Comisión (7.5% de lo vendido del mes): S/. ".$vendido."</p>";
                echo "<p>Sueldo bruto: S/. ".$s_bruto." </p>";
                echo "<p>Descuento (11% del S. bruto por ley): S/. ".$descuento." </p>";
                echo "<p>Sueldo neto: S/. ".$s_neto." </p>"
            ?>
        </div>
    </body>
</html>