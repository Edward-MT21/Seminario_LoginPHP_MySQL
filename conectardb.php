<?php
    echo "user: ";
    function connectdb() {
        //conexion a MYSQL
        $conn = mysqli_connect('localhost:3308', 'root', 'mysql123', 'seminariodb');

        if (!$conn) {
        die("Connection failed!: " . mysqli_connect_error());
        }
        return $conn;
    }

?>    