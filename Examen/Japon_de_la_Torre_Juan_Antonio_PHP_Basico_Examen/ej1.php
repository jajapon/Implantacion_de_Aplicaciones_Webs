<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $datos=array("22222222X" => array("Nombre" => "Juan Diego", "Apellidos" => "Pérez","Localidad"=> "Bormujos"), "3333333Y" => array("Nombre" => "Paco", "Apeliidos" => "Fernández", "Localidad"=> "Salteras"));
        
        foreach($datos as $clave=>$valor){
            echo "<ul>";
            echo "<li>$clave<br><ul>";
            $vectordatos = $valor;
            foreach($vectordatos as $cla=>$val){
                echo "<li>".$cla.": ".$val."</li>";
            }
            echo "</ul></li>";
            echo "</ul>";
        }
    ?>
</body>
</html>