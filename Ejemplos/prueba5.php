<!DOCTYPE html>
<html lang="">

<body>
    
    <?php
      $v = [0,10,15,20,50];
      $v2 = ["Nombre"=>"Pepe","Apellido"=>"Perez"];
      $sum = 0;
      $media = 0;

      for($i=0;$i<sizeof($v);$i++){
          $sum=$sum+$v[$i];
      }
      $media=$sum/sizeof($v);
      echo $media;

      echo "<table border='1'>";
      echo "<tr>";
      foreach($v2 as $k => $v){
         echo "<td>$k</td>";
      }
      echo "</tr>";
      echo "<tr>";
      foreach($v2 as $k => $v){
         echo "<td>$v</td>";
      }
      echo "</tr>";
      echo "</table>";
    ?>
</body>
</html>
