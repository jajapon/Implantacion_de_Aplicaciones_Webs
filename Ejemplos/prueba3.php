<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    <!--<ul>
    <?php
       //UL DE 100 ELEMENTOS
       for($i=1;$i<=202;$i++){
            if($i%2!=0){
               echo "<li>$i</li>";
            }
       }
    ?>
    </ul>
    <ul>
    <?php
    $i=0;
       $numImpares=0;
       while ($numImpares < 101){
           if($i%2!=0){
              echo "<li>$i</li>";
              $numImpares++;
           }
           $i++;  
       }    
    ?>
    </ul>-->
    <form action="prueba3.php" method="get">
        <input type="text" name="campo">
        <input type="submit" value="Enviar">
    </form> 
    <?php
        
        if(isset($_GET['campo']){
            $num = 0;
            echo "<table border='1'>";
                echo "<tr><th colspan='2'>TABLA DEL $num</th></tr>";
                for($i=0;$i<11;$i++){
                    echo "<tr>";
                    echo "<td>$num"." x "."$i</td>";
                    echo "<td>".($num*$i)."</td>";
                    echo "</tr>";
                }
            echo "</table>"; 
        }else{
            $num = $_GET['campo'];
            echo "<table border='1'>";
                echo "<tr><th colspan='2'>TABLA DEL $num</th></tr>";
                for($i=0;$i<11;$i++){
                    echo "<tr>";
                    echo "<td>$num"." x "."$i</td>";
                    echo "<td>".($num*$i)."</td>";
                    echo "</tr>";
                }
            echo "</table>";
        }
    ?>
</body>
</html>
