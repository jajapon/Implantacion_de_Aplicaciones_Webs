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

<body class ="card-panel #00897b teal lighten-5">
   <div class="container">
       
   <?php if (!isset($_POST["emple"])) : ?>
       <form method="post" action="#">
            <table class="card-panel white" style="width:600px; margin:0 auto;">
              <thead>
            <td class ="card-panel #00897b teal darken-1
 white-text center" style="font-size:25px;" colspan="6">Asignar empleado </td>
                </thead>
                <tr>
                    <td>Empleado:</td>
                    <td>
                    <?php
                        $id = $_GET["id"];
                        
                       $connection = new mysqli("localhost","root","","talleresfaber");
                    
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                        } 
                       $consulta_mysql='select * from EMPLEADOS';
                       $result=$connection->query($consulta_mysql);

                       echo "<select name='emple' class='browser-default'>";
                       while($obj=$result->fetch_object()){
                            echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre."</option>";
                        }
                        echo "</select></td></tr><tr>";  
                        $result->close();
                        unset($obj);
                        echo '<td>Horas:</td><td> <input type="number" required value=1 min=1 max= 99 name="horas" ></tr><tr>';
                        echo '<td><input type="hidden" name="id" value="'.$id.'"></td></tr><tr>';
                        unset($connection);
        ?>            
           
            <td colspan="2">
                <input type="submit" class="waves-effect waves-light btn" style="margin-left:35%" name="send" value="enviar">
            </td>
        </form>
        <?php else: ?>

        <?php
                
            $connection = new mysqli("localhost","root","","talleresfaber");
                
            $idEmple = $_POST["emple"];
            $horas = $_POST["horas"];
            $idRep = $_POST["id"];
                
            $consulta='INSERT INTO INTERVIENEN VALUES('.$idEmple.','.$idRep.','.$horas.')';
            $consulta2="UPDATE INTERVIENEN SET Horas=$horas WHERE CodEmpleado = $idEmple AND IdReparacion = $idRep";
            echo $consulta;
            if($connection->query($consulta)){
                echo "perfe";  
                header('Location: reparaciones.php');   
            }else{
                $connection->query($consulta2);
                header('Location: reparaciones.php'); 
            }
                    
            
        ?>

      <?php endif ?>
</body>
</html>
