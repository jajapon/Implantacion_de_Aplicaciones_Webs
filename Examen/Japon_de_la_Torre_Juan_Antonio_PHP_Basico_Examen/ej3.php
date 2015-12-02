<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="ej3.php" method="POST">
        <input style="height:25px;" type="number" value=0 min=0 name="cant"><br><br>
        <input style="width:100px;height:25px;" type="submit" name="enviar" value="enviar">
    </form>
    
    <?php

        if (isset($_POST['enviar'])) {
            $connection = new mysqli('localhost', 'root','','talleresfaber')or die('No se pudo conectar: ' . mysql_error());

            $consulta = 'SELECT * FROM RECAMBIOS';
            $result = $connection->query($consulta) or die('Consulta fallida: ' . mysql_error());
            
            $cantidad=$_POST["cant"];
            echo "<br><br>";
            
        
            
            
            echo "<ul>";
            while ($fila = $result->fetch_object()) {
                $stock=$fila->Stock;
                
                if ($stock < $cantidad) {
                    echo "<li>";
                    echo "IdRecambio: $fila->IdRecambio <br>";
                    echo "Descripcion: $fila->Descripcion <br>";
                    echo "UnidadBase: $fila->UnidadBase <br>";
                    echo "Stock: $fila->Stock <br>";
                    echo "PrecioReferencia: $fila->PrecioReferencia <br><br>";
                    echo "</li>";
                }      
            }
            echo "</ul>";

            $result->close();
            unset($connection);
        }
    ?>
</body>
</html>