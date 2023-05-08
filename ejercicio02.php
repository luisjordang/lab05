<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2 - Precio</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    </head>
    <body>
        <div class="contenedor">
            <h1> Precio de Gaseosa</h1>
            
            <form method="post" action="">
               

                <p class="default">Promoción válida para unidades de 3 L</p>
                <p>Precio actual:</p>
                <input type="text" name="precio"><br>
                <p>Cantidad de unidades compradas:</p>
                <input type="text" name="n_gaseosas"><br>


                
                <button type="submit" value="calcular" name="calcular">Calcular</button>
            </form>
            
            <?php
                
                $e1= (!empty($_POST['precio'])) ? $_POST['precio'] : 0;
                $e2= (!empty($_POST['n_gaseosas'])) ? $_POST['n_gaseosas'] : 0;                

                $precio = $e1*0.95;
                $compra = $precio*$e2;
                $descuento = $compra*0.07;
                $pago_final = $compra-$descuento;
                $caramelos = $e2*2;

                echo "<p>Precio original: ".$e1."</p>";
                echo "<p>Precio original: ".$e2."</p>";
                echo "<p>Nuevo precio: S/. ".$precio;
                echo "<p>Importe de la compra: S/. ".$compra."</p>";
                echo "<p>Importe del descuento: S/. ".$descuento."</p>";
                echo "<p>Importe a pagar: S/. ".$pago_final."</p>";
                echo "<p>Cortesia: ".$caramelos." caramelos </p>"
            ?>
        </div>
    </body>
</html>