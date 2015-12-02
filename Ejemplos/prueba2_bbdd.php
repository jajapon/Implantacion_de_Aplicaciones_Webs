<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba  BBDD</title>
</head>
<body>
    <?php
        $connection = new mysqli("localhost","root","","talleresfaber");
        if($connection->connect_errno){
            echo "Error al iniciar la base de datos: ".$connection->connect_errno." ";
            exit();
        }
        mysqli_query($connection,"DELETE FROM CLIENTES WHERE Apellidos ='De las Heras'");
        $ciudad = "Santander";
        if ($result=$connection->query("SELECT * FROM CLIENTES ")){
            printf("<p>The select query returned %d rows.</p>", $result->num_rows);
        }
    ?>
    <table>
        <tr>
              <th>CodCliente</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>DNI</th>
              <th>Direccion</th>
              <th>Teléfono</th>
        </tr>
    <?php
        while($obj=$result->fetch_object()){
              echo "<tr>";
              echo "<td>$obj->CodCliente</td>";
              echo "<td>$obj->Nombre</td>";
              echo "<td>$obj->Apellidos</td>";
              echo "<td>$obj->DNI</td>";
              echo "<td>$obj->Direccion</td>";
              echo "<td>$obj->Telefono</td>";
              echo "</tr>";
        }
        mysqli_query($connection,"INSERT INTO CLIENTES VALUES(1203,'12342545D','De las Heras','Jdaniel','Direccion 2','123456789')");
    $ciudad = "Santander";
        if ($result=$connection->query("SELECT * FROM CLIENTES")){
            printf("<p>The select query returned %d rows.</p>", $result->num_rows);
        }
    ?>
    <table>
        <tr>
              <th>CodCliente</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>DNI</th>
              <th>Direccion</th>
              <th>Teléfono</th>
        </tr>
    <?php
        while($obj=$result->fetch_object()){
              echo "<tr>";
              echo "<td>$obj->CodCliente</td>";
              echo "<td>$obj->Nombre</td>";
              echo "<td>$obj->Apellidos</td>";
              echo "<td>$obj->DNI</td>";
              echo "<td>$obj->Direccion</td>";
              echo "<td>$obj->Telefono</td>";
              echo "</tr>";
        }
         mysqli_query($connection,"UPDATE CLIENTES SET Direccion ='Holaaaa cabeesaaah' WHERE Nombre = 'Jdaniel'");
        
    if ($result=$connection->query("SELECT * FROM CLIENTES")){
            printf("<p>The select query returned %d rows.</p>", $result->num_rows);
        }
    ?>
    <table>
        <tr>
              <th>CodCliente</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>DNI</th>
              <th>Direccion</th>
              <th>Teléfono</th>
        </tr>
    <?php
        while($obj=$result->fetch_object()){
              echo "<tr>";
              echo "<td>$obj->CodCliente</td>";
              echo "<td>$obj->Nombre</td>";
              echo "<td>$obj->Apellidos</td>";
              echo "<td>$obj->DNI</td>";
              echo "<td>$obj->Direccion</td>";
              echo "<td>$obj->Telefono</td>";
              echo "</tr>";
        }

    ?>
    </table>
</body>
</html>