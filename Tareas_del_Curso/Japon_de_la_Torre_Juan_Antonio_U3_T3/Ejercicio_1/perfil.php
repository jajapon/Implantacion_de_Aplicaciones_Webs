<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

<body>
  <div id="wrapper">
    <div id="title"><h3>Ficha del Alumno</h3></div>
    <div id="left">
   <?php
       $id = $_GET["id"];
       
       $alumnos = [array("dni"=>"22222222D","nombre"=>"Juan Antonio" ,"apellidos"=>"Japon", "direccion"=>"Direccion 1", "tlf"=>"954341035", "email"=>"juan.antonio.japon@gmail.com"),                  array("dni"=>"33333333D","nombre"=>"David","apellidos"=>"Romero","direccion"=>"Direccion 2", "tlf"=>"11111111" ,"email"=>"david@gmail.com"),
                   array( "dni"=>"33333333F" ,"nombre"=>"Adrian" ,"apellidos"=>"Casado" , "direccion"=>"Direccion 3","tlf"=>"2222222" ,"email"=>"adrian@gmail.com"),
                  array( "dni"=>"33323433E" ,"nombre"=>"J Daniel" ,"apellidos"=>"De las Heras" , "direccion"=>"Direccion 4","tlf"=>"33333333" ,"email"=>"jdaniel@gmail.com"),
                  array( "dni"=>"12345678T" ,"nombre"=>"Antonio" ,"apellidos"=>"Merino" ,"direccion"=>"Direccion 5", "tlf"=>"44444444" ,"email"=>"merino@gmail.com"),
                  array( "dni"=>"12232435D" ,"nombre"=>"Dani" ,"apellidos"=>"De la fuente" ,"direccion"=>"Direccion 6", "tlf"=>"66667777" ,"email"=>"delafuente@gmail.com"),
                  array( "dni"=>"29834294A" ,"nombre"=>"Noelia" ,"apellidos"=>"Carrasco" ,"direccion"=>"Direccion 7","tlf"=>"55555555" ,"email"=>"adrian@gmail.com"),
                  array( "dni"=>"24245454S" ,"nombre"=>"Carolyne" ,"apellidos"=>"Nicole" ,"direccion"=>"Direccion 8", "tlf"=>"66666666" ,"email"=>"carol@gmail.com"),
                  array( "dni"=>"12435454D" ,"nombre"=>"Carlos" ,"apellidos"=>"Martinez" ,"direccion"=>"Direccion 9","tlf"=>"99999999" ,"email"=>"carlos@gmail.com"),
                        array( "dni"=>"23424355E" ,"nombre"=>"Juanfran" ,"apellidos"=>"Sanchez" ,"direccion"=>"Direccion 10", "tlf"=>"12345678" ,"email"=>"juanfran@gmail.com")];
      
       $alum_sel = $alumnos[$id];
       $nom = $alum_sel["nombre"];
       $ape = $alum_sel["apellidos"];
       $dni = $alum_sel["dni"];
       $email = $alum_sel["email"];
       $tlf = $alum_sel["tlf"];
       $dir = $alum_sel["direccion"];
        
       echo "<img src='/images/$id.PNG' id='imagen_alum' /></div>";
       echo "<div id='right'>";
       echo "<br><b>".$nom." ".$ape."</b>";
       echo "<p>Estudiante graduado en el Colegio IES Triana como Técnico de Redes, admitido en Otoño de 2015</p>";
       echo "<h4>Informacion personal</h4>";
       echo "<table style='height:90px;text-align:left'>
       <tr><th>DNI: </th><td>$dni</td></tr>
       <tr><th>Dirección: </th><td>$dir</td></tr>
       <tr><th>Teléfono: </th><td>$tlf</td></tr>
       <tr><th>Email: </th><td><a href='#'>$email</a></td></tr>
       </table><br>
       <a href='#'>Standfor who listing</a><br>
       <a href='#'>URL of this page</a><br>
       <img id='icono' src='/images/icon.PNG''/><p id='mem'>Invited member</p><a href='#'>What this?</a></div>";
       //echo "<div id='right>";
       //echo "<table><tr><th>".$nom." ".$ape."<th><tr></table>";
       //echo "</div>";
        
   ?>
 </div>
</body>
</html>


