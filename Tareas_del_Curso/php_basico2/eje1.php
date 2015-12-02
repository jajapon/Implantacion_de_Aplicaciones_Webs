<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v=["San Cristobal","Cucuta","Maracaibo","Caracas"];
        echo "<p>Numero de elementos ".sizeof($v)."</p>";
        for($i=0;$i<sizeof($v);$i++){
            echo "<p>Ciudad ".$i."</p><br>";
            echo "<h2>".$v[$i]."</h2><br>";
        }
    ?>
</body>
</html>
