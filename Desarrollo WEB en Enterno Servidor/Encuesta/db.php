<?php

$servername = "localhost:3308"; 
$username = "nina";  
$password = "12345"; 
$dbname = "valoraciones"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}



?>