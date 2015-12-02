<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $edades=array(10,20,30,40,50,60);
        $altura=array(1,75,2.00,1.82,1.72,1.65);
        $peso=array(70,80,120,74,90);

        function medias($edades,$altura,$peso){
                
              $mediaedades=0;
              $mediaaltura=0;
              $mediapeso=0;
              
              for($i=0;$i<sizeof($edades);$i++){
                  $mediaedades=$mediaedades+$edades[$i];
              }
              $mediaedades=$mediaedades/sizeof($edades);
            
              for($i=0;$i<sizeof($altura);$i++){
                  $mediaaltura=$mediaaltura+$altura[$i];
              }
              $mediaaltura=$mediaaltura/sizeof($altura);
            
              for($i=0;$i<sizeof($peso);$i++){
                  $mediapeso=$mediapeso+$peso[$i];
              }
              $mediapeso=$mediapeso/sizeof($peso);
            
              $arraymedias=array("EDAD"=>$mediaedades, "ALTURA"=>$mediaaltura,"PESO"=>$mediapeso);
              return $arraymedias;
        }

        var_dump(medias($edades,$altura,$peso));
    ?>
</body>
</html>