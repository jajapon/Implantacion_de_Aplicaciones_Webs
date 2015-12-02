<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <title></title>
</head>

<body class="card-panel #b2dfdb teal lighten-4
">
    <?php
        //conexion a la base de datos
        $connection = new mysqli("localhost","root","","talleresfaber");
        if($connection->connect_errno){
            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
        }
        $result=$connection->query("SELECT * FROM REPARACIONES");
    ?>
       <div style="margin-top:-30px;" class="container">
       <nav class="#004d40 teal darken-3
">
    <div class="nav-wrapper" style="margin:10px;">
      <a href="#" class="brand-logo">Reparaciones</a>
        <a href="crear.php" style="float:right;margin-top:10px"><img width=50 src="/imagenes/add.png"></a>
    </div>
  </nav> 
        <table class="centered bordered card-panel white"  style="text-align:center;">
            <tr class="card-panel teal lighten-2 white-text" style="font-weight:bold">
                <td>Id Reparacion</td>
                <td>Matricula</td>
                <td>Fecha Entrada</td>
                <td>Km</td>
                <td>Averia</td>
                <td>Fecha Salida</td>
                <td>Reparado</td>
                <td>Observaciones</td>
                <td>Editar</td>
                <td>Borrar</td>
                <td>Asign. Emple</td>
                <td>Asign. Pieza</td>
                <td>Mostrar Emples</td>
                <td>Mostrar Piezas</td>
            </tr>
            
        <?php
            while($obj=$result->fetch_object()){
                echo "<tr>";
                echo "<td>$obj->IdReparacion</td>";
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
                echo "<td><a href='editar.php?id=$obj->IdReparacion&mat=$obj->Matricula&fent=$obj->FechaEntrada&km=$obj->Km&av=$obj->Averia&fsal=$obj->FechaSalida&obs=$obj->Observaciones&rep=$obj->Reparado'><img width=26 src='/imagenes/lapiz.png'/></a></td>";
                echo "<td><a href='borrar.php?id=$obj->IdReparacion'><img width=26 src='/imagenes/delete.png'/></a></td>";
                echo "<td><a href='asignar_empleado.php?id=$obj->IdReparacion'><img width=26 src='/imagenes/user.png'/></a></td>";
                echo "<td><a href='asignar_pieza.php?id=$obj->IdReparacion'><img width=26 src='/imagenes/tuerca.png'/></a></td>";
                echo "<td><a href='mostrar_empleados.php?id=$obj->IdReparacion'><img width=26 src= '/imagenes/mostrar_emple.png'/></a></td>";
                echo "<td><a href='mostrar_piezas.php?id=$obj->IdReparacion'><img width=26 src='/imagenes/piezas.png'/></a></td>";
                echo "</tr>";   
            }
            $result->close();
            unset($obj);
            unset($connection);
        ?>
        <tr>
        </tr>
        </table>
        </div>
    
</body>
</html>
