<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $idrep = $_GET["idrep"];
        $connection = new mysqli('localhost', 'root','','talleresfaber')or die('No se pudo conectar: ' . mysql_error());
        if($connection->connect_errno){
            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
        }
        $result=$connection->query("SELECT * FROM RECAMBIOS, INCLUYEN WHERE RECAMBIOS.IdRecambio = INCLUYEN.IdRecambio AND INCLUYEN.IdReparacion=$idrep");
    ?>
        <table border=1 style="text-align:center" >
            <tr style="background-color:red;color:white">
                <td colspan="8" ><h3>Recambios de la Reparación</h3></td>
            </tr>
            <tr style="background-color:pink;color:white">
                <th>IdReparacion</th>
                <th>IdRecambio</th>
                <th>Descripcion</th>
                <th>UnidadBase</th>
                <th>Stock</th>
                <th>Precio Referencia</th>
            </tr>
            
        <?php
            while($obj=$result->fetch_object()){
                echo "<tr>";
                echo "<td>$obj->IdReparacion</td>";
                echo "<td>$obj->IdRecambio</td>";
                echo "<td>$obj->Descripcion</td>";
                echo "<td>$obj->UnidadBase</td>";
                echo "<td>$obj->Stock</td>";
                echo "<td>$obj->PrecioReferencia</td>";
                echo "</tr>";   
            }
            $result->close();
            unset($obj);
            unset($connection);
        ?>
        </table>
    
</body>
</html>