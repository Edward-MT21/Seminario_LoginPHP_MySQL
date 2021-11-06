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

    <form action="procesar.php" method="post">
        <div class="imgcontainer">
          <img src="login.jpg" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pw" required>
      
          <button type="submit">Ingresar</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>

        </div>
      </form>
      <?php
        session_start();
        if(isset($_SESSION["incorrect"])){
          echo "<p>Usuario o Contraseña son incorrectos</p>";
          session_destroy();
        }
      ?>      
    
</body>
</html>


