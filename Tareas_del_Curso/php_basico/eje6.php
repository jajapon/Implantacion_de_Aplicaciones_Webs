<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $varfecha = date("d");
        if("d"<10){
          echo "el servicio esta activo";
        }else{
          echo "el servicio no esta activo";  
        }
    ?>
</body>
</html>
