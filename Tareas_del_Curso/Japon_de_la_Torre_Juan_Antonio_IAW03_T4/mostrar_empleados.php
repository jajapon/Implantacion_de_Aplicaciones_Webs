<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

<body class="centered bordered #e0f2f1 teal lighten-5">
    <?php
        //conexion a la base de datos
        $id = $_GET["id"];
        $connection = new mysqli ("localhost" ,"root" ,"" , "talleresfaber");

        if($connection->connect_errno){
            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
        }
        $result=$connection->query("SELECT * FROM INTERVIENEN WHERE IdReparacion=".$id = $_GET["id"]);
    ?>
       <div class="container">
        <table class="centered bordered card-panel white"  style="text-align:center;">
           <tr class="card-panel teal lighten-4 white-text" >
               <td colspan=4><h4>Empleados que intervienen en la Reparación</h4> </td>
           </tr>
            <tr class="card-panel teal lighten-2 white-text" style="font-weight:bold">
                <td>Id Reparacion</td>
                <td>Codigo Empleado</td>
                <td>Nombre Empleado</td>
                <td>Horas Trabajadas</td>
            </tr>
            
        <?php
            while($obj=$result->fetch_object()){
                echo "<tr>";
                echo "<td>$obj->IdReparacion</td>";
                echo "<td>$obj->CodEmpleado</td>";
                echo "<td>";
                
                $result1=$connection->query("SELECT * FROM EMPLEADOS WHERE CodEmpleado ='".$obj->CodEmpleado."'");
                
                while($obj2=$result1->fetch_object()){
                    echo "".$obj2->Nombre." ".$obj2->Apellidos;
                }
                $result1->close();
                unset($obj2);
                echo "</td>";
                echo "<td>$obj->Horas</td>";
                echo "</tr>";   
            }
            $result->close();
            unset($obj);
            unset($connection);
            
        ?>
        <tr>
        </tr>
        </table>
        <a href="reparaciones.php">Volver</a>
    </div>
</body>
</html>
