<?php
  session_start();
  if(!isset($_SESSION["name"])){
    header('Location: login.php');
  }
?>            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>


        <div class="imgcontainer">
          <img src="login.jpg" alt="Avatar" class="avatar">
        </div>
        <h1>Ingreso Exitoso!</h1>
        <h1>
            <?php
            $name=$_SESSION["name"];
            $lastname=$_SESSION["lastname"];
            echo "Hola " . $name. " " . $lastname;

            ?>
        </h1>
        </div> 
    
</body>
</html>


