<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v1=[1,4,5,7,2,9,10,11,20,30];
        $mayor = 0;
        for($i=0;$i<sizeof($v1);$i++){
            if($mayor<$v1[$i]){
               $mayor=$v1[$i];  
            }
        }
        echo "el mayor es ".$mayor;
    ?>
</body>
</html>
