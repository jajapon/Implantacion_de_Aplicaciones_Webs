<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $connection = new mysqli("localhost","root","","talleresfaber");
        if($connection->connect_errno){
            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
        }
        $result=$connection->query("SELECT * FROM REPARACIONES");
    ?>
        <table border=1 style="text-align:center" >
            <tr style="background-color:red;color:white">
                <td colspan="8" ><h3>Reparaciones</h3></td>
            </tr>
            <tr style="background-color:pink;color:white">
                <th>IdReparacion</th>
                <th>Matricula</th>
                <th>Fecha Entrada</th>
                <th>Km</th>
                <th>Averia</th>
                <th>Fecha Salida</th>
                <th>Reparado</th>
                <th>Observaciones</th>
            </tr>
            
        <?php
            while($obj=$result->fetch_object()){
                echo "<tr>";
                echo "<td><a href='ej42.php?idrep=$obj->IdReparacion'>$obj->IdReparacion</a></td>";
                echo "<td>$obj->Matricula</td>";
                echo "<td>$obj->FechaEntrada</td>";
                echo "<td>$obj->Km</td>";
                echo "<td>$obj->Averia</td>";
                echo "<td>$obj->FechaSalida</td>";
                echo "<td>";
                if($obj->Reparado==1){
                   echo "Si"; 
                }else{
                   echo "No";
                }
                echo "</td>";
                echo "<td>$obj->Observaciones</td>";
                echo "</tr>";   
            }
            $result->close();
            unset($obj);
            unset($connection);
        ?>
        <tr>
        </tr>
        </table>
    
</body>
</html>
