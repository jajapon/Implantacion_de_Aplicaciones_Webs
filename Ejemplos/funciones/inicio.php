<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        //CONSTANTES
        define('PI',3.14);
        echo PI;

        //VARIABLES
        $var1 = "HOLA";
        echo $var1;

        //CONCATENAR TEXTO EN VARIABLES
        $var2 = "</br>SOY JAPON</br>" . "Y ESTOY HECHO POLVO</br>";
        echo $var2;

        //CONVERSION DE DATOS
        $var3=5;
        $var4=5;
        $var5=$var3+$var4;
        echo $var5;
        
        //IF ELSE
        if(5>2){
            echo "</br>5 MAYOR QUE 2</br>";
        }else{
            echo "2 menor que 5";   
        }

        if($var3>$var4){
            echo "</br>ES MAYOR</br>";
        }elseif($var3<$var4){
            echo "</br>ES MENOR</br>";  
        }else{
           echo "</br>ES IGUAL</br>"; 
        }

        //IF ELSE CON OTRA ESTRUCTURa
    ?>
    <?php if (1>2): ?>
        ES MAYOR
    <?php else:  ?>
        ES MENOR
    <?php endif ?>
</body>
</html>
