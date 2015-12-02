<!DOCTYPE html>
<html lang="">

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
    $contador=0;
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
    <div style="width:410px;height:100%;margin:0 auto;margin-top:10%;">
    <?php
        for($i=0;$i<8;$i++){
            echo "<div style='width:410px;height:50px;'>";
               for($j=0;$j<8;$j++){
                   
                   if($i%2==0){
                       if($j%2==0){
                           echo "<div style='width:50px;height:50px;float:left;background-color:red;'>$contador</div>";
                       }else{
                           echo "<div style='width:50px;height:50px;float:left;background-color:blue;'>$contador</div>";
                       }
                    }else{
                       if($j%2==0){
                           echo "<div style='width:50px;height:50px;float:left;background-color:blue;'>$contador</div>";
                       }else{
                           echo "<div style='width:50px;height:50px;float:left;background-color:red;'>$contador</div>";
                       }
                   }
                   $contador++;
                } 
           
            echo "</div>";
        }
    ?>
    </div>
</body>
</html>
