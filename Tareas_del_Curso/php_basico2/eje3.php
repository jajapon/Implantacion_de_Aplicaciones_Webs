<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v1=["roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta"];
        $v2=[];
        echo "<table border='1'>";
        for($i=0;$i<sizeof($v1);$i++){
            $cadena=$v1[$i];
            if($cadena[0]=="m"){
               array_push($v2,$v1[$i]);
            }
            
        }
        
        for($i=0;$i<sizeof($v2);$i++){
            echo "<tr><td>".$v2[$i]."</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
