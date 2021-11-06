<?php
    session_start();
   $user = $_POST["user"];
   $pw = md5($_POST["pw"]);

  echo "user: ".$user." --- pw: ".$pw; 
  include_once "conectardb.php";
  $conn=connectdb();
  //echo "Connected successfully <br><hr>";
   
   $stmt = $conn->prepare("SELECT USER, PASSWORD, NAME, LASTNAME FROM USUARIOS WHERE USER=? && PASSWORD=?");
   $stmt->bind_param("ss", $user, $pw);
   $stmt->execute();
   $result=$stmt->get_result();

   if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
       echo "user: " . $row["USER"]. " - pw: " . $row["PASSWORD"]." ".$row["NAME"]." ".$row["LASTNAME"]."<br>";
       $_SESSION["name"] = $row["NAME"];
       $_SESSION["lastname"] = $row["LASTNAME"];
       header('Location: principal.php');
     }
   } else {
     session_destroy();

     session_start();
     $_SESSION["incorrect"] = true;
     header('Location: login.php');
   }

   $stmt->close();

?>