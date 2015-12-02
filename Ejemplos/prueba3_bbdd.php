<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //CONEXION A LA BASE DE DATOS
        $connection = new mysqli("localhost","root","","talleresfaber");

        if($connection->connect_errno){
            echo "<p>Error de conexion a la base de datos: $connection->connect_errno</p>";
        }
        //EJEMPLO DE DELETE
        mysqli_query($connection,"DELETE FROM CLIENTES WHERE DNI='12345678Q'");    
        if($result=$connection->query('SELECT * FROM CLIENTES')){
            echo "<p>$result->num_rows</p>";   
        }
    ?>
    <ul>
    <?php
        while($obj=$result->fetch_object()){
            echo "<li>$obj->Nombre</li>";
        }
    ?>
    </ul>
    <?php
        //EJEMPLO DE INSERT EN LA BASE DE DATOS
        $cont=0;
        while($cont<10){
           $id=1000+$cont;
           mysqli_query($connection,"INSERT INTO CLIENTES VALUES($id,'12345678Q','Japon de la Torre','Juan Antonio $cont','C/ Clara de Jesus Montero Nº28 2ºC3','634692434')"); 
            $cont++;
        }        
        $result = $connection->query('SELECT * FROM CLIENTES');
    ?>
    <ul>
       <?php
            while($obj=$result->fetch_object()){
                echo "<li>$obj->Nombre</li>";
            }
       ?>
    </ul>
    <?php
        $cont=0;
        //EJEMPLO DE UPDATE EN LA BASE DE DATOS
        $resultjaponsitos = $connection->query("SELECT * FROM CLIENTES WHERE DNI='12345678Q'");
        while($obj=$resultjaponsitos->fetch_object()){
            mysqli_query($connection,"UPDATE CLIENTES SET Direccion='Direccion de $obj->Nombre' WHERE Nombre='$obj->Nombre'");   
        }
       
        $result = $connection->query('SELECT * FROM CLIENTES');
    ?>
    <ul>
       <?php
            while($obj=$result->fetch_object()){
                echo "<li>$obj->Nombre    :  $obj->Direccion</li>";

            }
       ?>
    </ul>
</body>
</html>