<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


<script type="text/javascript">

  function checkForm(form)
  {
      if(!form.test1.checked && !form.test2.checked && !form.test3.checked && !form.test4.checked && !form.test5.checked) {
      alert("Seleccione alguna asignatura");
      form.terms.focus();
      return false;
    }else{
      return true;
    }
    
  }

</script>

</head>
<body class=" teal lighten-3">
    <div class="container row">
       <?php if (!isset($_POST["asignatura"])) : ?>
          <div class="card-panel teal lighten-1 center white-text"><h3>Matriculación</h3></div>
       <div class="card-panel white">
           <form method="post" onsubmit="return checkForm(this);" style="margin-left:70px;margin-right:70px;">
           <fieldset>
            <legend>Información Personal</legend>
            <table>
                <tr>
                    <td>DNI: <input type="text" maxlength ="9" name="DNI" required></td>
                    <td>Nombre: <input type="text" name="nombre" required> </td>
                </tr>
                <tr>
                    <td>Apellidos: <input type="text" name="apellidos" required> </td>
                    <td>Direccion: <input type="text" name="direccion" required></td>
                </tr>
                <tr>
                    <td>Telefono: <input maxlength ="9" type="text" name="telefono" pattern="^[9|8|7|6]\d{8}$" required></td>
                    <td>Email: <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="correo" required> </td>
                </tr>
            </table>
            </fieldset>
            <fieldset>
            <legend>Curso</legend>
            
             <p>

          <select class="browser-default" name="curso" required>
            <option value="" disabled selected>Seleccione un curso</option>
            <option value="1º ASIR">1º ASIR</option>
            <option value="2º ASIR">2º ASIR</option>
          </select>
            <br>
            </fieldset>
            <fieldset>
            <legend>Asignaturas</legend>
            <table>
                <tr>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="test1" name="test1" value="Empresa">
                        <label for="test1" >Empresa</label>
                    </td>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="test2" name="test2" value="Sistemas">
                        <label for="test2" >Sistemas</label>
                    </td>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="test3" name="test3" value="Redes">
                        <label for="test3" >Redes</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="test4" name="test4" value="Web">
                        <label for="test4" >Web</label>
                    </td>
                    <td>
                        <input type="checkbox" name="asignatura[]" id="test5" name="test5" value="Seguridad">
                        <label for="test5" >Seguridad</label>
                    </td>
                </tr>
                <tr>
                   <td></td>
                </tr>
            </table>
            </fieldset>
            <fieldset>
            <legend>Beca</legend>
            <p>
                <input class="with-gap" name="beca" value="Si" type="radio" id="test8" checked />
                <label for="test8">Si</label>
                <input class="with-gap" name="beca" value="No" type="radio" id="test9"/>
                <label for="test9">No</label>
            </p>
            </fieldset>
            <input type="submit" name="send" value="enviar" style="width:190px;margin: 2% 38%;" class="waves-effect waves-light btn">
        <?php else: ?>
        <div class="card-panel teal lighten-1 accent-4 center white-text"><h3>Datos de la Matricula</h3></div>
        <div class="card-panel white row">
            <div class="col s3"><img src="estudiante.png" alt=""></div>
            <div class="col s5 offset-s1">
        <?php
            $dni=$_POST['DNI'];
            $nom=$_POST['nombre'];
            $ape=$_POST['apellidos'];
            $dire=$_POST['direccion'];
            $tlf=$_POST['telefono'];
            $correo=$_POST['correo'];
            $curso=$_POST['curso'];
            $asigs= $_POST["asignatura"];
            $beca= $_POST["beca"];
             
             echo "<fieldset><legend>Datos de la MatrÍcula del alumno</legend><table style='width:500px;'><tr><td style='font-weight:bold;'>DNI: </td><td>$dni</td>
                    <td style='font-weight:bold;'>Nombre: </td><td>$nom</td></tr>
                    <tr><td style='font-weight:bold;'>Apellidos: </td><td>$ape</td>
                    <td style='font-weight:bold;'>Direccion: </td><td>$dire</td></tr>
                    <tr><td style='font-weight:bold;'>Telefono:</td><td>$tlf</td>
                    <td style='font-weight:bold;'>Email: </td><td>$correo</td></tr>
                    <tr><td style='font-weight:bold;'>Curso: </td><td>$curso</td><td style='font-weight:bold;'>Beca: </td>            <td>$beca</td></tr><tr><td style='font-weight:bold;'>Asignaturas: </td><td>";
            
            for($i=0;$i<sizeof($asigs);$i++){
               echo $asigs[$i]."<br>";
            }
            echo "</td></tr></table></fieldset>";
        ?>

      <?php endif ?>
      </div>
      </div>
    </div>
</body>
</html>