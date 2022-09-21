<?php
    function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Conect to database
        $bd="ejerciciodb";
        // Create connection
        $conn = mysqli_connect($servername,$username,$password);

        mysqli_select_db($conn,$bd);

        return $conn;
    }
?>
