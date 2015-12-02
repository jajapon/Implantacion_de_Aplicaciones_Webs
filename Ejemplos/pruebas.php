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
     <?php if (!isset($_POST["username"])) : ?>
       <div id="dialog" title="login">
        <form method="post">
          Usuario: 
          <input type="text" id="username" name="username">
          Contraseña: 
          <input type="password" id="password" name="password">
          <input type="submit" id="enter" value="Entrar">
        </form>
        </div>
      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>
        <?php
            $user = $_POST["username"];
            $pass = $_POST["password"];
            if($user=="pepe"&&$pass="1234"){
                header('Location: matricula.php');
            }else{
                header('Location: pruebas.php');
            }
        ?>
      <?php endif ?>
</body>
</html>