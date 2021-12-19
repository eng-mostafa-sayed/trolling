<?php 

$server = "localhost";
$user = "root";
$pass = "12345678";
$database = "login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database,"3306");

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>