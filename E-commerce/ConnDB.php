<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5ai_moretti_ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->$connect_error);
}
?>