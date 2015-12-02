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
   <?php if (!isset($_POST["reca"])) : ?>
                <form method="post" action="#">
            <table class="card-panel white" style="width:600px; margin:0 auto;">
              <thead>
            <td class ="card-panel #00897b teal darken-1
 white-text center" style="font-size:25px;" colspan="6">Asignar pieza </td>
        </thead>
                <tr>
                    <td>Recambio:
                    <?php
                        $id = $_GET["id"];
                        
                       $connection = new mysqli("localhost","root","","talleresfaber");
                    
                        if($connection->connect_errno){
                            echo "<h1>Se produjo un error a la hora de conectarse a la base de datos: $connection->connect_errno</h1>";
                        } 
                       $consulta_mysql='select * from RECAMBIOS';
                       $result=$connection->query($consulta_mysql);
                       echo "</td><td><select class='browser-default' name='reca'>";
                       while($obj=$result->fetch_object()){
                            echo "<option value='".$obj->IdRecambio."'>".$obj->Descripcion."</option>";
                        }
                        echo "</select></td></tr><tr>";  
                        $result->close();
                        unset($obj);
                        echo '<td>Unidades:</td><td> <input type="number" required name="unidades" min=1 value=1 max=400 ></td></tr><tr>';
                        echo '<td><input type="hidden" name="id" value="'.$id.'"></td></tr>';
                        unset($connection);
        ?>            
           <tr>
              <td colspan="2"><input type="submit" class="waves-effect waves-light btn" style="margin-left:35%" name="send" value="enviar"></td> 
           </tr>
            </table>
        </form>
        <?php else: ?>

        <?php
                
            $connection = new mysqli("localhost","root","","talleresfaber");
                
            $idrec = $_POST["reca"];
            $unidad = $_POST["unidades"];
            $idRep = $_POST["id"];
                
            echo $idrec;
                
            $consulta='INSERT INTO INCLUYEN VALUES("'.$idrec.'",'.$idRep.','.$unidad.')';
            echo $consulta;
            if($connection->query($consulta)){
                echo "perfe";    
                header('Location: reparaciones.php');   
            }else{
                echo $connection->errno;
            }         
            echo $connection->errno;
        ?>

      <?php endif ?>
                </div>
</body>
</html>
