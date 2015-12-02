<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v1=[];
        $elementos=0;
        $i=0;
        while($elementos<10){
            if($i%77==0){
                $v1[$elementos]=$i;
                $elementos++;
            }
            $i++;
        }
        
        for($i=0;$i<sizeof($v1);$i++){
            echo "elemento ".($i+1).": ".$v1[$i]."<br>";   
        }
        
    ?>
</body>
</html>
