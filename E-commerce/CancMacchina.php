<?php
include "ConnDB.php";
session_start();

$utente = $_GET["profilo"];
$sql = "DELETE FROM articoli WHERE Codice = '$utente'";
$result = $conn->query($sql);

if ($result) {
    header('location:Admin.php');
} else {
    header('location:Admin.php?err=Errore di sistema!');
}

$conn->close();
?>