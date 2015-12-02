<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
    <?php
       //BUCLES
       
       //WHILE
       $i = 1; 
       while ($i <= 10){
          echo $i."</br>";
          $i++;
       }

       //DO WHILE
       $i = 0;
       do{
           echo $i;
       } while($i > 0);

      //FOR
      for($i=0;$i<10;$i++){
         echo $i."</br>"; 
      }
    ?>
</body>
</html>
