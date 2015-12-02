<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v1=["2222222X"=>"Pepe","3333333X"=>"Manuel","44444444X"=>"José","55555555X"=>"Rosa"];
        $v2=["2222222X"=>"Pérez","3333333X"=>"Jiménez","44444444X"=>"Martínez","55555555X"=>"Rodríguez"];
        
        echo "<table border='1'>";
        foreach($v1 as $k => $value){
              echo "<tr>";
              echo "<td>".$k."<t/d>";
              echo "<td>".$value."</td>";
              echo "<td>".$v2[$k]."</td>";
              echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
