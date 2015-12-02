<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
  <script>
      $( document ).ready(function() {
            $( "#dialog" ).dialog();
      });
  </script>
<body>       
        <?php
            $f = 5;
            $c = 6;
            include('libreria.php');
            function print_table($filas,$columnas){
                  echo "<table border='1'>";
                  for($i=0;$i<$filas;$i++){
                     echo "<tr>";
                     for ($j=0;$j<$columnas; $j++){
                         echo "<td>Fila $i Columna $j</td>";
                     }
                     echo "</tr>";
                  }
                  echo "</table>";
            }
            //print_table($f,$c);
            $v=array("Pepe","David","Juan");

            function crearlista($v){
               echo "<ul>";
               for($i=0;$i<sizeof($v);$i++){
                   echo "<li>$v[$i]</li>";
               }
               echo "</ul>";
            }

            //crearlista($v);
            $num1=5;
            $num2=6;
            $suma=0;

            function suma($num1,$num2){
                return $num1+$num2;
            }
            //echo suma($num1,$num2);


            function crearlista2($v){
               echo "<ul>";
               foreach($v as $val){
                   echo "<li>$val</li>";
               }
               echo "</ul>";
            }

            $va=array("A"=>1,"B"=>2,"C"=>3);
            $v1=array(1,2,3);
            //crearlista2($v1);
            

            function existeCad($v,$cad){
               foreach($v as $val){
                   if($val==$cad){
                       return true;
                   }
               }
               return false;
            }

            $vector=array("A"=>1,"B"=>2,"C"=>3);
            $v1=array(1,2,3);

            /*if(existeCad($vector,2)==true){
                echo "existe";
            }else{
                echo "no existe";
            }*/



            function media($v){
                $result=0;
                for ($i=0;$i<sizeof($v);$i++){
                    $result=$result+$v[$i];
                }
                return $result/sizeof($v);
            }

            //$vmedia=array(40,20,10,50,30,60);
            //echo media($vmedia);
            
            echo sumar(4,9);
            
        ?>
</body>
</html>